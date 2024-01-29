<?php

namespace App\Services;

use App\Repositories\InstrumentoRepository;
use LaravelAux\BaseService;

class InstrumentoService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param ]InstrumentoRepository $repository
     */
    public function __construct(InstrumentoRepository $repository)
    {
        parent::__construct($repository);
    }
}