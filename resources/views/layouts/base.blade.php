<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kaizen it institute</title>

   <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/kaizen-logo.png')}}">
   <!-- fonts  -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=News+Cycle&family=Nunito:wght@200;300;400;500;700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- bootstrap cdn  -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

   <!-- owl crousel css  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- aos animation css  -->
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
   
   {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
   {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}
   {{-- pop-up-model  --}}
   

   @livewireStyles
</head>
<body>

<!-- header section starts  -->
<div class="header-nav p-3">
   <?php
      use App\Models\Setting;
      $settings = Setting::find(1);
      ?>
  <a href="" class="top-header"><span class="text-light ml-5" style="font-size: 12px;"> <i class="fas fa-phone"></i> @if($settings) {{$settings->phone}} @else +8801934-453979 @endif </span></a>
  <a href="" class="top-header"><span class="text-light ml-5" style="font-size: 12px;"> <i class="fas fa-envelope"></i> @if($settings) {{$settings->email}} @else info@kaizenitbd.com @endif</span></a>
</div>

<header class="header" id="header">


   <a href="/" class="logo"><img src="{{asset('assets/images/kaizen-logo.png')}}" alt="" width="50" height="50"> </a>

   <nav class="navbar" id="nav">
      <div id="close-navbar" class="fas fa-times"></div>
      <a href="/" class="{{ request()->is('*/*') ? 'active' : '' }}">Home</a>
      <a href="about" class="{{ request()->is('*about*') ? 'active' : '' }}">about us</a>
      <a href="software-services" class="{{ request()->is('*software-services*') ? 'active' : '' }}">software service</a>
      <a href="freelancing" class="{{ request()->is('*freelancing*') ? 'active' : '' }}">Freelancing</a>
      <a href="success-story" class="{{ request()->is('*success-story*') ? 'active' : '' }}">success story</a>
      <a href="our-team" class="{{ request()->is('*our-team*') ? 'active' : '' }}">Our Team</a>
      <a href="contact"  class="{{ request()->is('*contact*') ? 'active' : '' }}">contact</a>
      <a href="news"  class="{{ request()->is('*news*') ? 'active' : '' }}">News</a>
      <a href="courses" class="btn btn-success courses-btn {{ request()->is('*courses*') ? 'active' : '' }}"><i class="fas fa-book"></i> courses <i class="fas fa-chevron-down"></i></a>

      {{-- Authenticating user and admin for accessing their menu  --}}

      @if (Route::has('login'))
      @auth
        @if (Auth::user()->role ==='ADM')
        <div class="dropdown pl-5">
         <a class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="user-avatar rounded-circle"  width="30" height="30">
         </a>
         <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{route('admin.dashboard')}}"><i class="fas fa-user"></i> Dashboard</a>
      
            <hr>
            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i> Logout</a>
            <form id="logout-form" action="{{route('logout')}}" method="POST">
               @csrf
            </form>
         </div>
      </div>
          @else
          <div class="dropdown">
            <a class="" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <input type="hidden" id="account-btn">
               <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="user-avatar rounded-circle"  width="30" height="30">
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
               <a class="dropdown-item" href="{{route('profile.show')}}"><i class="fas fa-user"></i> Profile</a>
         
               <hr>
               <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i> Logout</a>
               <form id="logout-form" action="{{route('logout')}}" method="POST">
                  @csrf
               </form>
            </div>
          @endif

          @else
           <a href="#" id="account-btn" class="fas fa-user pl-5"></a>
          @endif

  @endif

   </nav>

   <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
   </div>

</header>

@livewire('login-register')


<!-- header section ends -->

<!-- home section starts  -->

{{$slot}}







@livewire('footer-component')





<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- bootstrap js cdn  -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <!-- filter data using iostope js cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- owl coursel  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- aos animaion  -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- counter-up -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.waypoints.js')}}"></script>
<!-- custom js file link  -->
<script src="{{asset('assets/js/script.js')}}"></script>
{{-- aos animation  --}}
<script>
  AOS.init();
</script>

{{-- counter functionality  --}}
<script>
    $('.counter').counterUp({
      delay: 10,
      time:   2000
    });

 </script>
 <script>
   $(document).ready(function(){
      $("#myModal").modal('show');
   });
</script>
<script>
   $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:3,
          nav:false
      },
      1000:{
          items:5,
          nav:true,
          loop:false
      }
  }
})
});

</script>

<script>

   var portfolioIsotope = $('.portfolio-container').isotope({
       itemSelector: '.portfolio-item',
       layoutMode: 'fitRows'
   });
   $('#portfolio-flters li').on('click', function () {
       $("#portfolio-flters li").removeClass('active');
       $(this).addClass('active');

       portfolioIsotope.isotope({filter: $(this).data('filter')});
   });
</script>


{{-- about page isotope  --}}
<script>

   var whyUsIsotope = $('.whyUs-container').isotope({
       itemSelector: '.whyUs-item',
       filter: '.expertteachers',
       layoutMode: 'fitRows'
   });
   $('#whyUs-flters li').on('click', function () {
       $("#whyUs-flters li").removeClass('active');
       $(this).addClass('active');

       whyUsIsotope.isotope({filter: $(this).data('filter')});
   });
</script>

@livewireScripts

</body>
</html>
