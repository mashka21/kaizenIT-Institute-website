<div>
<section class="heading-link">
    <h3>our courses</h3>
    <p> <a href="/">home</a> / courses </p>
 </section>

 <section class="courses">

    <h1 class="heading"> our famous courses </h1>
    <p>Our course list is sorted by the skills that are currently most in demand in the country and abroad. From here you can enroll in the course online or offline at any time.</p>

    <div>
    <h1 style="margin-top: 5rem; margin-bottom: 2rem; font-size: 3rem; font-weight: bold;">Design and Multimedia</h1>
    <div class="box-container" data-aos="fade-right" data-aos-duration="1000">

      @foreach ($p_courses as $p_course)
      @if($p_course->course_category === "designmultimedia")
      <a href="{{route('course.details',['slug'=>$p_course->slug])}}">
            <div class="box">
               <div class="image">
                  <img src="{{asset('assets/images/popular_courses')}}/{{$p_course->image}}" alt="">
               </div>
               <div class="content">
                  <h3>{{$p_course->course_name}}</h3>
                  <div class="d-flex">
                     <p class="mr-auto">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star-half-alt"></i></span>
                        ({{$p_course->t_n_reviews}}review)
                     </p>
                     <p class="ml-auto pt-1rem">{{$p_course->t_n_students}} students</p>


                  </div>

                  <div class="icons">
                     <span> <i class="fas fa-book"></i> {{$p_course->n_modules}} modules </span>
                     <span> <span class="text-success font-weight-bold">&#2547;</span> {{$p_course->price}} fee </span>
                     <span> <i class="fas fa-clock"></i> {{$p_course->hours}} hours </span>
                  </div>
               </div>
            </div>
         </a>
      @endif
    @endforeach

    </div>
 </div>


 <div>
    <h1 style="margin-top: 5rem; margin-bottom: 2rem; font-size: 3rem; font-weight: bold;">Web and software</h1>
    <div class="box-container" data-aos="zoom-in-up" data-aos-duration="1000">

      @foreach ($p_courses as $p_course)
      @if($p_course->course_category === "websoftware")
      <a href="{{route('course.details',['slug'=>$p_course->slug])}}">
          <div class="box">
             <div class="image">
                <img src="{{asset('assets/images/popular_courses')}}/{{$p_course->image}}" alt="">
             </div>
             <div class="content">
                <h3>{{$p_course->course_name}}</h3>
                <div class="d-flex">
                   <p class="mr-auto">
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star"></i></span>
                      <span><i class="fas fa-star-half-alt"></i></span>
                      ({{$p_course->t_n_reviews}}review)
                   </p>
                   <p class="ml-auto pt-1rem">{{$p_course->t_n_students}} students</p>


                </div>

                <div class="icons">
                   <span> <i class="fas fa-book"></i> {{$p_course->n_modules}} modules </span>
                   <span> <span class="text-success font-weight-bold">&#2547;</span> {{$p_course->price}} fee </span>
                   <span> <i class="fas fa-clock"></i> {{$p_course->hours}} hours </span>
                </div>
             </div>
          </div>
       </a>
      @endif
    @endforeach

    </div>
 </div>

 <div>
    <h1 style="margin-top: 5rem; margin-bottom: 2rem; font-size: 3rem; font-weight: bold;">Digital Marketing</h1>
    <div class="box-container" data-aos="fade-up-left" data-aos-duration="1000">

      @foreach ($p_courses as $p_course)
      @if($p_course->course_category === "degitalmarketing")
      <a href="{{route('course.details',['slug'=>$p_course->slug])}}">
         <div class="box">
            <div class="image">
               <img src="{{asset('assets/images/popular_courses')}}/{{$p_course->image}}" alt="">
            </div>
            <div class="content">
               <h3>{{$p_course->course_name}}</h3>
               <div class="d-flex">
                  <p class="mr-auto">
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star-half-alt"></i></span>
                     ({{$p_course->t_n_reviews}}review)
                  </p>
                  <p class="ml-auto pt-1rem">{{$p_course->t_n_students}} students</p>


               </div>

               <div class="icons">
                  <span> <i class="fas fa-book"></i> {{$p_course->n_modules}} modules </span>
                  <span> <span class="text-success font-weight-bold">&#2547;</span> {{$p_course->price}} fee </span>
                  <span> <i class="fas fa-clock"></i> {{$p_course->hours}} hours </span>
               </div>
            </div>
         </div>
       </a>
      @endif
    @endforeach
    </div>
 </div>





 <div>
    <h1 style="margin-top: 5rem; margin-bottom: 2rem; font-size: 3rem; font-weight: bold;">Networking</h1>
    <div class="box-container" data-aos="fade-right" data-aos-duration="800">

      @foreach ($p_courses as $p_course)
      @if($p_course->course_category === "Networking")
      <a href="{{route('course.details',['slug'=>$p_course->slug])}}">
         <div class="box">
            <div class="image">
               <img src="{{asset('assets/images/popular_courses')}}/{{$p_course->image}}" alt="">
            </div>
            <div class="content">
               <h3>{{$p_course->course_name}}</h3>
               <div class="d-flex">
                  <p class="mr-auto">
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star-half-alt"></i></span>
                     ({{$p_course->t_n_reviews}}review)
                  </p>
                  <p class="ml-auto pt-1rem">{{$p_course->t_n_students}} students</p>


               </div>

               <div class="icons">
                  <span> <i class="fas fa-book"></i> {{$p_course->n_modules}} modules </span>
                  <span> <span class="text-success font-weight-bold">&#2547;</span> {{$p_course->price}} fee </span>
                  <span> <i class="fas fa-clock"></i> {{$p_course->hours}} hours </span>
               </div>
            </div>
         </div>
       </a>
      @endif
    @endforeach

    </div>
 </div>



 </section>
</div>