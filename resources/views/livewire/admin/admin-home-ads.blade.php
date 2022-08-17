<style>
    nav svg {
        height: 20px;
    }
    svg {
        overflow: hidden;
        vertical-align: middle;
    }
</style>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card">
                    <div class="card-header bg-success text-light">
                        <strong class="card-title">Home page Ads</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($homeAds as $ads)
                                <tr>
                                    <td>{{$ads->id}}</td>
                                    <td><img src="{{asset('assets/images/homeAds')}}/{{$ads->image}}" width="60" height="60" ></td>
                                    <td>{{$ads->status}}</td>
                                    <td>
                                        <a href="{{route('admin.edit-ads',['id'=>$ads->id])}}"><i class="fa fa-edit fa-2x text-success"></i></a>
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
    
    




