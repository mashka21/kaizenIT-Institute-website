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
                <div class="card-header bg-primary text-light"><strong>Add</strong><small> Partner</small></div>
                <div class="card-body card-block">
                    <form wire:submit.prevent="addComment">

                        <div class="form-group">
                            <label for="image" class=" form-control-label">Partner Image</label>
                            <p><small class="text-success">Please Upload Partner Logo </small></p>
                            <input type="file" id="image" class="form-control" wire:model="image">
                            <div wire:loading wire:target="image">Uploading...</div>
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" width="120">
                            @endif
                            @error('image')<span class="text-danger">{{$message}}</span> @enderror
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