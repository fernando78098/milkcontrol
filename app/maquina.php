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

    public function ordem_de_servico()
    {
        return $this->hasMany('App\Ordem_de_servico');
    }
}
