<?php

namespace App\App\CodigoPostal;

use App\Exceptions\ValidacionException;

class CodigoPostalValidacion
{

    public function validarCodigoNumero(CodigoTO $codigoTO)
    {
        if (!is_numeric($codigoTO->getCodigo())) {
            throw new ValidacionException('Server Error');
        }
    }
}
