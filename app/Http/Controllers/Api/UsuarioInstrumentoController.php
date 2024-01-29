<?php

namespace App\Http\Controllers\Api;

use App\Services\UsuarioInstrumentoService;
use App\Http\Requests\UsuarioInstrumentoRequest;
use LaravelAux\BaseController;

class UsuarioInstrumentoController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param UsuarioInstrumentoService $service
     * @param UsuarioInstrumentoRequest $request
     */
    public function __construct(UsuarioInstrumentoService $service)
    {
        parent::__construct($service, new UsuarioInstrumentoRequest);
    }
}