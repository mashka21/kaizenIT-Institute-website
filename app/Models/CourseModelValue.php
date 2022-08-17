<?php

namespace App\Models;
use App\Models\CourseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModelValue extends Model
{
    use HasFactory;
    
    public function CourseModel(){
        return $this->belongsTo(CourseModel::class,'course_model_id');
    }
}
