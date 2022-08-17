<?php

namespace App\Http\Livewire\Admin;

use App\Models\PopularCourses;
use Livewire\Component;
use Livewire\WithPagination;
class AdminEditPopularCourses extends Component
{
    public function render()
    {
        $p_courses = PopularCourses::paginate(10);
        return view('livewire.admin.admin-edit-popular-courses',['p_courses'=>$p_courses])->layout('layouts.admin');
    }
}
