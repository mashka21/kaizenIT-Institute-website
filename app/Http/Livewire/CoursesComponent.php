<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PopularCourses;

class CoursesComponent extends Component
{
    public function render()
    {
          // display popular courses to courses page 
          $p_courses = PopularCourses::all();
        return view('livewire.courses-component',['p_courses'=>$p_courses])->layout('layouts.base');
    }
}
