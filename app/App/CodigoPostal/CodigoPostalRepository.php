<?php

namespace App\App\CodigoPostal;

use App\Models\ZipCode;

class CodigoPostalRepository implements CodigoPostalRepositoryInterface
{

    public function buscarCodigo(CodigoTO $codigoTO)
    {
        return ZipCode::with(
            'codigosPostales.asentamientoTipo',
            'codigosPostales.municipio',
            'codigosPostales.estado',
            'codigosPostales.ciudad',
            'codigosPostales.zona'
        )->where('codigo', $codigoTO->getCodigo())
            ->firstOrFail();
    }
}
