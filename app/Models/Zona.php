<?php

namespace App\Models;

use App\App\Utils\Str;
use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $table = 'zonas';

    public function getDescripcionAttribute()
    {
        return strtoupper(Str::removerAcentos($this->attributes['descripcion']));
    }
}
