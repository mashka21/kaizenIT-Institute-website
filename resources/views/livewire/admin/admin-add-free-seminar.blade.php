<div>
<div class="col-lg-6">
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
            <div class="card">
                <div class="card-header bg-primary text-light"><strong>Add</strong><small> Free Seminars</small></div>
                <div class="card-body card-block">
                    <form wire:submit.prevent="addFreeSeminar">
                        <div class="form-group">
                            <label for="seminar_name" class=" form-control-label">Seminar Name</label>
                            <input type="text" id="seminar_name" class="form-control" wire:model="seminar_name" placeholder="Add Seminar Name here">
                            @error('seminar_name')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="seminar_time" class=" form-control-label">Seminar Date</label>
                            <input type="datetime-local" id="seminar_time" class="form-control" wire:model="seminar_time">
                            @error('seminar_time')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="seminar_type" class=" form-control-label">Type Of Seminar</label>
                            <select class="form-control" wire:model="seminar_type">
                                  <option value="0">Online</option>
                                  <option value="1">Offline</option>
                            </select>
                            @error('seminar_type')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
        
                        <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                            <i class="fa fa-plus fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">ADD</span>
                        </button>
                    </form>    
                </div>
            </div>
        </div>
    </div>

</div>
</div>


