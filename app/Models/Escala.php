<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Escala extends Model
{
    use SoftDeletes;
    protected $table = 'escalas';


    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'user_id',
        'status',
        'start_date',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}