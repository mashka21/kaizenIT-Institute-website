
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card">
                    <div class="card-header bg-info text-light">
                        <div class="row">
                            <div class="col-md-6">
                                <strong class="card-title">All Team Members</strong>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addMember')}}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('message'))
                            <div class="col-sm-12">
                                <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                                    <span class="badge badge-pill badge-success">Success</span> {{Session::get('message')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif 
                        <table id="bootstrap-data-table-export" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" style="width: 500px;">Description</th>
                                    <th scope="col" >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($members as $member)
                                <tr>
                                    <th scope="row">{{$member->id}}</th>
                                    <td><img src="{{asset('assets/images/Team-Members')}}/{{$member->image}}" width="100"/></td>
                                    <td>{{$member->title}}</td>
                                    <td>{{$member->name}}</td>
                                    <td>{{$member->description}}</td>
                                    <td>
                                        <a href="{{route('admin.editMember',['id'=>$member->id])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                        <a href="#" onclick="confirm('Are you sure to Delete this Member?') || event.stopImmediatePropagation()" style="margin-left: 20px" wire:click.prevent="deleteMember({{$member->id}})"><i class="fa fa-times fa-2x text-danger"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
