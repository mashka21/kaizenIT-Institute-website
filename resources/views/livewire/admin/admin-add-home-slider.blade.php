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

    <div class="col-sm-12">
        <div class="alert  alert-danger alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-danger">Warning !!!!</span> To Add New Slider Please Delete or make Inactive if there is an excisting Slider
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>


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
                <div class="card-header bg-primary text-light"><strong>Add</strong><small> Home Slider</small></div>
                <div class="card-body card-block">
                    <form wire:submit.prevent="addSlide">
                        <div class="form-group">
                            <label for="short_title" class=" form-control-label">Title</label>
                            <input type="text" id="short_title" class="form-control" wire:model="short_title" placeholder="Short Title of the Slider">
                            @error('short_title')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="main_title" class=" form-control-label">Main Title</label>
                            <input type="text" id="main_title" class="form-control" wire:model="main_title" placeholder="Main Title of the Slider">
                            @error('main_title')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="description" class=" form-control-label">Description</label>
                            <textarea id="description" rows="10" cols="10" class="form-control" wire:model="description" placeholder="Description of the Slider"></textarea>
                            @error('description')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="video" class=" form-control-label">Video</label>
                            <p><small class="text-success">Please Upload Only <strong class="text-danger">Video</strong> </small></p>
                            <input type="file" id="video" class="form-control" wire:model="video">
                            <div wire:loading wire:target="video">Uploading...</div>
                            @if ($video)
                                <img src="{{ $video->temporaryUrl() }}" width="120">
                            @endif
                            @error('video')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="status" class=" form-control-label">Do you need this to be active or none active</label>
                            <select class="form-control" wire:model="status">
                                  <option value="0">Inactive</option>
                                  <option value="1">Active</option>
                            </select>
                            @error('status')<span class="text-danger">{{$message}}</span> @enderror
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
