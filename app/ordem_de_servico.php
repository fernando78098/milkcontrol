<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ordem_de_servico extends Model
{
    use SoftDeletes;
    protected $fillable =
    [
        'maquina_id',        
        'data_de_abertura',
        'data_de_fechamento',
        'descricao'        
    ];

    public function maquina()
    {
        return $this->belongsTo('App\Maquina');
    }
}
