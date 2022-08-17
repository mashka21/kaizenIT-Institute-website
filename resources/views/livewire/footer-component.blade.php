<div>
<!-- footer section starts  -->

<section class="footer">

    <!-- admission going courese  -->
 <section id="home-admission-going" class="">
    <div class="text-center" data-aos="fade-down">
       <h1 class="display-3 mb-3" style="font-weight: bold;">Admission to all courses is ongoing</h1>
       <p class="mb-5" style="font-size: 14px;">It is not too late to make a career decision. Get enrolled in any course online or offline at your convenience now.</p>
       <div class="text-center ml-5 mb-5">
          <a href="join-free-seminar" class="btn btn-success float-left ml-5">Join Free Seminar</a>
          <a href="courses" class="btn btn-success">Browse Courses</a>
       </div>
    </div>
 </section>
    <div class="box-container">
 
       <div class="box" data-aos="fade-right">
          <h3> Contact Us </h3>
           <b style="font-size: 14px;">Head Office:</b>
          <p class="mb-3"><i class="fas fa-map-pin text-success"></i>  
            @if ($settings)
                {{$settings->address}}
            @else
                2nd Floor, Signal, 151/6, Gazi Tower Panthapath, Dhaka 1205
            @endif
        </p>
          <p>
             <i class="fas fa-phone text-success"></i>
             @if ($settings)
                {{$settings->phone}} <br>
                {{$settings->phone2}} <br>
             @else
                01934-453979 <br>
                01934-453979 <br>
             @endif
          </p>
          <p>
             <i class="fas fa-envelope text-success"></i>
             @if ($settings)
                {{$settings->email}}<br>
            @else
                info@kaizenitbd.com
            @endif
 
          </p>
          <div class="share">
             <a href="@if($settings){{$settings->facebookk}}@else # @endif" class="fab fa-facebook-f"></a>
             <a href="@if($settings){{$settings->twitter}}@else # @endif" class="fab fa-twitter"></a>
             <a href="@if($settings){{$settings->instgram}}@else # @endif" class="fab fa-instagram"></a>
             <a href="@if($settings){{$settings->twitter}}@else # @endif" class="fab fa-linkedin"></a>
          </div>
       </div>
 
       <div class="box" data-aos="fade-down">
          <h3>quick links</h3>
          <a href="/" class="link">home</a>
          <a href="/about" class="link">about</a>
          <a href="/courses" class="link">courses</a>
          <a href="/contact" class="link">contact</a>
       </div>
 
       <div class="box" data-aos="fade-left">
          <h3>useful links</h3>
          <a href="#" class="link">help center</a>
          <a href="#" class="link">ask questions</a>
          <a href="#" class="link">send feedback</a>
          <a href="#" class="link">private policy</a>
          <a href="#" class="link">terms of use</a>
       </div>
 
    </div>
 
    <div class="credit"> Copyright &copy;2022 Kaizen IT institue. All rights reserved | <span>Kaizen it</span></div>
 </section>
 
 <!-- footer section ends -->
</div>