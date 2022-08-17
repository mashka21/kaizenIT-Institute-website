<div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12 col-sm-6">
                    <div class="card">
                        <div class="card-header bg-success text-light">
                            <strong class="card-title pull-left">Manage News</strong>
                            <a class="bnt btn-success pull-right p-2 rounded" href="{{route('admin.add-news')}}">Add News</a>
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
                                        <th scope="col">News Title</th>
                                        <th scope="col">News Description</th>
                                        <th scope="col">News Type</th>
                                        <th scope="col">Starting Date</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Discount Price</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($news as $new)
                                    <tr>
                                        <td>{{$new->title}}</td>
                                        <td>{{$new->description}}</td>
                                        <td>{{$new->news_type == 1 ? 'Upcoming Seminar':'Upcoming Course'}}</td>
                                        <td>{{$new->starting_date}}</td>
                                        <td>{{$new->price}}</td>
                                        <td>{{$new->discount_price}}</td>
                                        <td>
                                            <img src="{{asset('assets/images/News')}}/{{$new->image}}" width="60" height="40" alt="">
                                        </td>
                                        <td>
                                            <a href="{{route('admin.edit-news',['news_id'=>$new->id])}}"><i class="fa fa-edit fa-2x text-success"></i></a>
                                            <a href="#" onclick="confirm('Are you sure to Delete this News?') || event.stopImmediatePropagation()" wire:click.prevent="deleteNews({{$new->id}})"><i class="fa fa-times fa-2x text-danger" style="margin-left: 10px;"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                            {{$news->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        
    
    
    
</div>
