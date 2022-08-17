<?php

namespace App\Http\Livewire\Admin;

use App\Models\JoinSeminar;
use Livewire\Component;

class AdminWhoJoinedSeminar extends Component
{

    public function deleteMember($id){
        $member = JoinSeminar::find($id);
        $member->delete();
        session()->flash('message','Deleted Successfully');

    }
    public function render()
    {
        $members = JoinSeminar::all()->sortBy('email');
        return view('livewire.admin.admin-who-joined-seminar',['members'=>$members])->layout('layouts.admin');
    }
}
