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
                <div class="card-header bg-success text-light"><strong>Edit</strong><small> Success Story</small></div>
                <div class="card-body card-block">
                    <form wire:submit.prevent="updateSuccessStory">

                        <div class="form-group">
                            <label for="video" class=" form-control-label">Success Story Video</label>
                            <input type="file" id="video" class="form-control mb-3" wire:model="newvideo">
                            <div wire:loading wire:target="newvideo">Uploading...</div>
                            @if ($newvideo)
                                    <iframe src="{{ $newvideo->temporaryUrl() }}" width="300" height="200"></iframe>
                                @else
                                 <iframe  src="{{asset('assets/images/SuccessStories')}}/{{$video}}" width="300" height="200"></iframe>
                                @endif
                            @error('newvideo')<span class="text-danger">{{$message}}</span> @enderror
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




