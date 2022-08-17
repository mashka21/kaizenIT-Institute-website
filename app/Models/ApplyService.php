<?php

namespace App\Models;

use App\Mail\ServiceMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApplyService extends Model
{
    use HasFactory;
    protected $table = "apply_services";
    public $fillable = ['name', 'email', 'phone', 'selected_service'];

    public static function boot() {

        parent::boot();

        static::created(function ($item) {

            $adminEmail = "mdnourabshir@gmail.com";
            Mail::to($adminEmail)->send(new ServiceMail($item));
        });
    }
}
