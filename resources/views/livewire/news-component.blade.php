<div>
    <section class="heading-link">
       <h3>News</h3>
       <p> <a href="/">home</a> / News </p>
    </section>
 
    <section id="news" class="courses">
       
    <h1 class="heading"> our Latest news </h1>
    <h1 style="margin-top: 2rem; margin-bottom: 2rem; font-size: 3rem; font-weight: bold;">Our News & Content</h1>
    <div class="box-container">
      
      @foreach ($news as $new)
            <div class="box">
               <div class="image">
                  <img src="{{asset('assets/images/News')}}/{{$new->image}}" alt="">
               </div>
               <div class="content">
                  <h3>{{$new->title}}</h3>
                  <p>{{$new->description}}</p>
                  <span>Starting Soon: </span><span>{{$new->starting_date}}</span>
                  <div class="icons">
                    @if($new->discount_price)
                      <span class="text-center"> <span class="text-success font-weight-bold" style="font-weight: bold;">&#2547;</span> {{$new->discount_price}}</span>
                    @endif
                    @if($new->price)
                         <span class="text-center text-danger" style="text-decoration: line-through"> <span class="text-danger font-weight-bold" style="font-weight: bold;">&#2547;</span> {{$new->price}}</span>
                    @endif
                     @if($new->news_type == '0')
                      <a href="make-admission-course" class="btn btn-success btn-sm" style="font-size: 12px; border-radius:20px;">Apply</a>
                    @else
                      <a href="join-free-seminar" class="btn btn-success btn-sm" style="font-size: 12px; border-radius:20px;">Apply</a>
                    @endif
                  </div>
               </div>
            </div>
       @endforeach
      
     </div>
    </section>
 </div>
 
