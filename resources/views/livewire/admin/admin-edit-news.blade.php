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
                    <div class="card-header bg-success text-light"><strong>Edit</strong><small> News</small></div>
                    <div class="card-body card-block">
                        <form wire:submit.prevent="updateNews">
                            <div class="form-group">
                                <label for="title" class=" form-control-label">News Title</label>
                                <input type="text" id="title" class="form-control" wire:model="title" placeholder="News Title">
                                @error('title')<span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="description" class=" form-control-label">News Description</label>
                                <textarea id="description" class="form-control" wire:model="description" placeholder="News Descripyion"></textarea>
                                @error('description')<span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="price" class=" form-control-label">Price</label>
                                <input type="number" id="price" class="form-control" wire:model="price" placeholder="Price">
                                @error('price')<span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="discount_price" class=" form-control-label">Discount Price</label>
                                <input type="number" id="discount_price" class="form-control" wire:model="discount_price" placeholder="Discount Price">
                                @error('discount_price')<span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="starting_date" class=" form-control-label">Starting Date</label>
                                <input type="datetime-local" id="starting_date" class="form-control" wire:model="starting_date">
                                @error('starting_date')<span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="news_type" class=" form-control-label">Type Of News</label>
                                <select class="form-control" wire:model="news_type">
                                      <option value="0">Upcoming Course</option>
                                      <option value="1">Upcoming Seminar</option>
                                </select>
                                @error('news_type')<span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="image" class=" form-control-label">Image</label>
                                <input type="file" id="image" class="form-control" wire:model="newimage">
                                <div wire:loading wire:target="image">Uploading...</div>
                                @if ($newimage)
                                    <img src="{{ $newimage->temporaryUrl() }}"  width="120">
                                @else
                                    <img  src="{{asset('assets/images/News')}}/{{$image}}"  width="120" alt="">
                                @endif
                                @error('image')<span class="text-danger">{{$message}}</span> @enderror
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
</div>
    
    
    

