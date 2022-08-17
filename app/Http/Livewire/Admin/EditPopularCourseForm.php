<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\CourseModel;
use Livewire\WithFileUploads;
use App\Models\PopularCourses;
use Illuminate\Support\Carbon;
use App\Models\CourseModelValue;

class EditPopularCourseForm extends Component
{
    use WithFileUploads;
    public $course_category;
    public $course_name;
    public $t_n_reviews;
    public $t_n_students;
    public $n_modules;
    public $price;
    public $hours;
    public $w_classes;
    public $c_hours;
    public $image;
    public $p_course_id;
    public $newimage;

    // new 
    public $attr;
    public $inputs = [];
    public $attribute_arr = [];
    public $attribute_values = [];

    public function mount($p_course_id){
        $p_course = PopularCourses::find($p_course_id);
        $this->course_category = $p_course->course_category ;
        $this->course_name = $p_course->course_name;
        $this->t_n_reviews = $p_course->t_n_reviews ;
        $this->t_n_students = $p_course->t_n_students;
        $this->n_modules = $p_course->n_modules;
        $this->price = $p_course->price;
        $this->hours = $p_course->hours;
        $this->w_classes = $p_course->w_classes;
        $this->c_hours = $p_course->c_hours;
        $this->image = $p_course->image;
        $this->p_course_id = $p_course->id;
        // new 
        $this->inputs = $p_course->coursemodelvalues->where('course_id',$p_course->id)->unique('course_module_id')->pluck('course_module_id');
        $this->attribute_arr = $p_course->coursemodelvalues->where('course_id',$p_course->id)->unique('course_module_id')->pluck('course_module_id');
        
        foreach($this->attribute_arr as $a_arr){
            $allAttributeValue = CourseModelValue::where('course_id',$p_course->id)->where('course_module_id',$a_arr)->get()->pluck('value');
            $valueString ='';
            foreach($allAttributeValue as $value){
                $valueString = $valueString . $value . ",";
            }
            $this->attribute_values[$a_arr] = rtrim($valueString,",");
        }
    }
    // new 
   //add attribute-input
   public function add(){
    if(!$this->attribute_arr->contains($this->attr)){
        $this->inputs->push($this->attr);
        $this->attribute_arr->push($this->attr);
    }
}
// remove input-attribues
public function remove($attr){
    unset($this->inputs[$attr]);
}

    public function updated($fields){
        $this->validateOnly($fields,[
            'course_category' => 'required',
            'course_name' => 'required',
            't_n_reviews' => 'required',
            't_n_students' => 'required',
            'n_modules' => 'required',
            'price' => 'required',
            'hours' => 'required',
            'w_classes' => 'required',
            'c_hours' => 'required',
        ]);
    }

    public function updatePopularCourse(){
        $this->validate([
            'course_category' => 'required',
            'course_name' => 'required',
            't_n_reviews' => 'required',
            't_n_students' => 'required',
            'n_modules' => 'required',
            'price' => 'required',
            'hours' => 'required',
            'w_classes' => 'required',
            'c_hours' => 'required',
        ]);

        $p_course = PopularCourses::find($this->p_course_id);
        $p_course->course_category = $this->course_category;
        $p_course->course_name =$this->course_name;
        $p_course->t_n_reviews = $this->t_n_reviews;
        $p_course->t_n_students = $this->t_n_students;
        $p_course->n_modules = $this->n_modules;
        $p_course->price = $this->price;
        $p_course->hours = $this->hours;
        $p_course->w_classes = $this->w_classes;
        $p_course->c_hours = $this->c_hours;
        if($this->newimage){
            $imagename = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('popular_courses',$imagename);
            $p_course->image = $imagename;
        }
        $p_course->save();

        // new 
        CourseModelValue::where('course_id',$p_course->id)->delete();
        foreach($this->attribute_values as $key=>$attribute_value){
            $values = explode(",",$attribute_value);
            foreach($values as $value){
                $attr_value = new CourseModelValue();
                $attr_value->course_module_id = $key;
                $attr_value->value = $value;
                $attr_value->course_id = $p_course->id;
                $attr_value->save();
            }
        }
        session()->flash('message','Popular course have been updated successfully');
    }
    public function render()
    {
        $courses = CourseModel::all();
        return view('livewire.admin.edit-popular-course-form',['courses'=>$courses])->layout('layouts.admin');
    }
}
