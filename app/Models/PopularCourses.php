<?php

namespace App\Models;

use App\Models\CourseModelValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PopularCourses extends Model
{
    protected $table ="popular_courses";
    use HasFactory;

    protected $fillable = [
        'module',
    ];

    public function coursemodelvalues(){
        return $this->hasMany(CourseModelValue::class,'course_id');
    }
}
