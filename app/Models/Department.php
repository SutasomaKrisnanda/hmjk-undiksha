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
        'banner',
        'description',
        'order_level',
    ];

}
