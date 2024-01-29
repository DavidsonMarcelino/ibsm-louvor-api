<?php

namespace App\Services;

use App\Repositories\EscalaRepository;
use LaravelAux\BaseService;

class EscalaService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param EscalaRepository $repository
     */
    public function __construct(EscalaRepository $repository)
    {
        parent::__construct($repository);
    }
}