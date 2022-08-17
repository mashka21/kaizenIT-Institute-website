<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>

    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">

    {{-- success message alert 
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div> --}}


<div class="col-sm-12 col-lg-12">
    <h3 class="mb-3">Latest Admissions</h3>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ladmissions as $ladmission)
                        <tr>
                            <td>{{$ladmission->name}}</td>
                            <td>{{$ladmission->email}}</td>
                            <td>{{$ladmission->phone}}</td>
                            <td>{{$ladmission->selected_course}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                {{$ladmissions->links()}}
        </div>
    </div>
</div>
<!--/.col-->

<div class="col-sm-12 col-lg-12">
    <h3 class="mb-3 mt-5">All Latest Applied Services</h3>
    <div class="card text-white bg-flat-color-5">
        <div class="card-body pb-0">
            <div class="content mt-3">
                <table id="bootstrap-data-table-export" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Service</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applied_Services as $applied_Service)
                        <tr>
                            <td>{{$applied_Service->name}}</td>
                            <td>{{$applied_Service->email}}</td>
                            <td>{{$applied_Service->phone}}</td>
                            <td>{{$applied_Service->selected_service}}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                {{$applied_Services->links()}}
        </div>
    </div>
</div>

<div class="col-sm-12 col-lg-12">
    <h3 class="mb-3">Latest Contacts</h3>
    <div class="card text-white bg-flat-color-4">
        <div class="card-body pb-0">
            <table id="bootstrap-data-table-export" class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Course</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lcontacts as $lcontact)
                    <tr>
                        <td>{{$lcontact->name}}</td>
                        <td>{{$lcontact->email}}</td>
                        <td>{{$lcontact->phone}}</td>
                        <td>{{$lcontact->comment}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            {{$lcontacts->links()}}
        </div>
    </div>
</div>
<!--/.col-->



</div>