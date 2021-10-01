<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dxlaunch extends Model
{
    protected $fillable = [
        'token',
        'price',
        'soft', 
        'hard',
        'min',
        'max',
        'liquidity',
        'rate',
        'start',
        'end',
        'lock',
        'description',
    ];

    public function infor()
    {
        return $this->hasOne('App\Dxlaunch_information', 'dxlaunch_id', 'id');
    }
}
