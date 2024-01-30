<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banda extends Model
{
    use SoftDeletes;
    protected $table = 'bandas';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'nome',
        'descricao',
    ];
}