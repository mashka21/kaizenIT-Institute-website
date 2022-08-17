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
                        <strong class="card-title">Edit Popular Course on home page</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-bordered">
                            <thead class="text-danger">
                                <tr>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Course Category</th>
                                    <th scope="col">Course Price</th>
                                    <th scope="col">Course Modelus</th>
                                    <th scope="col">Course Hours</th>
                                    <th scope="col">Course Reviews</th>
                                    <th scope="col">Course Students</th>
                                    <th scope="col">Course Image</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($p_courses as $p_course)
                                <tr>
                                    <th scope="row">{{$p_course->course_name}}</th>
                                    <td scope="row">{{$p_course->course_category}}</td>
                                    <td scope="row"> <span class="text-danger">&#2547;</span> {{$p_course->price}}</td>
                                    <td scope="row">{{$p_course->n_modules}} Modules</td>
                                    <td scope="row">{{$p_course->hours}} Hours</td>
                                    <td scope="row">{{$p_course->t_n_reviews}} Reviews</td>
                                    <td scope="row">{{$p_course->t_n_students}} Students</td>
                                    <td><img src="{{asset('assets/images/popular_courses')}}/{{$p_course->image}}" width="60" height="60" ></td>
                                    <td>
                                        <a href="{{route('admin.editpopularcourse',['p_course_id'=>$p_course->id])}}"><i class="fa fa-edit fa-2x text-success"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{$p_courses->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    

