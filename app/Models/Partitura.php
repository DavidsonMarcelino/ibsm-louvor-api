<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partitura extends Model
{
    use SoftDeletes;
    protected $table = 'partituras';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'musica_id',
        'nome',
        'descricao',
        'arquivo',
    ];
}