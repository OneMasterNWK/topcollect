<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //
    protected $table = 'agents';
    protected $fillable = [
        'n_agts', 'p_agts', 's_agts','nais_agts','lnais_agts','piece_agts','nummpiece_agts','cel_agts','email_agts','email_verified_at','login_agts','pwd_agts'
    ];
}
