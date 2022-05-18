<?php

namespace App\Models;

use App\App\Utils\Str;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';

    public function getDescripcionAttribute()
    {
        return strtoupper(Str::removerAcentos($this->attributes['descripcion']));
    }
}
