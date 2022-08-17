<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class="card p-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="card-title">Add New Module</p>
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form wire:submit.prevent="storeAttribute" class="form-horizontal">
                            <div class="form-group">
                                <label>Module</label>
                                <input type="text" class="form-control input-md" placeholder="Add Module" wire:model="name">
                                @error('name')<span class="text-danger">{{$message}}</span> @enderror <br>
                            </div>

                            <div class="form-group">
                                <label></label>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>


