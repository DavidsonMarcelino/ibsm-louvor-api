<?php

namespace App\Repositories;

use App\Models\UsuarioInstrumento;
use LaravelAux\BaseRepository;

class UsuarioInstrumentoRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param UsuarioInstrumento $model
     */
    public function __construct(UsuarioInstrumento $model)
    {
        parent::__construct($model);
    }
}