<?php

namespace App\Http\Livewire\Admin;

use App\Models\TeamMember;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTeamMembers extends Component
{
    use WithPagination;

    public function deleteMember($id){
        $member = TeamMember::find($id);
        $member->delete();
        session()->flash('message','Deleted Successfully');

    }
    public function render()
    {
        $members = TeamMember::paginate(10);
        return view('livewire.admin.admin-team-members',['members'=>$members])->layout('layouts.admin');
    }
}
