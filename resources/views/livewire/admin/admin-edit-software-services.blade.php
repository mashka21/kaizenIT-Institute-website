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
                <div class="card-header bg-success text-light"><strong>Edit</strong><small> Service to Sofware Services page </small></div>
                <div class="card-body card-block">
                    <form wire:submit.prevent="updateSoftwareService">
                        <div class="form-group">
                            <label for="s_name" class=" form-control-label">Service Name</label>
                            <input type="text" id="s_name" class="form-control" wire:model="s_name" placeholder="Service Name">
                            @error('s_name')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="s_reviews" class=" form-control-label">Total No. of reviews</label>
                            <input id="s_reviews" rows="10" cols="10" class="form-control" wire:model="s_reviews" placeholder="Total number of reviews">
                            @error('s_reviews')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="s_discount_price" class=" form-control-label">Sale Price</label>
                            <input id="s_discount_price" rows="10" cols="10" class="form-control" wire:model="s_discount_price" placeholder="Service Sale Price">
                            @error('s_discount_price')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="s_price" class=" form-control-label">Regular Price</label>
                            <input id="s_price" rows="10" cols="10" class="form-control" wire:model="s_price" placeholder="Service Regular Price">
                            @error('s_price')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="service_category" class=" form-control-label">Service Category</label>
                            <select class="form-control" wire:model="service_category">
                                  <option value="designmultimedia">Design & multimedia</option>
                                  <option value="websoftware">web & software</option>
                                  <option value="degitalmarketing">Degital marketing</option>
                                  <option value="Networking">Networking</option>
                            </select>
                            @error('service_category')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="s_image" class=" form-control-label">Service image</label>
                            <input type="file" id="s_image" class="form-control" wire:model="s_newimage">
                            <div wire:loading wire:target="s_image">Uploading...</div>
                            @if ($s_newimage)
                                <img src="{{ $s_newimage->temporaryUrl() }}" width="120">
                                @else
                                <img src="{{asset('assets/images/software_services')}}/{{$s_image}}" width="120" >
                                @endif
                            @error('s_image')<span class="text-danger">{{$message}}</span> @enderror
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




