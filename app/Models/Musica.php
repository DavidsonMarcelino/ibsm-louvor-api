<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Musica extends Model
{
    use SoftDeletes;
    protected $table = 'musicas';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'banda_id',
        'nome',
        'descricao',
        'letra',
        'musica',
    ];
}