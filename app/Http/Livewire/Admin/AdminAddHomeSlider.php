<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AdminAddHomeSlider extends Component
{
    use WithFileUploads;
    public $short_title;
    public $main_title;
    public $description;
    public $status;
    public $video;

    public function mount(){
        $this->status = 0;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'short_title' => 'required',
            'main_title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'video' => 'required'
        ]);
    }

    public function addSlide(){
        $this->validate([
            'short_title' => 'required',
            'main_title' => 'required',
            'description' => 'required',
            'status' => 'required',
            'video' => 'required'
        ]);

        $slider = new HomeSlider();
        $slider->short_title = $this->short_title;
        $slider->main_title =$this->main_title;
        $slider->description = $this->description;
        $slider->status = $this->status;
        $videoname = Carbon::now()->timestamp.'.'. $this->video->extension();
        $this->video->storeAs('sliders',$videoname);
        $slider->video = $videoname;
        $slider->save();
        session()->flash('message','Slide has been created successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-home-slider')->layout('layouts.admin');
    }
}
