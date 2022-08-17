<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\FreeSeminar;

class AdminEditFreeSeminars extends Component
{
    public $seminar_name;
    public $seminar_time;
    public $seminar_type;
    public $freeseminar_id;

    public function mount($freeseminar_id){
        $seminar = FreeSeminar::find($freeseminar_id);
        $this->seminar_name  = $seminar->seminar_name;
        $this->seminar_time  = $seminar->seminar_time;
        $this->seminar_type  = $seminar->seminar_type;
        $this->freeseminar_id  = $seminar->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'seminar_name' => 'required',
            'seminar_time' => 'required',
            'seminar_type' => 'required',

        ]);
    }

    public function updateFreeSeminar(){
        $this->validate([
            'seminar_name' => 'required',
            'seminar_time' => 'required',
            'seminar_type' => 'required'
        ]);

        $freeseminar = FreeSeminar::find($this->freeseminar_id);
        $freeseminar->seminar_name = $this->seminar_name;
        $freeseminar->seminar_time =$this->seminar_time;
        $freeseminar->seminar_type = $this->seminar_type;
        $freeseminar->save();
        session()->flash('message','Free Seminar has been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-free-seminars')->layout('layouts.admin');
    }
}
