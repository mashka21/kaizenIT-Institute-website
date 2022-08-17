{{-- <div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default bg-info p-3 rounded">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Member
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.teamMembers')}}" class="btn btn-success pull-right">All Members</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addMember">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Full Name</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="Enter member name" class="form-control input-md" wire:model="name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Title job</label>
                                <div class="col-md-5">
                                    <input type="text" placeholder="Enter title job" class="form-control input-md" wire:model="title"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-5">
                                   <textarea class="form-control" placeholder="description" wire:model="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Profile Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="image" />
                                </div>
                            </div>

                            <div class="form-group mt-4">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary font-weight-bold">Add To Members</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

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
                                <strong class="pull-left">Add New Member</strong>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.teamMembers')}}" class="btn btn-success pull-right" >all Members</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body card-block">
                        <form enctype="multipart/form-data" wire:submit.prevent="addMember">
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Full Name</label>
                                <input type="text" id="name" class="form-control" wire:model="name" placeholder="name">
                                @error('name')<span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="title" class=" form-control-label">Title Job</label>
                                <input type="text" id="title" class="form-control" wire:model="title" placeholder="Main Title">
                                @error('title')<span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="description" class=" form-control-label">Description</label>
                                <textarea id="description"  class="form-control" wire:model="description" placeholder="Description of the Slider"></textarea>
                                @error('description')<span class="text-danger">{{$message}}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label for="image" class=" form-control-label">Image</label>
                                <input type="file" class="input-file" wire:model="image"/>
                                @if($image)
                                    <img src="{{$image->temporaryUrl()}}" width="120" alt="">
                                @endif
                                @error('image')<span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-lg btn-primary btn-block">
                                <i class="fa fa-plus fa-lg"></i>&nbsp;
                                <span>Add To Members</span>
                            </button>
                        </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>
