<?php

namespace App\Http\Livewire\Admin;

use App\Models\News;
use Livewire\Component;

class AdminManageNews extends Component
{
    public function deleteNews($id){
        $news = News::find($id);
        $news->delete();
        session()->flash('message','You have been deleted One News successfully!');
    }
    public function render()
    {
        $news = News::paginate(5);
        return view('livewire.admin.admin-manage-news',['news'=>$news])->layout('layouts.admin');
    }
}
