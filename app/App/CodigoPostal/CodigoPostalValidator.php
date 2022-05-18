<?php

namespace App\App\CodigoPostal;

class CodigoPostalValidator implements CodigoPostalRepositoryInterface
{

    /**
     * @var CodigoPostalRepository
     */
    private $codigoPostalRepository;
    /**
     * @var CodigoPostalValidacion
     */
    private $codigoPostalValidacion;

    public function __construct(
        CodigoPostalRepository $codigoPostalRepository,
        CodigoPostalValidacion $codigoPostalValidacion
    ) {
        $this->codigoPostalRepository = $codigoPostalRepository;
        $this->codigoPostalValidacion = $codigoPostalValidacion;
    }

    public function buscarCodigo(CodigoTO $codigoTO)
    {
        $this->codigoPostalValidacion->validarCodigoNumero($codigoTO);
        return $this->codigoPostalRepository->buscarCodigo($codigoTO);
    }
}
