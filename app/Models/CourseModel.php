<?php

namespace App\Models;

use App\Models\CourseModelValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseModel extends Model
{
    use HasFactory;

   public function coursemodelvalues(){
    return $this->hasMany(CourseModelValue::class);
   }

}
