<?php

namespace App\Http\Livewire\Admin;

use App\Models\TeamMember;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEditTeamMember extends Component
{
    use WithFileUploads;
    public $name;
    public $title;
    public $description;
    public $image;
    public $newImage;
    public $member_id;

    public function mount($id){
        $member = TeamMember::where('id',$id)->first();
        $this->name = $member->name;
        $this->title = $member->title;
        $this->description = $member->description;
        $this->image = $member->image;
        $this->member_id = $member->id;
    }

    public function updateMember(){
        $member = TeamMember::find($this->member_id);
        $member->name = $this->name;
        $member->title = $this->title;
        $member->description = $this->description;
        if($this->newImage)
        {
            $imageName = Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->newImage->storeAs('Team-Members',$imageName);
            $member->image = $imageName;
        }
        

        $member->save();
        session()->flash('message','successfully Updated');

    }

    public function render()
    {
        return view('livewire.admin.admin-edit-team-member')->layout('layouts.admin');
    }
}
