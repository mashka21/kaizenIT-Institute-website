<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card">
                    <div class="card-header bg-success text-light">
                        <strong class="card-title">Mnage Free Seminars</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Seminar Title</th>
                                    <th scope="col">Seminar Date</th>
                                    <th scope="col">Seminar Type</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($freeseminars as $freeseminar)
                                <tr>
                                    <td>{{$freeseminar->seminar_name}}</td>
                                    <td>{{$freeseminar->seminar_time}}</td>
                                    <td>{{$freeseminar->seminar_type == 1 ? 'Offline':'Online'}}</td>
                                    <td>
                                        <a href="{{route('admin.editfreeseminar',['freeseminar_id'=>$freeseminar->id])}}"><i class="fa fa-edit fa-2x text-success"></i></a>
                                        <a href="#" onclick="confirm('Are you sure to Delete this seminar from home page?') || event.stopImmediatePropagation()" wire:click.prevent="deletefreeseminar({{$freeseminar->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a>
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
    
    


