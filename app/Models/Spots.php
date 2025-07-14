<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spots extends Model
{
    protected $fillable = [
        'name',
        'country',
        'month',
        'description',
        'image_url',
        'rating',
        'location',
        'highlights',
    ];
}
