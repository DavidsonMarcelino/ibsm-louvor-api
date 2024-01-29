<?php

namespace App\Repositories;

use App\Models\Instrumento;
use LaravelAux\BaseRepository;

class InstrumentoRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param ]Instrumento $model
     */
    public function __construct(Instrumento $model)
    {
        parent::__construct($model);
    }
}