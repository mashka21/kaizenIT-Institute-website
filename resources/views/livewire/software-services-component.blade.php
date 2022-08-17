<div>
<section class="heading-link">
    <h3>our Services</h3>
    <p> <a href="/">home</a> / Software services </p>
 </section>

 <section class="courses">

    <h1 class="heading"> our famous Services </h1>
    <p>Our Service list is sorted by the value that are currently most in demand in the country and abroad. From here you can apply any service and you will get on time.</p>

    <h1 style="margin-top: 2rem; margin-bottom: 2rem; font-size: 3rem; font-weight: bold;">Design and Multimedia</h1>
    <div class="box-container">
      
      @foreach ($s_services as $s_service)
         @if ($s_service->service_category === 'designmultimedia')
            <div class="box">
               <div class="image">
                  <img src="{{asset('assets/images/software_services')}}/{{$s_service->s_image}}" alt="">
               </div>
               <div class="content">
                  <h3>{{$s_service->s_name}}</h3>
                  <div class="d-flex">
                     <p class="mr-auto">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star-half-alt"></i></span>

                     </p>
                     <span class="float-right mt-3" style="color: gray; font-size:16px;">({{$s_service->s_reviews}}) Reviews</span>
                  </div>

                  <div class="icons">
                     <span class="text-center"> <span class="text-success font-weight-bold" style="font-weight: bold;">&#2547;</span> {{$s_service->s_price}}</span>
                     <span class="text-center"> <span class="text-success font-weight-bold" style="font-weight: bold;">&#2547;</span> {{$s_service->s_discount_price}}</span>
                     <a href="{{route('apply-service')}}" class="btn btn-success btn-sm" style="font-size: 12px; border-radius:20px;">Apply</a>
                  </div>
               </div>
            </div>
         @endif
       @endforeach
      
     </div>
     <h1 style="margin-top: 2rem; margin-bottom: 2rem; font-size: 3rem; font-weight: bold;">Web & Software</h1>
     <div class="box-container">
      @foreach ($s_services as $s_service)
      @if ($s_service->service_category === 'websoftware')
         <div class="box">
            <div class="image">
               <img src="{{asset('assets/images/software_services')}}/{{$s_service->s_image}}" alt="">
            </div>
            <div class="content">
               <h3>{{$s_service->s_name}}</h3>
               <div class="d-flex">
                  <p class="mr-auto">
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star-half-alt"></i></span>

                  </p>
                  <span class="float-right mt-3" style="color: gray; font-size:16px;">({{$s_service->s_reviews}}) Reviews</span>
               </div>

               <div class="icons">
                  <span class="text-center">  <span class="text-success font-weight-bold" style="font-weight: bold;">&#2547;</span> {{$s_service->s_price}}</span>
                  <span class="text-center text-danger" style="text-decoration:line-through;"> <span class="font-weight-bold" style="font-weight: bold;">&#2547;</span>{{$s_service->s_discount_price}}</span>
                  <a href="{{route('apply-service')}}" class="btn btn-success btn-sm" style="font-size: 12px; border-radius:20px;">Apply</a>
               </div>
            </div>
         </div>
      @endif
    @endforeach


     </div>
     <h1 style="margin-top: 2rem; margin-bottom: 2rem; font-size: 3rem; font-weight: bold;">Degital Marketing</h1>
     <div class="box-container">
      @foreach ($s_services as $s_service)
      @if ($s_service->service_category === 'degitalmarketing')
         <div class="box">
            <div class="image">
               <img src="{{asset('assets/images/software_services')}}/{{$s_service->s_image}}" alt="">
            </div>
            <div class="content">
               <h3>{{$s_service->s_name}}</h3>
               <div class="d-flex">
                  <p class="mr-auto">
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star"></i></span>
                     <span><i class="fas fa-star-half-alt"></i></span>

                  </p>
                  <span class="float-right mt-3" style="color: gray; font-size:16px;">({{$s_service->s_reviews}}) Reviews</span>
               </div>

               <div class="icons">
                  <span> <span class="text-success font-weight-bold" style="font-weight: bold;">&#2547;</span> {{$s_service->s_price}}</span>
                  <a href="{{route('apply-service')}}" class="btn btn-success btn-sm" style="font-size: 12px; border-radius:20px;">Apply</a>
               </div>              
            </div>
         </div>
      @endif
    @endforeach

       </div>

 </section>
</div>