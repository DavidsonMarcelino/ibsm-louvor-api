<?php

namespace App\Repositories;

use App\Models\Banda;
use LaravelAux\BaseRepository;

class BandaRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Banda $model
     */
    public function __construct(Banda $model)
    {
        parent::__construct($model);
    }
}