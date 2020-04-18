<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class maquina extends Model
{
    use SoftDeletes;
    protected $fillable =
    [
        'nome_da_maquina',
        'marca_da_maquina',
        'tratorista',
    ];
}
