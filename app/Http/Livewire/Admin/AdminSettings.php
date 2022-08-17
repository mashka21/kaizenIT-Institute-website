<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Livewire\Component;

class AdminSettings extends Component
{

    public $email;
    public $phone;
    public $phone2;
    public $address;
    public $map;
    public $twitter;
    public $facebook;
    public $instgram;
    public $linkedin;

    public function mount(){
        $setting = Setting::find(1);
        if($setting){
            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->phone2 = $setting->phone2;
            $this->address = $setting->address;
            $this->map = $setting->map;
            $this->twitter = $setting->twitter;
            $this->facebook = $setting->facebokk;
            $this->instgram = $setting->instgram;
            $this->linkedin = $setting->linkedin;
        }
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'email' => 'required|email',
            'phone' => 'required',
            'phone2' => 'required',
            'address' => 'required',
            'map' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'instgram' => 'required',
            'linkedin' => 'required'
        ]);

    }

    public function saveSettings(){
        $this->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'phone2' => 'required',
            'address' => 'required',
            'map' => 'required',
            'twitter' => 'required',
            'facebook' => 'required',
            'instgram' => 'required',
            'linkedin' => 'required'
        ]);
        $setting = Setting::find(1);
        if(!$setting){
            $setting = new Setting();
        }
        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->phone2 = $this->phone2;
        $setting->address = $this->address;
        $setting->map = $this->map;
        $setting->twitter = $this->twitter;
        $setting->facebokk = $this->facebook;
        $setting->instgram = $this->instgram;
        $setting->linkedin = $this->linkedin;
        $setting->save();
        session()->flash('message','Setting has been saved successfully!');

    }

    public function render()
    {
        return view('livewire.admin.admin-settings')->layout('layouts.admin');
    }
}
