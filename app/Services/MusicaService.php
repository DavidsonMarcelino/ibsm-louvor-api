<?php

namespace App\Services;

use App\Repositories\MusicaRepository;
use LaravelAux\BaseService;

class MusicaService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param MusicaRepository $repository
     */
    public function __construct(MusicaRepository $repository)
    {
        parent::__construct($repository);
    }
}