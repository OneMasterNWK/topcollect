<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contribuable extends Model
{
    //

    protected $table = 'Contribuable';
    protected $fillable = [
        'n_cont', 'p_cont', 's_cont','nais_cont','lnais_cont',
        'pays_cont','nation_cont','piece_cont','numpiece_cont',
        'tel_cont','cel_cont','email_cont','activ_cont',
        'profess_cont','montredev_cont'
    ];
}
