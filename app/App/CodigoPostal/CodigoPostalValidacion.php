<?php

namespace App\App\CodigoPostal;

use App\Exceptions\ValidacionException;

class CodigoPostalValidacion
{

    public function validarCodigoNumero(CodigoTO $codigoTO)
    {
        if (is_string($codigoTO->getCodigo())) {
            throw new ValidacionException('Server Error');
        }
    }
}
