<?php

namespace App\Http\Livewire;

use App\Models\PopularCourses;
use Livewire\Component;

class CourseDetailsComponent extends Component
{
    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $courses = PopularCourses::all();
        $this_course = PopularCourses::where('slug',$this->slug)->first();
        return view('livewire.course-details-component',['courses'=>$courses,'this_course'=>$this_course])->layout('layouts.base');
    }
}
