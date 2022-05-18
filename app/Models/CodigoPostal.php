<?php

namespace App\Models;

use App\App\Utils\Str;
use Illuminate\Database\Eloquent\Model;

class CodigoPostal extends Model
{
    protected $table = 'codigos_postales';

    public function getDAsentaAttribute()
    {
        return strtoupper(Str::removerAcentos($this->attributes['d_asenta']));
    }

    public function asentamientoTipo()
    {
        return $this->belongsTo(AsentamientoTipo::class, 'asentamiento_tipo_id');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'municipio_id');
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'ciudad_id');
    }

    public function zona()
    {
        return $this->belongsTo(Zona::class, 'zona_id');
    }
}
