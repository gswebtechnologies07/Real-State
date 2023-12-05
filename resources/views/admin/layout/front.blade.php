<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>53 high street</title>
  <!-- =====  SEO MATE  ===== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">
  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
  <!-- =====  CSS  ===== -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/menu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/animation.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('public/front/css/owl.carousel.css')}}">
  <link rel="shortcut icon" href="{{ asset('public/front/images/favicon.png')}}">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>

<body id="home">
  <div class="wrapper">
    <!-- =====  HEADER START  ===== -->
    @include('includes.header') 
    <!-- =====  HEADER END  ===== -->

    @yield('content')

    <!-- =====  FOOTER START  ===== -->
    @include('includes.footer') 

</div>
  <!-- =====  WRAPPER END  ===== -->
  <!-- =====  SCRIPT START  ===== -->
  <script src="{{ asset('public/front/js/jQuery_v3.1.1.min.js')}}"></script>
  
  <script src="{{ asset('public/front/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('public/front/js/letters-type.js')}}"></script>
  <script src="{{ asset('public/front/js/custom.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT3mI0RI16q19Oxv93gSxN0cF0wfxWN6w">
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT3mI0RI16q19Oxv93gSxN0cF0wfxWN6w">
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('public/front/js/parallax.js')}}"></script>
  <script src="{{ asset('public/front/js/wow.js')}}"></script>
  <script src="{{ asset('public/front/js/waterpipe.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
  var smokyBG = $('#smoky').waterpipe({
    gradientStart: '#ed11ff',
    gradientEnd: '#2f52ff',
    smokeOpacity: 0.04,
    numCircles: 1,
    maxMaxRad: 300,
    minMaxRad: 500,
    minRadFactor: 0,
    iterations: 4,
    drawsPerFrame: 2,
    lineWidth: 1,
    speed: 0.2,
    bgColorInner: "#000000",
    bgColorOuter: "#000000"
  });
  </script>
  <script>
      const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
  
  autoplay: {
    delay: 5000,
  },
  
  

//   Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
  </script>
  <!-- =====  SCRIPT END  ===== -->
</body>
</html>