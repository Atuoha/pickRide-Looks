$(document).ready(function(){
   


    $('.routes').click(function(){
 
     window.history.pushState("", "Routes", "routes" );
     
     $.ajax({
         url:"routes.php",
         success: function(data){
             $('body').html(data)
            //  location.reload();
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
            }
            $(document).on('click', '#mobile-nav-toggle', function(e) {
                $('body').toggleClass('mobile-nav-active');
                $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
                $('#mobile-body-overly').toggle();
            });
         }
     })
    })
 
    $('.home_page').click(function(){
     window.history.pushState("", "", "home" );
     let page = 'home';
     
        
        // jQuery(".full_body").isotope();

     $.ajax({
         url:"home.php",
         success: function(data){
             $('body').html(data)
            //  location.reload();
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
            }
            jQuery('.preloader').fadeOut(3000);
            jQuery('.preloader-spinner').delay(400).fadeOut('slow');
            jQuery('body').removeClass('loader-active');

            $(document).on('click', '#mobile-nav-toggle', function(e) {
                $('body').toggleClass('mobile-nav-active');
                $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
                $('#mobile-body-overly').toggle();
            });
         }
     })
    })
 
    $('.account').click(function(){
     // window.location.replace('account.php');
     window.history.pushState("account", "", "account" );
     $.ajax({
         url:"account.php",
         success: function(data){
             $('body').html(data)
            //  location.reload();
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
            }
            $(document).on('click', '#mobile-nav-toggle', function(e) {
                $('body').toggleClass('mobile-nav-active');
                $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
                $('#mobile-body-overly').toggle();
            });


         }
     })
    })
 
 
    $('.contact').click(function(){
     // window.location.replace('account.php');
     window.history.pushState("contact", "", "contact" );
     $.ajax({
         url:"contact",
         success: function(data){
             $('body').html(data)
            //  location.reload();
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
            }
            $(document).on('click', '#mobile-nav-toggle', function(e) {
                $('body').toggleClass('mobile-nav-active');
                $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
                $('#mobile-body-overly').toggle();
            });
         }
     })
    })
 
    $('.service').click(function(){
     // window.location.replace('account.php');
     window.history.pushState("service", "", "service" );
     $.ajax({
         url:"service.php",
         success: function(data){
             $('body').html(data)
            //  location.reload();

            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
            }
            $(document).on('click', '#mobile-nav-toggle', function(e) {
                $('body').toggleClass('mobile-nav-active');
                $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
                $('#mobile-body-overly').toggle();
            });
         }
     })
    })
 
    $('.pricing').click(function(){
     // window.location.replace('pricing.php');
     window.history.pushState("pricing", "", "pricing" );
     $.ajax({
         url:"pricing.php",
         success: function(data){
             $('body').html(data)
            //  location.reload();
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
            }
            $(document).on('click', '#mobile-nav-toggle', function(e) {
                $('body').toggleClass('mobile-nav-active');
                $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
                $('#mobile-body-overly').toggle();
            });
         }
     })
    })
 
// about page
$('.about').click(function(){
    // window.location.replace('pricing.php');
    window.history.pushState("about", "", "about" );
    $.ajax({
        url:"about.php",
        success: function(data){
            $('body').html(data)
           //  location.reload();
           if ($('body').hasClass('mobile-nav-active')) {
               $('body').removeClass('mobile-nav-active');
           }
           $(document).on('click', '#mobile-nav-toggle', function(e) {
               $('body').toggleClass('mobile-nav-active');
               $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
               $('#mobile-body-overly').toggle();
           });
        }
    })
   })

// help page
$('.help').click(function(){
    // window.location.replace('pricing.php');
    window.history.pushState("help", "", "help" );
    $.ajax({
        url:"help.php",
        success: function(data){
            $('body').html(data)
           //  location.reload();
           if ($('body').hasClass('mobile-nav-active')) {
               $('body').removeClass('mobile-nav-active');
           }
           $(document).on('click', '#mobile-nav-toggle', function(e) {
               $('body').toggleClass('mobile-nav-active');
               $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
               $('#mobile-body-overly').toggle();
           });
        }
    })
   })

//notify page
$('.notify').click(function(){
    // window.location.replace('pricing.php');
    window.history.pushState("notify", "", "notify.php" );
    $.ajax({
        url:"notify.php",
        success: function(data){
            $('body').html(data)
           //  location.reload();
           if ($('body').hasClass('mobile-nav-active')) {
               $('body').removeClass('mobile-nav-active');
           }
           $(document).on('click', '#mobile-nav-toggle', function(e) {
               $('body').toggleClass('mobile-nav-active');
               $('#mobile-nav-toggle i').toggleClass('lnr-cross lnr-menu');
               $('#mobile-body-overly').toggle();
           });
        }
    })
   })

 
 // Collecting data from form on index and pushing to book.php
 $('#distance_form').submit(function(event){
     event.preventDefault();
 
     const data = $(this).serialize();
 
     $.ajax({
         url:"book.php",
         data:data,
         type:"POST",
         success: function(data){
             window.history.pushState("book", "", "book" );
             $('body').html(data)
         }
     })
 })
 
 
  function setDestination() {
            var from_places = new google.maps.places.Autocomplete(document.getElementById('from'));
            var to_places = new google.maps.places.Autocomplete(document.getElementById('to'));

            google.maps.event.addListener(from_places, 'place_changed', function () {
                var from_place = from_places.getPlace();
                var from_address = from_place.formatted_address;
                $('#origin').val(from_address);
            });

            google.maps.event.addListener(to_places, 'place_changed', function () {
                var to_place = to_places.getPlace();
                var to_address = to_place.formatted_address;
                $('#destination').val(to_address);
            });
        }
setDestination()
 
 
    // get current Position
    function getCurrentPosition() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(setCurrentPosition);
        } else {
            alert("Geolocation is not supported by this browser.")
        }
    }

    // get formatted address based on current position and set it to input
    function setCurrentPosition(pos) {
        var geocoder = new google.maps.Geocoder();
        var latlng = {lat: parseFloat(pos.coords.latitude), lng: parseFloat(pos.coords.longitude)};
        geocoder.geocode({ 'location' :latlng  }, function (responses) {
            console.log(responses);
            if (responses && responses.length > 0) {
                $("#to").val(responses[1].formatted_address);
                $("#origin").val(responses[1].formatted_address);
                //    console.log(responses[1].formatted_address);
            } else {
                alert("Cannot determine address at this location.")
            }
        });
    }
getCurrentPosition();





// MAP
































 //   
//  $('select').selectpicker();
    $('#timepicker1').timepicker();
    


 })



 
 jQuery(window).load(function () {
    jQuery('.preloader').fadeOut(3000);
    jQuery('.preloader-spinner').delay(400).fadeOut('slow');
    jQuery('body').removeClass('loader-active');
    // jQuery(".full_body").isotope();
}); //window load End
