<?php

namespace App\Models;

use App\App\Utils\Str;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';

    public function getDescripcionAttribute()
    {
        return strtoupper(Str::removerAcentos($this->attributes['descripcion']));
    }
}
