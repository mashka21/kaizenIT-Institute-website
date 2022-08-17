<div>
    <div class="container contact mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="mt-5 mb-5 text-success text-center" style="font-weight: bold;">Apply Our Services here</h1>
                <form   wire:submit.prevent="applyService" class="mb-5">
                    @if (Session::has('message'))
                      <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <h3>You Can Apply any service you need here</h3>
                    <input type="text" placeholder="Full Name" class="box"  wire:model="name">
                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    <input type="text" placeholder="Your E-mail" class="box" wire:model="email">
                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    <input type="text" placeholder="Your Phone Number" class="box" wire:model="phone">
                    @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                    <select class="box" wire:model="selected_service">
                        <option value="">Select service</option>
                        @foreach ($s_services as $s_service)
                         <option value="{{$s_service->s_name}}">{{$s_service->s_name}}</option>    
                        @endforeach  
                        @error('selected_service') <span class="text-danger">{{$message}}</span> @enderror               
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

