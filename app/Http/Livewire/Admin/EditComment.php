<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class EditComment extends Component
{
    use WithFileUploads;

    public $image;
    public $comment_id;
    public $newimage;

    public function mount($comment_id){
        $comment = Comment::find($comment_id);
        $this->image = $comment->image;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'image' => 'required'
        ]);
    }

    public function updateComment(){
        $this->validate([
            'image' => 'required'
        ]);

        $comment = Comment::find($this->comment_id);
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('comments',$imagename);
            $comment->image = $imagename;
        }
        
        $comment->save();
        session()->flash('message','comment has been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.edit-comment')->layout('layouts.admin');
    }
}
