<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class procedimento extends Model
{
    protected $fillable =
    [
        'vaca',
        'lote',
        'dia',
        'tratamento_id'
    ];
}
