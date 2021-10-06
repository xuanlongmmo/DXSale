<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Dxlaunch_Transaction;
use App\Dxlaunch;

class MetamaskController extends Controller
{
    public function create()
    {
        try {
            $from = $_POST['from'];
            $amount = $_POST['amount'];
            $idtoken = $_POST['idtoken'];

            DB::beginTransaction();

            $dx = Dxlaunch::find($idtoken);
            $amount_token = $dx->rate * $amount;

            if ($dx->soft > $dx->sumamount() && $dx->soft - $dx->sumamount() > $amount_token) {
                $tran = new Dxlaunch_Transaction();
                $tran->dxlaunch_id = $idtoken;
                $tran->address = $from;
                $tran->amount_eth = $amount;
                $tran->amount_token = $amount_token;
                $tran->save();

                DB::commit();
                return 1;
            } else {
                return 0;
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return 0;
        }
    }
}
