<?php

namespace App\Services;

use App\Repositories\PartituraRepository;
use LaravelAux\BaseService;

class PartituraService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param PartituraRepository $repository
     */
    public function __construct(PartituraRepository $repository)
    {
        parent::__construct($repository);
    }
}