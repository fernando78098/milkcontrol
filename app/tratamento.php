<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tratamento extends Model
{
    protected $fillable =
    [
        'nome',
        'medicamento',
        'min',
        'max',
        'carencia'
    ];
}
