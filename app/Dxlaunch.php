<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dxlaunch extends Model
{
    protected $fillable = [
        'token',
        'token_name',
        'token_symbol',
        'token_decimal',
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

    public function transaction()
    {
        return $this->hasMany('App\Dxlaunch_Transaction', 'dxlaunch_id', 'id');
    }

    public function sumamount()
    {
        $arr = $this->transaction;
        $sum = 0;
        foreach ($arr as $key => $value) {
            $sum = $sum + $value->amount_token;
        }
        return $sum;
    }

    public function sumamountacc($check)
    {
        $arr = $this->transaction;
        $sum = 0;
        foreach ($arr as $key => $value) {
            if ($check == $value->address) {
                $sum = $sum + $value->amount_token;
            }
        }
        return $sum;
    }
}
