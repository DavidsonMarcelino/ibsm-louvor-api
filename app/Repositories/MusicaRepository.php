<?php

namespace App\Repositories;

use App\Models\Musica;
use LaravelAux\BaseRepository;

class MusicaRepository extends BaseRepository
{
    /**
     * UserService constructor.
     *
     * @param Musica $model
     */
    public function __construct(Musica $model)
    {
        parent::__construct($model);
    }
}