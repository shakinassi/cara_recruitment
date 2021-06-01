<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainForm extends Model
{
    protected $table = "main_forms";
    protected $fillable = [
        'fullname', 'email', 'contact', 'address', 'attachment', 'status'
        ];
}
