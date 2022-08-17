<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminEditHomeSlider extends Component
{
    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-edit-home-slider',['sliders'=>$sliders])->layout('layouts.admin');
    }
}
