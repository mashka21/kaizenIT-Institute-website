<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12 col-sm-6">
                <div class="card">
                    <div class="card-header bg-success text-light">
                        <strong class="card-title">Edit Comments</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Comment Image</th>
                                    <th scope="col">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comments as $comment)
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/comments')}}/{{$comment->image}}" width="300" height="200" alt="">
                                    </td>
                                    <td>
                                        <a href="{{route('admin.editcomment',['comment_id'=>$comment->id])}}"><i class="fa fa-edit fa-2x text-success"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{$comments->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    

