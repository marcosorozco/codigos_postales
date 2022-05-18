<?php

namespace App\Http\Controllers\CodigosPostales\V1;

use App\App\CodigoPostal\CodigoPostalRepositoryInterface;
use App\App\CodigoPostal\CodigoTO;
use App\App\CodigoPostal\ConvertirCodigoResumenDetalle;
use App\Exceptions\ValidacionException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CodigoPostalController extends Controller
{
    /**
     * @var CodigoPostalRepositoryInterface
     */
    private $codigoPostalRepository;

    public function __construct(CodigoPostalRepositoryInterface $codigoPostalRepository)
    {
        $this->codigoPostalRepository = $codigoPostalRepository;
    }

    /**
     * @param $codigo
     * @return \Illuminate\Http\JsonResponse
     */
    public function index($codigo)
    {
        $status = 200;
        try {
            $codigoTO = new CodigoTO();
            $codigoTO->setCodigo($codigo);
            $codigoPostal = $this->codigoPostalRepository->buscarCodigo($codigoTO);
            $response = ConvertirCodigoResumenDetalle::extraer($codigoPostal);
        } catch (ValidacionException $error) {
            $status = 500;
            $response = ['message' => $error->getMessage()];
        } catch (\Exception $error) {
            $status = 404;
            $response = ['message' => str_replace('.', " $codigo", $error->getMessage())];
        }
        return response()->json($response, $status);
    }
}
