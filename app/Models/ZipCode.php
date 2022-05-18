<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    protected $table = 'codigos';

    public function codigosPostales()
    {
        return $this->hasMany(CodigoPostal::class, 'codigo_id');
    }
}
