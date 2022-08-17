@foreach ($homeAds as $ads)
   @if ($ads->status != '0')
      <div id="myModal" class="modal fade">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body">
                  
                     <img src="{{asset('assets/images/homeAds')}}/{{$ads->image}}" alt="" width="100%">
                  
               </div>
            </div>
         </div>
      </div>
   @endif
@endforeach
<section class="home home-hero">

    <div class="swiper home-slider">

       <div class="container">
          <div class="row mt-3">
            @foreach ($slider as $slide)
               <div class="col-md-6 mt-5 hero-section-content" data-aos="fade-right">
                  <h5><span class="fas fa-check text-light bg-success p-2 mr-3"></span> {{$slide->short_title}}</h5>
                  <h1 class="mt-5"><span class="text-success">  {{$slide->main_title}}</span></h1>
                  <p> {{$slide->description}}</p>
                  <div class="row">
                     <div class="col-md-6"> <a href="courses" class="btn btn-success"><i class="fas fa-book"></i> Browse Courses</a> </div>
                     <div class="col-md-6"> <a href="" class="btn btn-success"><i class="fas fa-book"></i> Free Seminar</a> </div>
                     <div class="support mt-5">
                        <img src="{{asset('assets/images/basis-logo.png')}}" alt="" height="50" width="50" style="border-radius: 50%;" class="ml-3"><span><b> BASIS Membership No: AS-21-04-0014</b></span>
                     </div>
                  </div>
               </div>
               <div class="col-md-6" style="margin-top: 50px !important;">
                  <!-- 16:9 aspect ratio -->
                     <div class="embed-responsive embed-responsive-16by9 header-video" data-aos="fade-down" style="border-radius: 20px;">
                        <iframe id="iframe" src="{{asset('assets/images/sliders1')}}/{{$slide->video}}" width="560" height="416" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                     </div>
               </div>
            @endforeach
           
          </div>
       </div>

    </div>

 </section>

 <!-- subjects section  -->
 <section id="subjects" data-aos="zoom-in">
    <div class="subjects mt-5">

       <div class="box-container">

        <div class="owl-carousel">
       <a href="/courses" style="text-decoration: none;">
          <div class="box">
             <i class="fas fa-book fa-4x text-success"></i>
             <h3>Design & multimedia</h3>
          </div>
       </a>

       <a href="/courses" style="text-decoration: none;">
          <div class="box">
             <i class="fas fa-blog fa-4x text-success"></i>
              <h3>Web & Software</h3>
           </div>
       </a>
       <a href="/courses" style="text-decoration: none;">
           <div class="box">
             <i class="fas fa-book fa-4x text-success"></i>
              <h3>Degital Marketing</h3>
           </div>
       </a>

       <a href="/courses" style="text-decoration: none;">
           <div class="box">
              <i class="fas fa-mask fa-4x text-success"></i>
              <h3>cyber secuirty</h3>
           </div>
       </a>
       <a href="/courses" style="text-decoration: none;">
           <div class="box">
              <i class="fas fa-robot fa-4x text-success"></i>
              <h3>Cloud Computing</h3>
           </div>
       </a>
       <a href="/courses" style="text-decoration: none;">
           <div class="box">
             <i class="fas fa-signal fa-4x text-success"></i>
              <h3>Networking</h3>
           </div>
       </a>
       <a href="/courses" style="text-decoration: none;">
           <div class="box">
             <i class="fas fa-microscope fa-4x text-success"></i>
              <h3>3D animation</h3>
           </div>
       </a>

       </div>
    </div>
  </div>
 </section>

 <!-- home section ends -->
 <!-- popular courses  -->
 <section id="popular-courses" class="courses">
        <div class="container-fluid pt-5 pb-3" id="portfolio">
              <div class="text-center">
                  <h1 class="display-3 mb-5" style="font-weight: bold;">Popular Courses</h1>
                  <p class="courses-content">Our course list is sorted by the skills that are currently most in demand  in the country and abroad. From here you can enroll in the course online or offline at any time.</p>
              </div>
            
              <div class="row mb-5 mt-3 carousel-isotope">
                  <div class="col-12 text-center mb-2">
                      <ul class="list-inline mb-4" id="portfolio-flters">
                        
                          <li class="courese-isotope sm-3 m-1 active"  data-filter="*">All Courses</li>
                          <li class="courese-isotope m-1 sm-3" data-filter=".designmultimedia">Design & Multimedia</li>
                          <li class="courese-isotope m-1 sm-3" data-filter=".websoftware">Web & Software</li>
                          <li class="courese-isotope m-1 sm-3" data-filter=".degitalmarketing">Degital Marketing</li>
                          <li class="courese-isotope m-1 sm-3" data-filter=".Networking">Networking</li>
                  </div>
                  <hr>
              </div>
              <div class="portfolio-container box-container" data-aos="fade-left">
                <div class="">
                     {{-- design & multimedia Popular-Courese --}}
                  @foreach ($p_courses as $p_course)
                  @if($p_course->course_category === "designmultimedia")
                   <div class="col-lg-4 col-md-6 mb-4 portfolio-item designmultimedia">
                    <a href="{{route('course.details',['slug'=>$p_course->slug])}}">
                       <div class="box">
                          <div class="image">
                             <img src="{{asset('assets/images/popular_courses')}}/{{$p_course->image}}" alt="" width="400" height="300">
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
                              <img src="{{asset('assets/images/popular_courses')}}/{{$p_course->image}}" alt="" width="400" height="300">
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
                               <img src="{{asset('assets/images/popular_courses')}}/{{$p_course->image}}" alt="" width="400" height="300">
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
                               <img src="{{asset('assets/images/popular_courses')}}/{{$p_course->image}}" alt="" width="400" height="300">
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
 <!-- success stories section  -->
 <section id="home-success-stories" data-aos="fade-up">
    <div class="text-center">
       <h1 class="display-3 mb-2" style="font-weight: bold;">Success Stories</h1>
       <p class="courses-content">Every success story of our students inspires every moment as the Kaizen IT <br> Institute moves forward.</p>
       <a href="success-story" class="btn btn-success" style="font-size: 10px;">See more</a>
   </div>

 </section>

 <!-- home services section  -->
 <section id="home-services" data-aos="fade-up">
    <div class="text-center">
       <h1 class="display-3 mb-2" style="font-weight: bold;">Kaizen IT special services</h1>
       <p class="courses-content">Not just classes, Creative IT is always ready for students in any need, anytime. So <br> with advanced courses you get some bonus benefits, which only we give.</p>
       <a href="software-services" class="btn btn-success" style="font-size: 10px;">See other benefits</a>
   </div>
 </section>

 <!-- comments section   -->
 <section id="home-comments" data-aos="fade-up">
    <div class="text-center">
       <h1 class="display-3 mb-2" style="font-weight: bold;">Comments</h1>
       <p class="courses-content">We believe each of our students is a member of the Kaizen IT family. So any<br>
          constructive comments from the students inspire us to move forward by correcting <br>
          our mistakes.
       </p>
    </div>
    <section class="teachers">

       <div class="swiper teachers-slider comments-slider">

          <div class="swiper-wrapper">
            @foreach ($comments as $comment)
             <div class="swiper-slide slide ml-3">
                <div class="image">
                   <img src="{{asset('assets/images/comments')}}/{{$comment->image}}" alt="" height="200" style="border-right: 3px solid rgb(226, 222, 222); border-left: 3px solid rgb(226, 222, 222);; border-top: 3px solid rgb(226, 222, 222);; border-bottom: 3px solid rgb(226, 222, 222);;">
                </div>
             </div>
             @endforeach
          </div>

       </div>

    </section>
 </section>

 <!-- admission going courese  -->
