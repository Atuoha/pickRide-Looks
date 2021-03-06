<!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
<meta name="viewport" content="width=device-width, user-scalable=no, shrink-to-fit=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="img/fav.png">
<meta name="description" content="">
<meta name="keywords" content="">
<meta charset="UTF-8">

<meta name="google-signin-client_id" content="102664899786-b4r7vqenfahpgeim6e8cbuh77dggcji3.apps.googleusercontent.com">
<meta name="google-signin-scope" content="profile email">
<title>PickRide</title>

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/nice-select.css">							
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">							
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">	
    <link rel="stylesheet" href="css/bootstrap-timepicker.min.css">			
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="icon" href="img/pick.png">


		
</head>
<body>


<div class="container mt-5">

<!-- LOGIN INTERFACE -->
    <div class="col-md-5 mx-auto mt-5 login_interface">
        <p class="lead text-center">
        Sign in to your account
        <img src="img/gps_bg.jpg" width="50" class="text-center img-responsive" alt="">
        </p>


        <form method="post" action="" id="login-form">
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="Email" name="email" type="email" required>

                    <div class="input-group-prepend">
                        <span class="input-group-text foot-link"><span class="fa fa-envelope"></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="*******" name="pass" type="password" required>

                    <div class="input-group-prepend">
                        <span class="input-group-text foot-link"><span class="fa fa-key"></span>
                    </div>
                </div>
                <a href="javascript:void(0)" class="link" id="forgot_activator">Forget your password?</a>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-4">
                        <button type="submit" class="btn btn-primary btn-block " id="signin_btn"> <i class="fa fa-user"></i> Sign in </button>

                    </div>

                    <div class="col-md-6 col-sm-6 col-8">
                        <div class="g-signin2" data-width="192" data-height="37" data-longtitle="true" data-onsuccess="onSignIn"></div>
                    </div>
                </div>
                 <a href="javacript:void(0)" class="link" id="register_activator">New here? Sign up</a>
            </div>

        </form>
    </div>
<!-- /LOGIN INTERFACE -->




<!-- REGISTER INTERFACE -->

<div class="col-md-5 mx-auto mt-5 register_interface">
        <p class="lead text-center">
            Sign up with PickRide
            <img src="img/gps_bg.jpg" width="50" class="text-center img-responsive" alt="">
        </p>

        <form>
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="Email" name="email" type="email" required>

                    <div class="input-group-prepend">
                        <span class="input-group-text foot-link"><span class="fa fa-envelope"></span>
                    </div>
                </div>
            </div>


                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" placeholder="+234..." name="phone" type="text" required>

                        <div class="input-group-prepend">
                            <span class="input-group-text foot-link"><span class="fa fa-phone"></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <input class="form-control" placeholder="*******" name="pass" type="password" required>

                        <div class="input-group-prepend">
                            <span class="input-group-text foot-link"><span class="fa fa-key"></span>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-4">
                            <button type="submit" class="btn btn-primary btn-block " id="register_btn"> <i class="fa fa-plus"></i> Sign up</button>

                        </div>

                        <div class="col-md-6 col-sm-6 col-8">
                            <div class="g-signin2" data-width="192" data-height="37" data-longtitle="true" data-onsuccess="onSignIn"></div>
                        </div>
                    </div>
                    <a href="javacript:void(0)" class="link login_activator" >Already own an account? Sign in</a>

                </div>
        </form>
    </div>

<!-- /REGISTER INTERFACE -->



<!-- FORGOT PASSWORD INTERFACE -->
<div class="col-md-5 mx-auto mt-5 forgot_interface">
        <p class="lead text-center">
        Enter Email 
        <img src="img/gps_bg.jpg" width="50" class="text-center img-responsive" alt="">
        </p>


        <form method="post" action="" id="login-form">
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="Email" name="email" type="email" required>

                    <div class="input-group-prepend">
                        <span class="input-group-text foot-link"><span class="fa fa-envelope"></span>
                    </div>
                </div>
            </div>

          

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" id="forgot_btn"><i class="fa fa-envelope"></i> Submit Request</button>
                <a href="javacript:void(0)" class="link login_activator">Remembered Details? Sign in</a>
            </div>
        </form>
    </div>

<!-- /FORGOT PASSWORD INTERFACE -->
</div>



</body>










<!-- FOOTER -->
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>			
<script src="js/easing.min.js"></script>			
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>	
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>	
<script src="js/jquery.nice-select.min.js"></script>							
<script src="js/mail-script.js"></script>	
<script src="js/main.js"></script>	
<script src="js/custom.js"></script>

<script src="js/bootstrap-timepicker.min.js"></script>	
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.js"></script>	
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src="js/login.js"></script>	

</html>

