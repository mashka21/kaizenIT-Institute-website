<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card">
                    <div class="card-header bg-success text-light">
                        <strong class="card-title">Edit Home Slider</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Short Title</th>
                                    <th scope="col">Main Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Video</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sliders as $slider)
                                <tr>
                                    <th scope="row">{{$slider->id}}</th>
                                    <td>{{$slider->short_title}}</td>
                                    <td>{{$slider->main_title}}</td>
                                    <td>{{$slider->description}}</td>
                                    <td><iframe src="{{asset('assets/images/sliders')}}/{{$slider->video}}" width="60" height="60" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe></td>
                                    <td>{{$slider->status == 1 ? 'Active':'Inactive'}}</td>
                                    <td>
                                        <a href="{{route('admin.edithomesliderForm',['slide_id'=>$slider->id])}}"><i class="fa fa-edit fa-2x text-success"></i></a>
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
    
    

