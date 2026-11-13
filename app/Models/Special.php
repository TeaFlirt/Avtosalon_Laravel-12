<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    protected $fillable = [
        'name', 'brand', 'year', 'engine', 'transmission', 'price', 'photo'
    ];
}
