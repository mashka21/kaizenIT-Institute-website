<?php

namespace App\Http\Livewire;

use App\Models\FreeSeminar;
use App\Models\JoinSeminar;
use Livewire\Component;

class JoinFreeSeminar extends Component
{
    public $name;
    public $email;
    public $phone;
    public $address;
    public $selected_seminar;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'address'=>'required',
            'selected_seminar'=>'required'
        ]);
    }

    public function joinFreeSeminar(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'address'=>'required',
            'selected_seminar'=>'required'
        ]);
        $seminar = new JoinSeminar();
        $seminar->name = $this->name;
        $seminar->email = $this->email;
        $seminar->phone = $this->phone;
        $seminar->selected_seminar = $this->selected_seminar;
        $seminar->address = $this->address;
        $seminar->save();
        return redirect('join-free-seminar')->with('message', 'Thanks for your joining the seminar, We will contact you soon!');
    }


    public function render()
    {
        $seminars = FreeSeminar::all();
        return view('livewire.join-free-seminar',['seminars'=>$seminars])->layout('layouts.base');
    }
}
