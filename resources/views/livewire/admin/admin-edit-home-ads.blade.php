<div>
    <div class="col-lg-3"></div>

    <div class="col-lg-6">
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
                    <div class="card-header bg-primary text-light">
                        <div class="row">
                            <div class="col-md-6">
                                <strong class="pull-left">Edit Home Ads</strong>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.homeAds')}}" class="btn btn-success pull-right" >my Ads</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-block">
                        <form enctype="multipart/form-data" wire:submit.prevent="updateAds">
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Ads Status</label>
                                <input type="text" id="name" class="form-control" wire:model="status" placeholder="0 for Inactive">
                                @error('status')<span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="image" class=" form-control-label">Image</label>
                                <input type="file" class="input-file" wire:model="newImage"/>
                                @if($newImage)
                                    <img src="{{$newImage->temporaryUrl()}}" width="120" alt="">
                                @else
                                    <img src="{{asset('assets/images/homeAds')}}/{{$image}}" width="120" alt="">
                                @endif
                                @error('image')<span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                <i class="fa fa-plus fa-lg"></i>&nbsp;
                                <span>Update Ads</span>
                            </button>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>