<section id="home-admission-going" class="courses">
    <div class="text-center" data-aos="fade-down">
       <h1 class="display-3 mb-2" style="font-weight: bold;">Admission to all courses is ongoing</h1>
       <p class="courses-content">You can enroll in any course online or offline at your convenience right now.</p>
    </div>

   <!-- Dsign and Multimedia  -->
   <h1 style="margin-top: 2rem; margin-bottom: 2rem; font-size: 3rem; font-weight: bold;">Design and Multimedia</h1>
   <div class="box-container">

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
    <!-- Web and Software  -->
    <h1 style="margin-top: 8rem; margin-bottom: 4rem; font-size: 3rem; font-weight: bold;">Web and Software</h1>
    <div class="box-container">

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

       <!-- Digital Marketing  -->
       <h1 style="margin-top: 8rem; margin-bottom: 4rem; font-size: 3rem; font-weight: bold;">Digital Marketing</h1>
       <div class="box-container">

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

      <!-- Networking  -->
      <h1 style="margin-top: 8rem; margin-bottom: 4rem; font-size: 3rem; font-weight: bold;">Networking</h1>
      <div class="box-container">
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
       <div class="text-center mt-5 mb-5">
          <a href="/courses" class="btn btn-success mb-5 mt-5" style="font-size: 12px;">See all courses</a>
      </div>
