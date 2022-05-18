<?php

namespace App\Models;

use App\App\Utils\Str;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';

    public function getDescripcionAttribute()
    {
        return strtoupper(Str::removerAcentos($this->attributes['descripcion']));
    }
}
