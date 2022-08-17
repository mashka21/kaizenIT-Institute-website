<div>
    <style>
        p{
            font-size: 18px;
            line-height: 1.8;
        }
    </style>
   <section id="admission">
        <h1 class="mt-3 text-success" style="font-weight: bold;">Make Admission here or come directly to our office</h1>
        <p>You can directly visit our office to contact for any need. Moreover, 
            you can call the hotline number to know any information related to 
            training. You can also knock on the mentioned mail or Facebook messenger.</p>
        <div class="row mb-5">
            @foreach ($settings as $setting)
            <div class="col-md-6 mt-3">  
                <iframe  src="@if($setting){{$setting->map}}@else https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9057294615245!2d90.38467401498136!3d23.750740884589263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9ac5fce59cb%3A0xfd3e17cbaa2f7805!2sKaizen%20IT%20Ltd.!5e0!3m2!1sen!2sbd!4v1658047400246!5m2!1sen!2sbd @endif" width="500" height="450" style="border:0; border-radius:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <h2 class="mt-3 text-success" style="font-weight: bold;">Head Office [Main Campus, Dhaka]</h2>
                @if ($setting)
                 <p> {{$setting->address}}</p>
                @else
                    <p>151/6, 2nd floor, Gazi Tower, Panthapath Dhaka-1205</p>
                @endif

                <h2 style="font-weight: bold;" class="mt-5 text-success">Phone number</h2>
                @if ($setting)
                    <p> {{$setting->phone}}</p>
                    <p> {{$setting->phone2}}</p>
                @else
                    <p> +8801934453979</p>
                    <p> +8801965501219</p>
                @endif

                <h2 style="font-weight: bold;" class="mt-5 text-success">During office visits</h2>
                <p>Saturday - Friday</p>
                <p>9am to 10pm</p>

                <h2 style="font-weight: bold;" class="mt-5 text-success">E-mail</h2>
                @if ($setting)
                 <p> {{$setting->email}}</p>
                @else
                    <p>info@kaizenitbd.com</p>
                @endif
            </div>
            @endforeach
        </div>

    <div class="container contact mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="mt-5 mb-5 text-success text-center" style="font-weight: bold;">You can Make Your Admission here</h1>
                <form   wire:submit.prevent="Admission">
                    @if (Session::has('message'))
                      <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <h3>Make Admission here</h3>
                    <input type="text" placeholder="Full Name" class="box"  wire:model="name">
                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    <input type="text" placeholder="Your E-mail" class="box" wire:model="email">
                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    <input type="text" placeholder="Your Phone Number" class="box" wire:model="phone">
                    @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                    <select class="box" wire:model="selected_course">
                        @foreach ($courses as $course)
                         <option value="{{$course->course_name}}">{{$course->course_name}}</option>    
                        @endforeach  
                        @error('selected_course') <span class="text-danger">{{$message}}</span> @enderror               
                    </select>
                    <textarea class="box" placeholder="message" wire:model="message" id="" cols="30" rows="10"></textarea>
                    @error('message') <span class="text-danger">{{$message}}</span> @enderror
                    <input type="submit" class="btn" value="Submit" >
                 </form>
            <div class="col-md-2"></div>
        </div>
    </div>
   </section>
</div>
