<div>
    <div class="container contact mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="mt-5 mb-5 text-success text-center" style="font-weight: bold;">Join Free Seminar</h1>
                <form   wire:submit.prevent="joinFreeSeminar">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <h3>To Join Free Seminar fill up this form</h3>
                    <input type="text" placeholder="Full Name" class="box"  wire:model="name">
                    @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    <input type="text" placeholder="Your E-mail" class="box" wire:model="email">
                    @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    <input type="text" placeholder="Your Phone Number" class="box" wire:model="phone">
                    @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                    <select class="box" wire:model="selected_seminar">
                        @foreach ($seminars as $seminar)
                         <option value="{{$seminar->seminar_name}}">{{$seminar->seminar_name}}</option>    
                        @endforeach  
                        @error('selected_seminar') <span class="text-danger">{{$message}}</span> @enderror               
                    </select>
                    <textarea class="box" placeholder="Address" wire:model="address" id="" cols="20" rows="10"></textarea>
                    @error('address') <span class="text-danger">{{$message}}</span> @enderror
                    <input type="submit" class="btn" value="Submit" >
                </form>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>