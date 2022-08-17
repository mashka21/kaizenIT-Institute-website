<div>
<section class="heading-link">
    <h3>Our Team Members</h3>
    <p> <a href="/">home</a> / Team </p>
 </section>




 <!-- teachers section starts  -->

 <section class="teachers">

    <h1 class="heading">Our Team</h1>

    <div class="our-team">
      @foreach ($members as $member)
         <div class="slide">
            <div class="image">
                  <img src="{{asset('assets/images/Team-Members')}}/{{$member->image}}" alt="" >
                  <div class="share">
                  <div><a href="#">{{$member->title}}</a></div>
                  <div><p>{{$member->description}}</p></div>
                  </div>
               </div>
               <div class="content">
                  <h3>{{$member->name}}</h3>
                  <span>{{$member->title}}</span>
               </div>
         </div>
      @endforeach
      
       {{-- <div class="slide">
           <div class="image">
               <img src="{{asset('assets/images/owner.jpg')}}" alt="">
               <div class="share">
                 <div><a href="#">Web Desinger</a></div>
                 <div><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p></div>
               </div>
            </div>
            <div class="content">
               <h3>Fitah Abdi</h3>
               <span>expert tutor</span>
            </div>
       </div> --}}

       {{-- <div class="slide">
           <div class="image">
               <img src="{{asset('assets/images/hasan.jpg')}}" alt="">
               <div class="share">
                 <div><a href="#">Web Desinger</a></div>
                 <div><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p></div>
               </div>
            </div>
            <div class="content">
               <h3>Fitah Abdi</h3>
               <span>expert tutor</span>
            </div>
       </div>

       <div class="slide">
           <div class="image">
               <img src="{{asset('assets/images/fitah.jpeg')}}" alt="">
               <div class="share">
                 <div><a href="#">Web Desinger</a></div>
                 <div><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p></div>
               </div>
            </div>
            <div class="content">
               <h3>Fitah Abdi</h3>
               <span>expert tutor</span>
            </div>
       </div>

       <div class="slide">
           <div class="image">
               <img src="{{asset('assets/images/ceo.jpg')}}" alt="">
               <div class="share">
                 <div><a href="#">Web Desinger</a></div>
                 <div><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p></div>
               </div>
            </div>
            <div class="content">
               <h3>Fitah Abdi</h3>
               <span>expert tutor</span>
            </div>
       </div> --}}
       
     </div>

 </section>

 <!-- teachers section ends -->
</div>


