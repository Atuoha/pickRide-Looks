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
								Notification				
							</h1>	
							<p class="text-white link-nav"><a class="text-white foot-link home_page">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a class="text-white foot-link notify"> Notification</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="mx-auto col-md-12">
					<h1 class="text-center lead">Recent Notifications</h1>
						<p>Our pricing is calculated through the distance covered and we keep it very smooth by ensuring that the money charged is directly dependent on the target location's distance from current location</p>

				<!-- Collapsible Notification -->
				<div id="accordion">
				<div class="card">
					<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<button class="btn btn-link normal-black " data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<i class="fa fa-percent text-yellow"></i> Save upto $5 daily
						</button>
					</h5>
					</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body">
					With pickride, you can save upto $5 daily by staying in a small, for the prices are cheaper than the thoughts of your minds
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingTwo">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed normal-black" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					<i class="fa fa-unlock text-yellow"></i> Your chances are unlocked
					</button>
				</h5>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
				<div class="card-body">
					Pickride has given any the levrage to book taxi from anywhere in Port Harcourt without holding back any destination in as much as it has a way that leads in
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingThree">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed normal-black" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					<i class="fa fa-envelope text-yellow"></i> Message from Taxi App
					</button>
				</h5>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
				<div class="card-body">
					As a client of PickRide, we've made a point of duty to serve you till your highest of rate of satisfication and you can book now to use later.
				</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingFour">
				<h5 class="mb-0">
					<button class="btn btn-link collapsed normal-black" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
					<i class="fa fa-user text-yellow"></i> We appreciate you
					</button>
				</h5>
				</div>
				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
				<div class="card-body">
					Thanks for allowing Pickride to be your No.1 choice in terms of taxi booking solutions, we appreciate your efforts
				</div>
				</div>
			</div>
			<!-- End of Collapsible Notification -->

					</div>
				</div>	

				<p class=" mt-5 col-md-5 mx-auto">
				<img class="foot-link responsive-img home_page"  src="img/td.png">
				</p>
			</section>
			<!-- End contact-page Area -->
		</div>

			<?php
				require_once('includes/footer.php');
			?>

	</body>
	</html>