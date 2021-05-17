<?php
require_once('includes/head.php');


// Restricting a user from accessing this page if he didn't make a booking

 if(!isset($_POST['name']) || $_POST['name'] === ""){
	header('location:index.php');
 }
?>
<body>
			<div class="full_body">
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Booking			
							</h1>	
							<p class="text-white link-nav"><a class="text-white foot-link home_page">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a class="text-white foot-link contact"> Contact Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
						<div class="col-md-12">
							<div class="row">
						<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
						</div>


						<div class="row">
						<div class="col-md-6 col-sm-12">
							<table class="table table-responsive table-striped">
								
							<tbody class="m-3">
								<tr>
									<th>Name:</th>
									<td><?php echo $_POST['name'] ?></td>
								</tr>

								<tr>
									<th>Current Position:</th>
									<td id="curr_des"><?php echo $_POST['from_place'] ?></td>
								</tr>	

								<tr>
									<th>Target Destination:</th>
									<td id="targ_des"><?php echo $_POST['to_place'] ?></td>
								</tr>

								<tr>
									<th>Date:</th>
									<td><?php echo $_POST['dates'] ?></td>
								</tr>

								<tr>
									<th>Time:</th>
									<td><?php echo $_POST['time'] ?></td>
								</tr>	

								<tr>
									<th>Plan:</th>
									<td>
										<?php 
										if(isset($_POST['plan']) && $_POST['plan'] != ''){
											echo $_POST['plan'];
										}else{
											echo 'Basic Plan';
										}
									?></td>
								</tr>
								
								<tr>
									<th>Distance In Mile:</th>
									<td id="in_mile"></td>
								</tr>

								<tr>
									<th>Distance is Kilo:</th>
									<td id="in_kilo"></td>
								</tr>

								<tr>
									<th>Time/Duration:</th>
									<td id="duration_text"></td>
								</tr>

								

							</tbody>
							</table>

							<form>
								<div class="form-group">
							    	<input class="form-control txt-field" type="text" name="note" placeholder="Note to driver"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Note to driver'" >
							    	
							    </div>

								<div class="form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Short description of target location" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Short description of target location'"></textarea>				
									</div>

								<!-- Data -->
								<input id="ip" type="hidden" value="<?php echo $_POST['name'] ?>" name="ip" />
								<input id="name" type="hidden" value="<?php echo $_POST['name'] ?>" name="name" />
								<input id="plan" type="hidden" value="<?php echo $_POST['plan'] ?>" name="plan" />
								<input id="origin" type="hidden" value="<?php echo $_POST['from_place'] ?>" name="origin" />
								<input id="destination" type="hidden" value="<?php echo $_POST['to_place'] ?>" name="destination" />
								<input id="date" type="hidden" value="<?php echo $_POST['dated'] ?>" name="date"  />
								<input id="time" type="hidden" value="<?php echo $_POST['time'] ?>" name="time" />
								<!--  -->
								
						</div>

						<div class="col-md-6 col-sm-12">
							Payment Details
						</div>

						</form>	
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










































<!-- SCRIPT FOR BOOKING -->
<script>
    
	$(function () {
        var origin, destination, map;

        // add input listeners
        google.maps.event.addDomListener(window, 'load', function (listener) {
            setDestination();
			initMap();
			
			var origin = $('#origin').val();
            var destination = $('#destination').val();
            var travel_mode ='Driving';
            var directionsDisplay = new google.maps.DirectionsRenderer({'draggable': false});
            var directionsService = new google.maps.DirectionsService();
           displayRoute('Driving', origin, destination, directionsService, directionsDisplay);
            calculateDistance(travel_mode, origin, destination);
        });

        // init or load map
        function initMap() {

            var myLatLng = {
                lat: 52.520008,
                lng: 13.404954
            };
            map = new google.maps.Map(document.getElementById('map'), {zoom: 16, center: myLatLng,});
        }

       

		
		initMap();

        function displayRoute(travel_mode, origin, destination, directionsService, directionsDisplay) {
            directionsService.route({
                origin: origin,
                destination: destination,
                travelMode: 'Driving',
                avoidTolls: true
            }, function (response, status) {
                if (status === 'OK') {
                    directionsDisplay.setMap(map);
                    directionsDisplay.setDirections(response);
                } else {
                    directionsDisplay.setMap(null);
                    directionsDisplay.setDirections(null);
                    alert('Could not display directions due to: ' + status);
                }
            });
        }

        // calculate distance , after finish send result to callback function
        function calculateDistance(travel_mode, origin, destination) {

            var DistanceMatrixService = new google.maps.DistanceMatrixService();
            DistanceMatrixService.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode[travel_mode],
                    unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, save_results);
        }

        // save distance results
        function save_results(response, status) {

            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Sorry , not available to use this travel mode between " + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    var distance_in_kilo = distance.value / 1000; // the kilo meter
                    var distance_in_mile = distance.value / 1609.34; // the mile
                    var duration_text = duration.text;
                    appendResults(distance_in_kilo, distance_in_mile, duration_text);
                    sendAjaxRequest(origin, destination, distance_in_kilo, distance_in_mile, duration_text);
                }
            }
        }

        // append html results
        function appendResults(distance_in_kilo, distance_in_mile, duration_text) {
            $('#in_mile').html(distance_in_mile.toFixed(2));
            $('#in_kilo').html(+ distance_in_kilo.toFixed(2));
            $('#duration_text').html(duration_text);
        }

    
});


// MAP

</script>