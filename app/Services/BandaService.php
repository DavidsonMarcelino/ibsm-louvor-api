<?php

namespace App\Services;

use App\Repositories\BandaRepository;
use LaravelAux\BaseService;

class BandaService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param BandaRepository $repository
     */
    public function __construct(BandaRepository $repository)
    {
        parent::__construct($repository);
    }
}