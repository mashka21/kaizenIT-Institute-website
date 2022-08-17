<?php

namespace App\Http\Livewire;

use App\Models\Admission;
use App\Models\PopularCourses;
use App\Models\Setting;
use Livewire\Component;

class AdmissionFormComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;
    public $selected_course;
    public $course_id;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
            'selected_course' =>'required'
        ]);
    }
    public function Admission(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'message'=>'required',
            'selected_course' =>'required'
        ]);
        $admission = new Admission();
        $admission->name = $this->name;
        $admission->email = $this->email;
        $admission->phone = $this->phone;
        $admission->message = $this->message;
        $admission->selected_course = $this->selected_course;
        $admission->save();
        session()->flash('message','Thanks for your Admission, We will contact you soon!');
    }
    public function render()
    {
        $settings = Setting::all();
        $courses = PopularCourses::all();
        return view('livewire.admission-form-component',['settings'=>$settings,'courses'=>$courses])->layout('layouts.base');
    }
}
