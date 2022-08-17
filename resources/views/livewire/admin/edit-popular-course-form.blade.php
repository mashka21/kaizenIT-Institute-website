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
                <div class="card-header bg-success text-light"><strong>Edit</strong><small> Popular Course To Home Page</small></div>
                <div class="card-body card-block">
                    <form wire:submit.prevent="updatePopularCourse">
                        <div class="form-group">
                            <label for="course_name" class=" form-control-label">Course Name</label>
                            <input type="text" id="course_name" class="form-control" wire:model="course_name">
                            @error('course_name')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="n_modules" class=" form-control-label">No. of Course Modules</label>
                            <input type="text" id="n_modules" class="form-control" wire:model="n_modules">
                            @error('n_modules')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="hours" class=" form-control-label">Total hours</label>
                            <input id="hours" rows="10" cols="10" class="form-control" wire:model="hours">
                            @error('hours')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="t_n_students" class=" form-control-label">No. of students</label>
                            <input id="t_n_students" rows="10" cols="10" class="form-control" wire:model="t_n_students">
                            @error('t_n_students')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="t_n_reviews" class=" form-control-label">Total No. of reviews</label>
                            <input id="t_n_reviews" rows="10" cols="10" class="form-control" wire:model="t_n_reviews">
                            @error('t_n_reviews')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="price" class=" form-control-label">Course Price</label>
                            <input id="price" rows="10" cols="10" class="form-control" wire:model="price">
                            @error('price')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="w_classes" class=" form-control-label">Weekly Classes</label>
                            <input id="w_classes" rows="10" cols="10" class="form-control" wire:model="w_classes">
                            @error('w_classes')<span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="c_hours" class=" form-control-label">Course Price</label>
                            <input id="c_hours" rows="10" cols="10" class="form-control" wire:model="c_hours">
                            @error('c_hours')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="course_category" class=" form-control-label">Course Category</label>
                            <select class="form-control" wire:model="course_category">
                                  <option value="designmultimedia">Design & multimedia</option>
                                  <option value="websoftware">web & software</option>
                                  <option value="degitalmarketing">Degital marketing</option>
                                  <option value="Networking">Networking</option>
                            </select>
                            @error('course_category')<span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="image" class=" form-control-label">image</label>
                            <input type="file" id="image" class="form-control" wire:model="newimage">
                            @if ($newimage)
                                    <img src="{{ $newimage->temporaryUrl() }}" width="120">
                                @else
                                <img src="{{asset('assets/images/popular_courses')}}/{{$image}}" width="120" >
                                @endif
                            @error('image')<span class="text-danger">{{$message}}</span> @enderror
                        </div>


                        <div class="form-group">
                            <label>Course Modules</label>
                            <div class="row">
                              <select name="" id="" class="form-control col-md-8 ml-3" wire:model="attr">
                                  <option value="0">Select Modules</option>
                                  @foreach ($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                  @endforeach
                              </select>
                            <div class="col-md-2 mt-2">
                                <button type="button" class="btn btn-info btn-sm" wire:click.prevent="add">Add</button>
                            </div>
                        </div>
                          </div>

                          @foreach ($inputs as $key => $value)
                            <div class="form-group">
                                <label>{{$courses->where('id',$attribute_arr[$key])->first()->name}}</label>
                                <div class="row">
                                <input type="text" class="form-control input-md col-md-8 ml-3" placeholder="{{$courses->where('id',$attribute_arr[$key])->first()->name}}" wire:model="attribute_values.{{$value}}">
                                <div class="col-md-2 mt-2">
                                    <button type="button" class="btn btn-danger btn-sm" wire:click.prevent="remove({{$key}})">Remove</button>
                                </div>
                            </div>
                            </div>
                          @endforeach
        
                        <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                            <i class="fa fa-edit fa-lg"></i>&nbsp;
                            <span id="payment-button-amount">Edit</span>
                        </button>
                    </form>    
                </div>
            </div>
        </div>
    </div>

</div>



