<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coleta extends Model
{
    protected $fillable =
    [
        'micro_id',
        'coleta_ae',
        'coleta_ad',
        'coleta_pe',
        'coleta_pd'
    ];
}
