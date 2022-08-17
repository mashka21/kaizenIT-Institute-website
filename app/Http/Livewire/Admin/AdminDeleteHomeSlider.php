<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminDeleteHomeSlider extends Component
{
    public function deleteSlide($id){
        $slider = HomeSlider::find($id);
        $slider->delete();
        session()->flash('message','Home Slider has been deleted successfully');
    }
    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-delete-home-slider',['sliders'=>$sliders])->layout('layouts.admin');
    }
}
