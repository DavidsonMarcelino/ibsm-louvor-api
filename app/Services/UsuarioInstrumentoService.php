<?php

namespace App\Services;

use App\Repositories\UsuarioInstrumentoRepository;
use LaravelAux\BaseService;

class UsuarioInstrumentoService extends BaseService
{
    /**
     * UserService constructor.
     *
     * @param UsuarioInstrumentoRepository $repository
     */
    public function __construct(UsuarioInstrumentoRepository $repository)
    {
        parent::__construct($repository);
    }
}