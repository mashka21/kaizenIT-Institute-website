<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class EditHomeSliderForm extends Component
{
    use WithFileUploads;
    
    public $short_title;
    public $main_title;
    public $description;
    public $status;
    public $video;
    public $newvideo;
    public $slide_id;

    public function mount($slide_id){
        $slider = HomeSlider::find($slide_id);
        $this->short_title = $slider->short_title;
        $this->main_title = $slider->main_title;
        $this->description = $slider->description;
        $this->status = $slider->status;
        $this->video = $slider->video;
        $this->slide_id = $slider->id;
    }

    public function updateSlide(){
        $slider = HomeSlider::find($this->slide_id);
        $slider->short_title = $this->short_title;
        $slider->main_title = $this->main_title;
        $slider->description = $this->description;
        $slider->status = $this->status;
        if($this->newvideo){
            $videoname = Carbon::now()->timestamp.'.'. $this->newvideo->extension();
            $this->newvideo->storeAs('sliders',$videoname);
            $slider->video = $videoname;
        }
       $slider->save();
       session()->flash('message', 'Slide has been updated successfully');
    }
    public function render()
    {
        return view('livewire.admin.edit-home-slider-form')->layout('layouts.admin');
    }
}
