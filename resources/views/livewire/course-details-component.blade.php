<div>
    <section class="heading-link">
        <h3>Course Details</h3>
        <p> <a href="/">home</a> / Course / {{$this_course->course_name}}</p>
    </section>
    <section id="course-details">
        <div class="row">
            <div class="col-md-7">
                <h1 class="mb-3 ml-2 text-success" style="font-weight: bold;">{{$this_course->course_name}}</h1>
                <img src="{{asset('assets/images/popular_courses')}}/{{$this_course->image}}" alt="" width="600" style="border-radius: 20px;">
                <div class="course-over-view mt-5">
                    <h1 class="text-success" style="font-weight: bold;">COURSE OVERVIEW</h1>
                    <p class="description">{{$this_course->description}}</p>

                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="mt-3 text-success" style="font-weight: bold;">COURSE MODULE</h1>
                            <ul class="list-group mt-3" style="font-size: 18px;">
                            @if ($this_course)                            
                              @foreach ($this_course->Coursemodelvalues->where('course_id',$this_course->id) as $pav)
                                <li class="list-group-item">                                  
                                    <span class="fas fa-check-double text-dark p-1 mr-1"></span> {{$pav->value}}
                                </li>
                                @endforeach
                                @endif
                              </ul>
                        </div>
                        <div class="col-md-6 mt-5">
                            <h1 class="mt-3 text-success" style="font-weight: bold;">COURSE DURATION</h1>
                            <p class="ml-4 module"><span style="font-weight: bold;">Course Free: </span> {{$this_course->price}} TK</p>
                            <p class="ml-4 module"><span style="font-weight: bold;">Course Duration: </span> {{$this_course->duration}} months</p>
                            <p class="ml-4 module"><span style="font-weight: bold;">Total Hours: </span> {{$this_course->hours}} hours</p>
                            <p class="ml-4 module">( Weekly  {{$this_course->w_classes}} Class, Every Class  {{$this_course->c_hours}} Hours )</p>
                        </div>
                        <div class="col-md-6 mt-5">
                            <h1 class="mt-3 text-success" style="font-weight: bold;">COURSE PREREQUISITES</h1>
                            <p class="ml-3 mt-1"><span class="fas fa-check-double text-dark p-1 mr-1"></span> <span class="module"> Basic knowledge of computer operating. </span></p>
                            <p class="ml-3 mt-1"><span class="fas fa-check-double text-dark p-1 mr-1"></span> <span class="module">  Basic knowledge of internet browsing. </span></p>
                        </div>
                    </div>
                    

                    
                </div>
            </div>
            <div class="col-md-5 mt-5" style="font-size: 18px;">
                <h1 class="mb-3 ml-2 text-success" style="font-weight: bold;">OUR OTHER COURSES</h1>
                <div class="list-group">
                    <div class="list-group-item list-group-item-action bg-success text-light">
                      OUR COURSES
                    </div>
                    @foreach ($courses as $course)
                        <a href="{{route('course.details',['slug'=>$course->slug])}}" class="list-group-item list-group-item-action"><span class="fas fa-check-double text-dark p-1 mr-1"></span> {{$course->course_name}}</a>
                    @endforeach
                    
                  </div>
            </div>
        </div>
    </section>

    <section class="heading-link mb-5">
        <p> <a href="/make-admission-course" class="bnt btn-success text-light py-2 px-3" style="text-decoration: none; border-radius:20px;">Apply Course</a></p>
    </section>
</div>