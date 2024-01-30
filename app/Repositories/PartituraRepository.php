<?php

namespace App\Repositories;

use App\Models\Partitura;
use LaravelAux\BaseRepository;

class PartituraRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Partitura $model
     */
    public function __construct(Partitura $model)
    {
        parent::__construct($model);
    }
}