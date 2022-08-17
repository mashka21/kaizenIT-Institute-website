<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card">
                    <div class="card-header bg-success text-light">
                        <strong class="card-title">Manage Software Services</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-bordered">
                            <thead class="text-info">
                                <tr>
                                    <th scope="col">Service Name</th>
                                    <th scope="col">Service Category</th>
                                    <th scope="col">Service Price</th>
                                    <th scope="col">Service Reviews</th>
                                    <th scope="col">Service Image</th>
                                    <th class="text-danger" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($s_services as $s_service)
                                <tr>
                                    <th scope="row">{{$s_service->s_name}}</th>
                                    <td scope="row">{{$s_service->service_category}}</td>
                                    <td scope="row"> <span class="text-danger">&#2547;</span> {{$s_service->s_price}}</td>
                                    <td scope="row">{{$s_service->s_reviews}} Reviews</td>
                                    <td><img src="{{asset('assets/images/software_services')}}/{{$s_service->s_image}}" width="60" height="60" ></td>
                                    <td>
                                        <a href="{{route('admin.editSoftwareService',['service_id'=>$s_service->id])}}"><i class="fa fa-edit fa-2x text-success"></i></a>
                                        <a href="#" onclick="confirm('Are you sure to Delete this service?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSoftwareService({{$s_service->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{$s_services->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    


