<?php

namespace App\Http\Livewire;

use App\Models\ApplyService;
use App\Models\SoftwareService;
use Livewire\Component;

class ApplyServices extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $selected_service;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
            'selected_service' =>'required'
        ]);
    }
    public function applyService(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
            'selected_service' =>'required'
        ]);
        $service = new ApplyService();
        $service->name = $this->name;
        $service->email = $this->email;
        $service->phone = $this->phone;
        $service->message = $this->message;
        $service->selected_service = $this->selected_service;
        $service->save();
        session()->flash('message','Thanks for your Ordering our service, We will reply you soon!');
    }
    public function render()
    {
        $s_services = SoftwareService::all();
        return view('livewire.apply-services',['s_services'=>$s_services])->layout('layouts.base');
    }
}
