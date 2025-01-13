<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $casts = [
        'is_available' => 'boolean',
    ];

    protected $guarded = ['id'];
}
