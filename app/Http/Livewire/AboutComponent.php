<?php

namespace App\Http\Livewire;

use App\Models\Partner;
use App\Models\Setting;
use Livewire\Component;


class AboutComponent extends Component
{
    public function render()
    {
        $settings = Setting::find(1);
        $partners = Partner::all();
        return view('livewire.about-component',['settings'=>$settings,'partners'=>$partners])->layout('layouts.base');
    }
}
