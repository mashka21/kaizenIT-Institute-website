<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card">
                    <div class="card-header bg-success text-light">
                        <strong class="card-title">Edit partners</strong>
                    </div>
                    <div class="card-body">
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
                        <table id="bootstrap-data-table-export" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">partner Image</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($partners as $partner)
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/Partner')}}/{{$partner->image}}" width="300" height="200" alt="">
                                    </td>
                                    <td>
                                        <a href="{{route('admin.editPartner',['partner_id'=>$partner->id])}}"><i class="fa fa-edit fa-2x text-success"></i></a>
                                        <a href="#" onclick="confirm('Are you sure to Delete this Partner?') || event.stopImmediatePropagation()" wire:click.prevent="deletePartner({{$partner->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{$partners->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    


