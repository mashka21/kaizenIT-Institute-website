<?php

namespace App\Http\Livewire\Admin;

use App\Models\TeamMember;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddTeamMember extends Component
{
    use WithFileUploads;
    public $name;
    public $title;
    public $description;
    public $image;
    



    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
    }

    public function addMember(){
        $this->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $newMember = new TeamMember();
        $newMember->name = $this->name;
        $newMember->title = $this->title;
        $newMember->description = $this->description;
        
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('Team-Members',$imageName);
        $newMember->image = $imageName;

        $newMember->save();
        session()->flash('message','successfully added A New Member');

    }
    public function render()
    {
        return view('livewire.admin.admin-add-team-member')->layout('layouts.admin');
    }
}
