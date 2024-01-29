<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UsuarioInstrumento extends Model
{
    use SoftDeletes;
    protected $table = 'usuario_instrumentos';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'usuario_id',
        'instrumento_id'
    ];
}