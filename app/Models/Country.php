<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    public function scopeSearch($query, $term)
    {
        $term = '%' . $term . '%'; // Asegurarse de que la búsqueda sea parcial.
        return $query->where('name', 'like', $term);
    }

    public function cities(){
        return $this->hasMany(City::class);
    }
}
