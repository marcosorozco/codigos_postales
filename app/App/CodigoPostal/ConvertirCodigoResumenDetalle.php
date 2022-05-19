<?php

namespace App\App\CodigoPostal;

use App\Models\ZipCode;

class ConvertirCodigoResumenDetalle
{
    public static function extraer(ZipCode $zipCode)
    {
        $codigoPostal = $zipCode->codigosPostales->first();
        $estado = $codigoPostal->estado;
        $ciudad = $codigoPostal->ciudad;
        $municipio = $codigoPostal->municipio;

        return [
            'zip_code'=>$zipCode->codigo,
            'locality' => $ciudad->descripcion ?? '',
            'federal_entity' => [
                'key' => (int)$codigoPostal->c_estado,
                'name' => $estado->descripcion,
                'code' => $codigoPostal->c_CP ? $codigoPostal->c_CP : null
            ],
            'settlements' => $zipCode->codigosPostales->map(function ($codigoPostal) {
                $asentamientoTipo = $codigoPostal->asentamientoTipo;
                $zona = $codigoPostal->zona;
                return [
                    "key"=> (int)$codigoPostal->id_asenta_cpcons,
                    "name" => $codigoPostal->d_asenta,
                    "zone_type"=> $zona->descripcion,
                    "settlement_type"=> [
                            "name" => $asentamientoTipo->descripcion
                    ]
                ];
            }),
            'municipality' => [
                'key'=> (int)$codigoPostal->c_mnpio,
                'name' => $municipio->descripcion
            ]
        ];
    }
}
