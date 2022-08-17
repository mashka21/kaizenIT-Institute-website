<?php

namespace App\Http\Livewire;

use App\Models\TeamMember;
use Livewire\Component;

class OurTeamComponent extends Component
{
    public function render()
    {
        $members = TeamMember::all();
        return view('livewire.our-team-component',['members'=>$members])->layout('layouts.base');
    }
}
