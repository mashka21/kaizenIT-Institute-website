<div>
<section class="success-stories">
    <div class="container">
            <h1 class="display-1 text-success" style="font-weight: bold;">Success stories</h1>
            <p class="success-story-content">The success of the students is the inspiration for our 13-year journey.
                Since the birth of Kaizen IT Institute, millions of people have been
                our partners in our advancement. In the experienced guidelines
                of skilled mentors we have found countless successful faces.
                Many of the successful people have built their own organizations
                as well as employed more people. The number of self-reliant faces
                working or freelancing in the country and abroad is not less.
                Numerous such success stories have taken Kaizen IT to an unrivaled position.
            </p>

            <div class="row">
               @foreach ($s_stories as $s_story)
                  <div class="col-md-6 sm-6 xs-6" style="margin-top: 50px !important;">
                     <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9" data-aos="fade-right" style="border-radius: 20px;">
                           <iframe src="{{asset('assets/images/SuccessStories')}}/{{$s_story->video}}" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0"  allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                  </div>
                 @endforeach
            </div>


    </div>
</section>

 <!-- popular courses  -->
 <section id="popular-courses" class="courses">
   <div class="container-fluid pt-5 pb-3" id="portfolio">
         <div class="text-center">
             <h1 class="display-3 mb-5" style="font-weight: bold;">Popular Courses</h1>
             <p class="courses-content">Our course list is sorted by the skills that are currently most in demand  in the country and abroad. From here you can enroll in the course online or offline at any time.</p>
         </div>
       
         <div class="row mb-5 mt-3 carousel-isotope">
             <div class="col-12 text-center mb-2">
                 <ul class="list-inline mb-4" id="portfolio-flters" style="width:130% !important; margin-left:-110px;">
                   
                     <li class="courese-isotope sm-3 m-1 active"  data-filter="*">All Courses</li>
                     <li class="courese-isotope m-1 sm-3" data-filter=".designmultimedia">Design & Multimedia</li>
                     <li class="courese-isotope m-1 sm-3" data-filter=".websoftware">Web & Software</li>
                     <li class="courese-isotope m-1 sm-3" data-filter=".degitalmarketing">Degital Marketing</li>
                     <li class="courese-isotope m-1 sm-3" data-filter=".Networking">Networking</li>
             </div>
             <hr>
         </div>
         <div class="row portfolio-container box-container" data-aos="fade-left">
           <div class="">
                {{-- design & multimedia Popular-Courese --}}
             @foreach ($p_courses as $p_course)
             @if($p_course->course_category === "designmultimedia")
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item designmultimedia">
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
               
              </div>
              @endif
              @endforeach

              {{-- Web & Software Populkar course  --}}
              @foreach ($p_courses as $p_course)
              @if($p_course->course_category === "websoftware")
               <div class="col-lg-4 col-md-6 mb-4 portfolio-item websoftware">
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
                
               </div>
               @endif
               @endforeach

               {{-- degitalmarketing Popular course  --}}
               @foreach ($p_courses as $p_course)
               @if($p_course->course_category === "degitalmarketing")
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item degitalmarketing">
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
                 
                </div>
                @endif
                @endforeach


               {{-- degitalmarketing Popular course  --}}
               @foreach ($p_courses as $p_course)
               @if($p_course->course_category === "Networking")
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item Networking">
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
                 
                </div>
                @endif
                @endforeach

          </div>
        </div>
 </div>

</section>
</div>