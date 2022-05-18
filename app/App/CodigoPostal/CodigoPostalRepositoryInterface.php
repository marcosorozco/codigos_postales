<?php

namespace App\App\CodigoPostal;

interface CodigoPostalRepositoryInterface
{

    public function buscarCodigo(CodigoTO $codigoTO);
}
