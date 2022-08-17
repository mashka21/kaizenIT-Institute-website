<div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card">
                    <div class="card-header bg-success text-light">
                        <strong class="card-title">Manage Stories</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-bordered">
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
                            <thead>
                                <tr>
                                    <th scope="col">Story Video</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($s_storeis as $s_storey)
                                <tr>
                                    <td>
                                        <iframe src="{{asset('assets/images/SuccessStories')}}/{{$s_storey->video}}" width="300" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                                    </td>
                                    <td>
                                        <a href="{{route('admin.editsuccessstory',['story_id'=>$s_storey->id])}}"><i class="fa fa-edit fa-2x text-success"></i></a>
                                        <a href="#" onclick="confirm('Are you sure to Delete this Story from your website?') || event.stopImmediatePropagation()" wire:click.prevent="deleteSuccessStory({{$s_storey->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{$s_storeis->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  
</div>


