<?php

namespace App\Http\Controllers\Api;

use App\Services\BandaService;
use App\Http\Requests\BandaRequest;
use LaravelAux\BaseController;

class BandaController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param BandaService $service
     * @param BandaRequest $request
     */
    public function __construct(BandaService $service)
    {
        parent::__construct($service, new BandaRequest);
    }
}