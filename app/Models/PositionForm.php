<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PositionForm extends Model
{
    protected $table = "position_forms";
    protected $fillable = [
        'fullname', 'email', 'contact', 'address', 'attachment', 'category', 'position', 'status'
        ];
}
