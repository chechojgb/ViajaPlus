<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class providers extends Model
{
 
    protected $fillable = [
        'name',
        'address',
        'contact',
        'preferences',
        'provider_type',
        'email'
    ];

    protected $table = 'providers';
}
