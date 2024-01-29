<?php

namespace App\Repositories;

use App\Models\Escala;
use LaravelAux\BaseRepository;

class EscalaRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Escala $model
     */
    public function __construct(Escala $model)
    {
        parent::__construct($model);
    }
}