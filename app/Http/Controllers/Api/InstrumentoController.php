<?php

namespace App\Http\Controllers\Api;

use App\Services\InstrumentoService;
use App\Http\Requests\InstrumentoRequest;
use LaravelAux\BaseController;

class InstrumentoController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param ]InstrumentoService $service
     * @param ]InstrumentoRequest $request
     */
    public function __construct(InstrumentoService $service)
    {
        parent::__construct($service, new InstrumentoRequest);
    }
}