<div>
<section class="heading-link">
    <h3>contact us</h3>
    <p> <a href="/">home</a> / contact </p>
 </section>

 <!-- contact section starts  -->

 <section class="contact">

   <h1 class="heading"> Get In Touch</h1>

   <div class="icons-container">

      <div class="icons">
         <i class="fas fa-clock"></i>
         <h3>opening hours :</h3>
         <p>9:000am to 7:00pm</p>
      </div>

      <div class="icons">
         <i class="fas fa-phone"></i>
         <h3>phone :</h3>
         @if ($settings)
            <p> {{$settings->phone}}</p>
            <p> {{$settings->phone2}}</p>
         @else
            <p> +8801934453979</p>
            <p> +8801965501219</p>
         @endif
      </div>

      <div class="icons">
         <i class="fas fa-envelope"></i>
         <h3> email : </h3>
         @if ($settings)
         <p> {{$settings->email}}</p>
      @else
         <p>info@kaizenitbd.com</p>
      @endif
      </div>

      <div class="icons">
         <i class="fas fa-map"></i>
         <h3>address :</h3>
         @if ($settings)
         <p> {{$settings->address}}</p>
      @else
        <p>151/6, 2nd floor, Gazi Tower, Panthapath Dhaka-1205</p>
      @endif
      </div>

   </div>
   <div class="row">

      <div class="image">
         <img src="{{asset('assets/images/contact-img.png')}}" alt="">
      </div>

      <form   wire:submit.prevent="ContactUs">
         @if (Session::has('message'))
           <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
         @endif
         <h3>send us a message</h3>
         <input type="text" placeholder="name" class="box"  wire:model="name">
         @error('name') <span class="text-danger">{{$message}}</span> @enderror
         <input type="text" placeholder="email" class="box" wire:model="email">
         @error('email') <span class="text-danger">{{$message}}</span> @enderror
         <input type="text" placeholder="phone" class="box" wire:model="phone">
         @error('phone') <span class="text-danger">{{$message}}</span> @enderror
         <textarea class="box" placeholder="message" wire:model="comment" id="" cols="30" rows="10"></textarea>
         @error('comment') <span class="text-danger">{{$message}}</span> @enderror
         <input type="submit" class="btn" value="Submit" >
      </form>
   
   </div>
   

</section>

 <!-- contact section ends -->

 <!-- faq section starts  -->

 <section class="faq">

    <h1 class="heading">frequently asked questions</h1>

    <div class="accordion-container">

       <div class="accordion active">
          <div class="accordion-heading">
             <h3>how to contact for help?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
            You can directly visit our office to contact for any need. 
            Moreover, you can call the hotline number to know any information 
            related to training. You can also knock on the mentioned mail or Facebook messenger
            or you can just contact us on the instant messaging that we provided in our website.
          </p>
       </div>

       <div class="accordion">
          <div class="accordion-heading">
             <h3>How is the quality of the teahers here?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
            Kaizen IT Inistitute already made a remarkable achievements having large portion 
            of student to become a IT leader of nation and this is totally happening due
             to the great supervision of the Expert and Skilled Respected Faculties. Our 
             Respected Members are so Highly Qualified and well trained by this they make 
             the lesson so test and exciting. 
            They all are friendly behavior to the students and as well as to the parents.
          </p>
       </div>

       <div class="accordion">
          <div class="accordion-heading">
             <h3>After Course is there any job Placement?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
            Job is one kind of better satisfaction of every person 
            life so, we are ought to find the talent from every respected 
            course and make their ambitions true by giving job opportunity 
            to local or international markets, 
            this is our promise and also having great satisfaction.
          </p>
       </div>

       <div class="accordion">
          <div class="accordion-heading">
             <h3>Is there any Online classes availabe?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
            Student should get not only proper care like learning, 
            copying etc but to get more and more communication touch 
            we provide class videos and other necessary files so, that 
            they can easily Make practice and get reliable on that course. 
            This is how we are connected and understand with our students.
          </p>
       </div>

       <div class="accordion">
          <div class="accordion-heading">
             <h3>Is there any freelancing guideline availabe?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
            Everything should go in possible track. 
            Kaizen IT institute always focus on online Market. 
            Which shows the brightness of the course..
            For this we hired a multi talented freelancing trainee
             who is successful and make the online market proud like, 
             Fiverr, themeforest, freelancer etc .with their guideline
              our student get to know about Marketplace and how to do freelancing..
            for this we arranged special classes.
          </p>
       </div>

       <div class="accordion">
          <div class="accordion-heading">
             <h3>How you different other institutes?</h3>
             <i class="fas fa-angle-down"></i>
          </div>
          <p class="accordion-content">
            Kaizen IT Institute always provide International quality service provide and best quality support for student.
          </p>
       </div>

    </div>

 </section>

 <!-- faq section ends -->

 <!-- logo slider starts  -->

{{-- our parteners  --}}

<section class="logo-container">
   <h1 class="heading"> OUR PARTNERS</h1>
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         @foreach ($partners as $partner)
            <div class="swiper-slide"> <img src="{{asset('assets/images/Partner')}}/{{$partner->image}}" alt="" class="partner"> </div>
         @endforeach
         
      </div>
   </div>
</section>

</div>