<?php

namespace App\Http\Livewire\Admin;

use App\Models\FreeSeminar;
use Livewire\Component;

class AdminMangeFreeSeminars extends Component
{
    public function deletefreeseminar($id){
        $freeseminar = FreeSeminar::find($id);
        $freeseminar->delete();
        session()->flash('message','free Semianr has been deleted fom home page successfully');
    }
    public function render()
    {
        $freeseminars = FreeSeminar::all();
        return view('livewire.admin.admin-mange-free-seminars',['freeseminars'=>$freeseminars])->layout('layouts.admin');
    }
}
