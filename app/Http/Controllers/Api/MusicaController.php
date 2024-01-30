<?php

namespace App\Http\Controllers\Api;

use App\Services\MusicaService;
use App\Http\Requests\MusicaRequest;
use LaravelAux\BaseController;

class MusicaController extends BaseController
{
    /**
     * UserController constructor.
     *
     * @param MusicaService $service
     * @param MusicaRequest $request
     */
    public function __construct(MusicaService $service)
    {
        parent::__construct($service, new MusicaRequest);
    }
}