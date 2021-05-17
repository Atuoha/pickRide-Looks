<?php
require_once('includes/head.php');
?>

<body class="loader-active">
 <!--== Preloader Area Start ==-->
 <div class="preloader">
        <div class="preloader-spinner">
            <div class="loader-content">
                <img src="img/preloader.gif" width="100px" alt="JSOFT">
            </div>
        </div>
    </div>
    <!--== Preloader Area End ==-->

			<div class="full_body">
			<!-- start banner Area -->
			<section class="banner-area relative" id="home" >
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-6 col-md-6 ">
							<h6 class="text-white mt-2">Need a ride? just call</h6>
							<h1 class="text-uppercase">
								2348143200267				
							</h1>
							<p class="pt-10 pb-10 text-white">
								Whether you enjoy city lines or extended walks in the open, you can always improve your transport experience by staying in a small by picking a ride.
							</p>
							<a href="#" class="primary-btn text-uppercase" style="border-radius:10px;">Call  for a taxi</a>
						</div>
						<div class="col-lg-4  col-md-6 header-right">
							<h4 class="pb-30">Book Your Taxi Online!</h4>
							<form class="form" method="post" id="distance_form">

							    <div class="form-group">
									<div class="input-group">
										<input class="form-control" type="text" name="name" placeholder="Your name"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'" required>

									<div class="input-group-prepend">
										<span class="input-group-text foot-link"><span class="fa fa-user"></span>
									</div>		
									</div>					    	
							    </div>	


								<div class="form-group">
									<div class="input-group">
									<input id="from" class="form-control" type="text" name="from_place" placeholder="Current Location"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Current Location'" required>

									<div class="input-group-prepend">
										<span class="input-group-text foot-link"><span onclick="getCurrentPosition()" class="fa fa-map-marker"></span></span>
									</div>		
									</div>				    	
								</div>	
								
								

								<div class="form-group">
							    	<input id="to" class="form-control txt-field" type="text" name="to_place" placeholder="Target Destination"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Target Destination'" required >							    	
							    </div>	


															
								<!-- <div class="form-group">
									   <select id="from_place" class="selectpicker show-tick" data-width="100%" data-live-search="true" title="From Destination" data-size="4" data-header="From Destination" name="from_place">
									   <option>Elelenwo,Port Harcourt</option>
										<option>Market Junction,Port Harcourt</option>
										<option>Artilary,Port Harcourt</option>
										<option>Woji,Port Harcourt</option>
										<option>Mile one,Port Harcourt</option>
										<option>Choba,Port Harcourt</option>
										<option>Trans Amadi,Port Harcourt</option>
										</select>
								</div>


								<div class="form-group">
									   <select id="to_place" class="selectpicker show-tick" data-width="100%" data-live-search="true" title="To Destination" data-size="4" data-icon="fa fa-heart"  data-header="To Destination" name="to_place">
										<option>Elelenwo,Port Harcourt</option>
										<option>Market Junction,Port Harcourt</option>
										<option>Artilary,Port Harcourt</option>
										<option>Woji,Port Harcourt</option>
										<option>Mile one,Port Harcourt</option>
										<option>Choba,Port Harcourt</option>
										<option>Trans Amadi,Port Harcourt</option>
										</select>
							    </div> -->
					    
							    <div class="form-group">
									<div class="input-group dates-wrap">                                              
										<input id="datepicker2" required class="dates form-control"  placeholder="Date" type="text" name="dates">                        
										<div class="input-group-prepend">
											<span  class="input-group-text"><span class="fa fa-calendar"></span></span>
										</div>											
									</div>
								</div>	
								
								<div class="form-group">
									<div class="input-group bootstrap-timepicker timepicker input-small">
							    	<input class="form-control" id="timepicker1" data-provide="timepicker" required type="text" name="time" placeholder="Time"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Time'" name="time">
							    	<div class="input-group-prepend">
									  <span  class="input-group-addon input-group-text"><span class="fa fa-clock-o"></span></span>
								</div>
								</div>	
								</div>
								
								 <!-- Default inline 1-->
								 <div class="custom-control custom-checkbox custom-control-inline basic">
									<input type="checkbox"  class="custom-control-input"  value="basic" id="defaultInline1" >
									<label class="custom-control-label musicLab" for="defaultInline1">Basic</label>
								</div>

								<!-- Default inline 2-->
								<div class="custom-control custom-checkbox custom-control-inline deluxe">
									<input type="checkbox" class="custom-control-input"  value="deluxe" id="defaultInline2" >
									<label class="custom-control-label busLab" for="defaultInline2">Deluxe</label>
								</div>

								<!-- Default inline 3-->
								<div class="custom-control custom-checkbox custom-control-inline classic">
									<input type="checkbox" class="custom-control-input checked" value="classic" id="defaultInline3" >
									<label class="custom-control-label perLab" for="defaultInline3">Classic</label>
								</div>

								 <!-- This paragraph holdes the sentence telling a user the plan he chose(It has nothing inside it but collects data through javscript)-->
								 <p class="accSentence"></p>
									<!--  -->

									<!-- THIS INPUT COLLECTS THE PLSN TYPE SELECTED -->
									<input type="hidden" value="" name="plan" id="plan" class="type">
									<!--  -->

								

							    <div class="form-group">
								<button class="btn btn-default btn-lg btn-block text-center text-uppercase" type="submit" id="map_load" value="Calculate">Book Now
								</button>
							    </div>
							</form>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	
		</div>

		
			<?php
				require_once('includes/footer.php');
			?>
			



		</body>
	</html>









































	
	<!-- Script for changing Plan -->
<script>
			
// Obtaining all checkboxes
const basic= document.querySelector('.basic');
const deluxe = document.querySelector('.deluxe');
const classic = document.querySelector('.classic');

basic.addEventListener('click',function(e){
  console.log('basic is clicked')
  // THis hides all other checkboxes
  classic.style.display = 'none';
  basic.style.display = 'none';
  deluxe.style.display = 'none';

  // This changes the label of the checkbox
  document.querySelector('.accSentence').innerHTML = '<i class="fa fa-check-circle-o"></i> Basic Plan Selected';

  // This hides the check box of the selected input
  

  // This addes a value to the hidden input box
  document.getElementById('plan').value = 'Basic Plan';
})

deluxe.addEventListener('click',function(e){
  console.log('Deluxe is clicked')
  // THis hides all other checkboxes
  basic.style.display = 'none';
  classic.style.display = 'none';
  deluxe.style.display = 'none';

// This changes the label of the checkbox
  document.querySelector('.accSentence').innerHTML = '<i class="fa fa-check-circle-o"></i> Deluxe Plan Selected';


// This addes a value to the hidden input box
document.getElementById('plan').value = 'Deluxe Plan';

})
classic
classic.addEventListener('click',function(e){
  console.log('classic is clicked')

   // THis hides all other checkboxes
  basic.style.display = 'none';
  deluxe.style.display = 'none';
  classic.style.display = 'none';

// This changes the label of the checkbox
  document.querySelector('.accSentence').innerHTML = '<i class="fa fa-check-circle-o"></i> Classic Plan Selected';

// This addes a value to the hidden input box
document.getElementById('plan').value = 'Classic Plan';

})
</script>		