<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\Partner;
use App\Models\Setting;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $comment;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'comment'=>'required'
        ]);
    }
    public function ContactUs(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'comment'=>'required'
        ]);
        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->comment = $this->comment;
        $contact->save();
        session()->flash('message','Thanks for your contact, Your Message has been sent successfully!');
    }
    public function render()
    {
        $settings = Setting::find(1);
        $partners = Partner::all();
        return view('livewire.contact-component',['settings'=>$settings,'partners'=>$partners])->layout('layouts.base');
    }
}
