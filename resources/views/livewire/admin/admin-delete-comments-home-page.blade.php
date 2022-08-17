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
                    <div class="card-header bg-danger text-light">
                        <strong class="card-title">Delete Comments</strong>
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
                                    <th scope="col">Comment Image</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comments as $comment)
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/comments')}}/{{$comment->image}}" width="300" height="200" alt="">
                                    </td>
                                    <td>
                                        <a href="#" onclick="confirm('Are you sure to Delete this Comment from Home Page?') || event.stopImmediatePropagation()" wire:click.prevent="deleteComment({{$comment->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a>
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
    
    


