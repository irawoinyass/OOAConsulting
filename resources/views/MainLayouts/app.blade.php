<!DOCTYPE html>
<html lang="zxx"> 
    

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>{{$title}}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="apple-touch-icon.html">
        <link rel="shortcut icon" type="image/x-icon" href="{{$topper->icon}}">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
        <!-- flaticon css -->
        <link rel="stylesheet" type="text/css" href="/assets/fonts/flaticon.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/off-canvas.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="/assets/css/rsmenu-main.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" type="text/css" href="/assets/inc/custom-slider/css/nivo-slider.css">
        <link rel="stylesheet" type="text/css" href="/assets/inc/custom-slider/css/preview.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="/style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
        
    </head>
    <body class="defult-home">
        
        <div class="offwrap"></div>

        <!--Preloader start here-->
    <!--     <div id="pre-load">
           <div id="loader" class="loader">
               <div class="loader-container">
                   <div class='loader-icon'><img src="/assets/images/fav.png" alt="Bizup Consulting Business"></div>
               </div>
           </div>              
       </div> -->
        <!--Preloader area end here-->





<div class="main-content">
@include('MainInc.top')
    @yield('content')
@include('MainInc.footer')    

</div>







        <!-- modernizr js -->
        <script src="/assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="/assets/js/bootstrap.min.js"></script>
        <!-- op nav js -->
        <script src="/assets/js/jquery.nav.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="/assets/js/isotope.pkgd.min.js"></script>
        <!-- owl.carousel js -->
        <script src="/assets/js/owl.carousel.min.js"></script>
        <!-- wow js -->
        <script src="/assets/js/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="/assets/js/skill.bars.jquery.js"></script>
        <!-- imagesloaded js -->
        <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
         <!-- waypoints.min js -->
        <script src="/assets/js/waypoints.min.js"></script>
        <!-- counterup.min js -->
        <script src="/assets/js/jquery.counterup.min.js"></script> 
        <!-- magnific popup js -->
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nivo slider js -->
        <script src="/assets/inc/custom-slider/js/jquery.nivo.slider.js"></script>
        <!-- contact form js -->
        <script src="/assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="/assets/js/main.js"></script>

    </body>


</html>