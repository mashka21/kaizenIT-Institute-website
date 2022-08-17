<div>
    <div class="col-sm-12 col-lg-12">
        <h3 class="mb-3">All Admissions</h3>
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
                                <th scope="col">Course</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admissions as $admission)
                            <tr>
                                <td>{{$admission->name}}</td>
                                <td>{{$admission->email}}</td>
                                <td>{{$admission->phone}}</td>
                                <td>{{$admission->selected_course}}</td>
                                <td><a href="#" onclick="confirm('Are you sure to Delete this Admission?') || event.stopImmediatePropagation()" wire:click.prevent="deleteAdmission({{$admission->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a></td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{$admissions->links()}}
            </div>
        </div>
    </div>
</div>
