<div class="col-lg-6">
    @if (Session::has('message'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span> {{Session::get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    @endif 
    
    <style>
        .content{
            margin-left: 270px !important;
        }
        @media (max-width: 450px) {
            .content{
                margin-left: 0 !important;
            }
        }
        @media (max-width: 768px) {
            .content{
                margin-left: 0 !important;
            }
        }
    </style>
<div class="content mt-3">
  <div class="animated fadeIn">
            <div class="card">
                <div class="card-header bg-success text-light"><strong>Edit</strong><small> User</small></div>
                <div class="card-body card-block">
                    <form wire:submit.prevent="updateUser">
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Full Name</label>
                            <input type="text" id="name" class="form-control" wire:model="name">
                            @error('name')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class=" form-control-label">Email</label>
                            <input type="text" id="email" class="form-control" wire:model="email">
                            @error('email')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone" class=" form-control-label">Phone Number</label>
                            <input type="text" id="phone" class="form-control" wire:model="phone">
                            @error('phone')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="role" class=" form-control-label">UserType</label>
                            <p><small class="text-success"><strong class="text-danger">ADM</strong> means user is Admin and <strong class="text-danger">USR</strong> means user is Normal User</small></p>
                            <input type="text" id="role" class="form-control" wire:model="role">
                            @error('role')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
        
                        <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                            <i class="fa fa-edit fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Update</span>
                        </button>
                    </form>    
                </div>
            </div>
        </div>
    </div>

</div>

