<?php

namespace App\Http\Livewire\Admin;

use App\Models\SuccessStory;
use Livewire\Component;
class AdminManageSuccessStories extends Component
{
    public function deleteSuccessStory($id){
        $s_story = SuccessStory::find($id);
        $s_story->delete();
        session()->flash('message','a story has been deleted successfully');
    }
    public function render()
    {
        $s_storeis = SuccessStory::paginate(10);
        return view('livewire.admin.admin-manage-success-stories',['s_storeis'=>$s_storeis])->layout('layouts.admin');
    }
}
