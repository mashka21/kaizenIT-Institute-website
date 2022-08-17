<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddCommentsHomePage extends Component
{
    use WithFileUploads;

    public $image;

    public function updated($fields){
        $this->validateOnly($fields,[
            'image' => 'required'
        ]);
    }

    public function addComment(){
        $this->validate([
            'image' => 'required'
        ]);

        $comment = new Comment();
        $imagename = Carbon::now()->timestamp.'.'. $this->image->extension();
        $this->image->storeAs('comments',$imagename);
        $comment->image = $imagename;
        $comment->save();
        session()->flash('message','one comment has been added to the homepage successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-comments-home-page')->layout('layouts.admin');
    }
}
