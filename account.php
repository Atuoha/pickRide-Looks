<?php
require_once('includes/head.php');
?>
			<div class="full_body">
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Account				
							</h1>	
							<p class="text-white link-nav"><a class="text-white foot-link home_page" id="">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a class="text-white foot-link account" id=""> Account</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area">
				<div class="container">
					<div class="card card-body mb-3 text-center">
               		 <div class="row">
                    <div class="col-md-5 col-sm-12 mx-auto">
					<div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-12">
                       <img alt="User Pic" width="100" src="img/default.png" id="profile-image1" class=" img-circle rounded-circle img-responsive"> 
                     
                 
                      </div>
                      <div class="col-md-12" >
                          <div class="container" >
                            <h2>Your Name</h2>
                            <p>a   <b>PickRide User</b></p>
                          
                           
                          </div>
						   <hr>
						   <div class="col-md-10 col-sm-12 mx-auto">
						   <table class="table table-responsive table-striped">
								
								<tbody class="m-3">
									<tr>
										<th>Fullname:</th>
										<td>Your Name</td>
									</tr>
	
									
	
									<tr>
										<th>Email:</th>
										<td>yourmail@gmail.com</td>
									</tr>	
									
									<tr>
										<th>Location:</th>
										<td>Location,Nigeria</td>
									</tr>
	
									<tr>
										<th>Mobile:</th>
										<td>234-000-0000-000</td>
									</tr>
	
								</tbody>
								</table>



								<a class="btn bg-warning" data-toggle="modal" data-target="#exampleModal">Login to Edit</a>
								<a></a>
								</div>
                          <hr>
                      </div>
					</div>
					
                </div>
            	</div>


				</div>	
			</section>
			<!-- End contact-page Area -->
		</div>

			<?php
				require_once('includes/footer.php');
			?>

	</body>
	</html>



	<!-- Login Modal -->
	<div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user"></i> Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name"  class="col-form-label">Fullname:</label>
            <input type="text" required placeholder="Enter Fullname" class="form-control" id="recipient-name">
		  </div>
		  
		  <div class="form-group">
            <label for="recipient-name"  class="col-form-label">Email:</label>
            <input type="email" required placeholder="Enter Email" class="form-control" id="recipient-name">
		  </div>
		  
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" required placeholder="Enter Password" class="form-control" id="recipient-name">
		  </div>
		<a class="foot-link" data-toggle="modal" data-target="#exampleModal2" data-dismiss="modal">Already have an account? Login</a>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="Submit" class="btn btn-primary">Create Account</button>
	  </div>
	  </form>
	  
    </div>
  </div>
</div>

<!-- Login Modal -->





	<!-- 	Register Modal -->
	<div class="modal fade" id="exampleModal2"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user"></i> Login Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name"  class="col-form-label">Email:</label>
            <input type="email" required placeholder="Enter Email" class="form-control" id="recipient-name">
		  </div>
		  
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" required placeholder="Enter Password" class="form-control" id="recipient-name">
		  </div>
		<a class="foot-link" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">Don't have an account? Create</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
		<button type="Submit" class="btn btn-primary">Login</button>
        </form>
		
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->