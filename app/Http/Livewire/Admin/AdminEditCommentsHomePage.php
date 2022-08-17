<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;
use Livewire\WithPagination;
class AdminEditCommentsHomePage extends Component
{
    public function render()
    {
        $comments = Comment::paginate(10);
        return view('livewire.admin.admin-edit-comments-home-page',['comments'=>$comments])->layout('layouts.admin');
    }
}
