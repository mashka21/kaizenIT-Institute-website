<?php

namespace App\Http\Livewire\Admin;

use App\Models\FreeSeminar;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddFreeSeminar extends Component
{
    use WithFileUploads;
    public $seminar_name;
    public $seminar_time;
    public $seminar_type;

    public function mount(){
        $this->seminar_type = 0;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'seminar_name' => 'required',
            'seminar_time' => 'required',
            'seminar_type' => 'required',

        ]);
    }

    public function addFreeSeminar(){
        $this->validate([
            'seminar_name' => 'required',
            'seminar_time' => 'required',
            'seminar_type' => 'required'
        ]);

        $freeseminar = new FreeSeminar();
        $freeseminar->seminar_name = $this->seminar_name;
        $freeseminar->seminar_time =$this->seminar_time;
        $freeseminar->seminar_type = $this->seminar_type;
        $freeseminar->save();
        session()->flash('message','Free Seminar has been added to the home page successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-free-seminar')->layout('layouts.admin');
    }
}
