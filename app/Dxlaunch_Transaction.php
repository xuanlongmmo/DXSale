<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dxlaunch_Transaction extends Model
{
    protected $table = 'dxlaunch_transactions';

    public function dxlaunch()
    {
        return $this->hasOne('App\Dxlaunch', 'id', 'dxlaunch_id');
    }
}
