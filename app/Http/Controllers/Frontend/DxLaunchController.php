<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\deficreatesale;
use Illuminate\Support\Facades\DB;

use App\Dxlaunch;
use App\Dxlaunch_information;

class DxLaunchController extends Controller
{
    public function defidashboard()
    {
        $dx = Dxlaunch::orderby('id', 'DESC')->get();
        $char = array();
        foreach ($dx as $key => $value) {
            $db = ($value->sumamount() / $value->soft) * 100;
            $char[$value->id]['db'] = $db;
            $char[$value->id]['cb'] = 100 - $db;
        }
        return view('frontend.dxlaunch.index', compact('dx', 'char'));
    }

    public function deficreatesale()
    {
        return view('frontend.dxlaunch.create');
    }

    // deficreatesale
    public function pdeficreatesale(Request $request)
    {
        try {
            DB::beginTransaction();

            $insertDataDX = $request->only(['token', 'price', 'soft', 'hard', 'min', 'max', 'liquidity', 'rate', 'start', 'end', 'lock', 'description', 'token_name', 'token_symbol', 'token_decimal']);
            $id = DB::table('dxlaunches')->max('id') + 1;
            $dxlaunch = new Dxlaunch($insertDataDX);
            $dxlaunch->id = $id;
            $dxlaunch->save();

            $insertDatainfor = $request->only(['logo_link', 'website_link', 'github_link', 'twitter_link', 'reddit_link', 'telegram_link']);
            $dxinfor = new Dxlaunch_information($insertDatainfor);
            $dxinfor->dxlaunch_id = $id;
            $dxinfor->save();

            DB::commit();
            return redirect()->route('defidashboard');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withInput();
        }
    }

    public function checkdate()
    {
        $date = date('Y-m-d\TH:i');
        $value = $_GET['value'];
        $checkval = $_GET['checkval'];
        $checktime = $_GET['checktime'];

        if ($checkval == 'start' && strtotime($value) - strtotime($date) <= 600) {
            return 'Presale start time must be at least 10 minutes from current time!';
        } elseif ($checkval == 'end') {
            if (strtotime($value) - strtotime($date) <= 0 || ((strtotime($value) - strtotime($checktime) < 604800 && strtotime($value) - strtotime($checktime) <= 600))) {
                return 'Presale end time must be at least 10 minutes more than presale start time!';
            } elseif (strtotime($value) - strtotime($checktime) > 604800) {
                return 'Presale end time can not be longer than 1 week from presale start time!';
            }
        } elseif ($checkval == 'lock') {
            if (strtotime($value) - strtotime($checktime) < 2592000) {
                return 'Liquidity Lock time must be at least 1 month after Presale End Time!';
            }
        } 
        return 1;
    }

    public function converttime()
    {
        if (isset($_GET['value']) && $_GET['value'] != null) {
            $val = $_GET['value'];
            $val = date("d F Y", strtotime($val))." at ".date("H:i", strtotime($val));
            return $val;
        }

        return 0;
    }

    public function detaildxlaunch()
    {
        $id = $_GET['id'];
        $dxlaunch = Dxlaunch::find($id);
        return view('frontend.dxlaunch.view', compact('dxlaunch'));
    }
}