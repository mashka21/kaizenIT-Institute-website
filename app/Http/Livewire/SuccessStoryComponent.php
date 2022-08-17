<?php

namespace App\Http\Livewire;

use App\Models\PopularCourses;
use App\Models\SuccessStory;
use Livewire\Component;

class SuccessStoryComponent extends Component
{
    public function render()
    {
        $s_stories = SuccessStory::all();
        $p_courses = PopularCourses::all();
        return view('livewire.success-story-component',['s_stories'=>$s_stories,'p_courses'=>$p_courses])->layout('layouts.base');
    }
}
