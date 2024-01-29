<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instrumento extends Model
{
    use SoftDeletes;
    protected $table = 'instrumentos';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'nome',
        'descricao'
    ];
}