<?php

namespace App\Models;

use App\Mail\AdmissionMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admission extends Model
{
    use HasFactory;
    protected $table = "admissions";
    public $fillable = ['name', 'email', 'phone', 'selected_course'];

    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "mdnourabshir@gmail.com";
            Mail::to($adminEmail)->send(new AdmissionMail($item));
        });
    }

}
