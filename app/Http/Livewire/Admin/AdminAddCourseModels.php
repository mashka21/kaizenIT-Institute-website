<?php

namespace App\Http\Livewire\Admin;

use App\Models\CourseModel;
use Livewire\Component;

class AdminAddCourseModels extends Component
{
    public $name;
    public function mount(){
        $module = CourseModel::find('1');
        if($module){
            $this->name = $module->name;
        }
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
        ]);
    }
    public function storeAttribute(){
        $this->validate([
            'name' => 'required',
        ]);
        
         if(CourseModel::where('name', '=', $this->name)){
            $course_module = new CourseModel();
            $course_module->name = $this->name;
            $course_module->save();
            session()->flash('message','Attribute has been added Successfully!');
         }
         elseif (CourseModel::where('name', '=', $this->name)) {
            session()->flash('message','Attribute already exists!');
         }
    }

    public function render()
    {
        return view('livewire.admin.admin-add-course-models')->layout('layouts.admin');
    }
}
