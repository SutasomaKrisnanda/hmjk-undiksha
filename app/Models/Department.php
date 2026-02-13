<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'color_theme',
        'logo',
        'description',
        'order_level',
    ];

}
