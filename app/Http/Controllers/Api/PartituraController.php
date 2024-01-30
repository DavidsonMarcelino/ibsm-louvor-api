<?php

namespace App\Http\Controllers\Api;

use App\Services\PartituraService;
use App\Http\Requests\PartituraRequest;
use LaravelAux\BaseController;

class PartituraController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param PartituraService $service
     * @param PartituraRequest $request
     */
    public function __construct(PartituraService $service)
    {
        parent::__construct($service, new PartituraRequest);
    }
}