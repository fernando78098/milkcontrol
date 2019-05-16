<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leite extends Model
{
    protected $fillable =
    [
        'vaca',
        'turno',
        'lote',
        'leite'
    ];
}
