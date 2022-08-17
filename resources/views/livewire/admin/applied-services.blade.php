<div>
    <div class="col-sm-12 col-lg-12">
        <h3 class="mb-3 mt-5">All Applied Services</h3>
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
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <div class="content mt-3">
                    <table id="bootstrap-data-table-export" class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Service</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applied_Services as $applied_Service)
                            <tr>
                                <td>{{$applied_Service->name}}</td>
                                <td>{{$applied_Service->email}}</td>
                                <td>{{$applied_Service->phone}}</td>
                                <td>{{$applied_Service->selected_service}}</td>
                                <td><a href="#" onclick="confirm('Are you sure to Delete this applied_Service?') || event.stopImmediatePropagation()" wire:click.prevent="deleteApplied_Service({{$applied_Service->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a></td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{$applied_Services->links()}}
            </div>
        </div>
    </div>
</div>

