<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table="jobs";
    protected $casts = [
        'status' => 'boolean',
    ];
    protected $fillable= [
        'company',
        'category',
        'position',
        'description',
        'salary_from', 
        'salary_to', 
        'status'];
}