</section>

 <!-- free seminars  -->

 <section id="free-seminars">
    <div class="conatiner">
       <div class="row">
          <div class="col-md-6 col-free-seminar" data-aos="fade-right">
             <h1 class="display-3" style="font-weight: bold;">Take part in free seminars</h1>
             <p class="free-seminar-content">Can't decide which course to take for freelancing? Join our free seminar. You will learn about the possibilities of each course in these thematic seminars. Moreover, by talking to the expert counselor present at the seminar, you can easily decide to choose the appropriate course.</p>
             <h3  style="font-weight: bold;" class="text-success">Upcoming free seminars</h3>


             <div id="semianr-1" style="background: none !important;">
               @foreach ($freeseminars as $freeseminar)
                <div class="d-block mt-3" style="background:#fff; box-shadow:4px 4px 4px rgb(156, 154, 154); border-radius:15px;">
                      <div class="d-flex justify-content-between p-4">
                         <div class="seminar-content-div float-left" style="color: #000;">
                            <h2 class="seminar-content-p pl-3">{{$freeseminar->seminar_name}}</h2>
                            <p class="seminar-date pl-3" style="font-size: 12px;">{{$freeseminar->seminar_type == 1 ? 'Offline' : 'Online'}} , Date : {{$freeseminar->seminar_time}}</p>
                         </div>
                         {{-- <a href="join-free-seminar" class="btn btn-sm btn-success" style="font-size: 12px; border-radius:15px height:10px;">join</a> --}}
                         <a href="/join-free-seminar" class="btn btn-success btn-sm" style="border-radius:15px; font-size: 12px; height:30px !important; padding-top:5px !important;">join</a>
                      </div>
                      
                   </div>
                @endforeach
          </div>


          
             <div class="semianr-2"></div>
          </div>
          <div class="col-md-6" data-aos="fade-left">
             <img src="{{asset('assets/images/kaizen-seminar.jpg')}}" alt="" class="free-seminar-img">
             <img src="{{asset('assets/images/download.png')}}" alt="" class="free-seminar-inner-img">
          </div>
       </div>
    </div>
 </section>


 <!-- pretical-project -->

 <section id="practocal-projects" style="margin-top: 70px !important;">
    <div class="conatiner">
       <div class="row">
          <div class="col-md-5" data-aos="fade-right">
             <img src="{{asset('assets/images/download.png')}}" alt="" style="margin-left: 200px; margin-top: 0 !important;">
             <img src="{{asset('assets/images/practical2.jpg')}}" alt="" class="project-image">
          </div>
          <div class="col-md-7" style="margin-top: 100px;" data-aos="fade-left">
             <h1 class="display-3 ml-5" style="font-weight: bold;">Teaching through practical projects is our specialty</h1>
             <p class="practocal-projects-content ml-5">Any education is incomplete without a practical project. According to a survey, 6 percent of people suffer from a lack of hands-on education. Moreover, if you do not have a portfolio in the marketplace or local job, it takes a long time to get a job. More or less everyone suffers from this problem at the beginning of all careers. So Creative IT believes in hands-on learning. That is why we have a sufficient number of projects in each course. If you finish all the projects under the supervision of our skilled mentor, you will be able to build a good portfolio of your own during the course.</p>
          </div>
       </div>
    </div>
 </section>

 <!-- Trusted Organizations -->

 <section id="Trusted-Organizations">
    <div class="conatiner">
       <h3 class="text-danger" style="font-weight: bold;">Of glory13 years</h3>
       <div class="row">
          <div class="col-md-6 col-free-seminar" data-aos="fade-right">
             <h1 class="display-3" style="font-weight: bold;">Trusted organization in the world of IT expert making</h1>
             <p class="free-seminar-content">The Kaizen IT Institute is by your side to keep yourself updated with
                the latest technology. Whether it is IT sector or non-IT sector, there is a good demand for IT experts
                everywhere now. That's why we have been creating IT experts for 13 long years with updated curriculum,
                experienced mentors and modern labs. In its continuation, we have got more than 50,000 successful faces,
                who have become self-reliant and created employment for more people. And the success of these students is
                 the inspiration for our journey. We believe that every human being is talented, and it is our responsibility
                 to develop your talents. All you need is your interest and regular practice.</p>

                 <a href="courses" class="btn btn-success float-left">Browse courses</a>
                 <a href="about" class="btn btn-success float-right">Learn more</a>
          </div>
          <div class="col-md-6" data-aos="fade-left">
             <img src="{{asset('assets/images/kaizen-seminar.jpg')}}" alt="" class="free-seminar-img">
          </div>
       </div>
    </div>
 </section>

 <!-- working with organizations -->
 <section id="working-with-organizations" class="mb-5">
    <div class="text-center">
       <h1 class="display-1 mb-2" data-aos="fade-down" style="font-weight: bold;">We <span class="text-danger">৭০০ + </span>Associated with the organization</h1>
       <div class="container-fluid pt-5 pb-3" id="portfolio">
          <div class="row mb-5 mt-3 carousel-isotope">
              <div class="col-12 text-center mb-2">
                  <ul class="list-inline mb-4" id="portfolio-flters">
                   <div class="row">
                      <div class="col-md-4">
                         <li class="orgaization-isotope m-1 active" data-filter=".first">I am working with the best organizations in the country</li>
                      </div>
                      <div class="col-md-4">
                         <li class="orgaization-isotope m-1" data-filter=".second">We are members of all those organizations</li>
                      </div>
                      <div class="col-md-4">
                         <li class="orgaization-isotope m-1" data-filter=".third">Our other institutions</li>
                      </div>
                   </div>
              </div>
              <hr>
          </div>
          <div class="row portfolio-container box-container">
            <div class="">
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/0-1.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/2.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/3.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/4.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/5.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/6.png')}}" alt="" class="mb-5">
              </div>

              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/7.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/8.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/9.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/10.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/11.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/12.png')}}" alt="" class="mb-5">
              </div>

              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/13.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/14.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/42.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/16.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/17.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item first ">
                <img src="{{asset('assets/images/18.png')}}" alt="" class="mb-5">
              </div>

              <div class="col-lg-4 col-md-6 mb-4 portfolio-item second ">
                <img src="{{asset('assets/images/m-1.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                <img src="{{asset('assets/images/m-2.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                <img src="{{asset('assets/images/m-3.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                <img src="{{asset('assets/images/m-4.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                <img src="{{asset('assets/images/m-5.png')}}" alt="" class="mb-5">
              </div>
              <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                <img src="{{asset('assets/images/m-6.png')}}" alt="" class="mb-5">
              </div>


          </div>
         </div>
  </div>
 </section>

 <section class="heading-link mb-5">
   <p> <a href="/make-admission-course" class="bnt btn-success text-light py-2 px-3" style="text-decoration: none; border-radius:20px;">Apply Course</a></p>
</section>