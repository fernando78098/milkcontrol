<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class itens_da_os extends Model
{
    use SoftDeletes;
    protected $fillable =
    [
        'ordem_de_servico_id',
        'descricao',
        'quantidade',
        'valor_unitario',
        'valor_total',
    ];    
}
