<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;
class AdminDeleteCommentsHomePage extends Component
{
    public function deleteComment($id){
        $comment = Comment::find($id);
        $comment->delete();
        session()->flash('message','One comment has been deleted successfully');
    }
    public function render()
    {
        $comments = Comment::paginate(10);
        return view('livewire.admin.admin-delete-comments-home-page',['comments'=>$comments])->layout('layouts.admin');
    }
}
