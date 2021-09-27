<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DxLaunchController extends Controller
{
    public function defidashboard()
    {
        return view('frontend.dxlaunch.index');
    }

    public function deficreatesale()
    {
        return view('frontend.dxlaunch.create');
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
            if (strtotime($value) - strtotime($date) <= 0 || (strtotime($value) - strtotime($checktime) > 604800 || strtotime($value) - strtotime($checktime) <= 600)) {
                return 'Presale end time must be at least 10 minutes more than presale start time!';
            } elseif (strtotime($value) - strtotime($checktime) > 604800) {
                return 'Presale end time must be at least 10 minutes more than presale start time!';
            }
        } elseif ($checkval == 'end') {
            if (strtotime($value) - strtotime($date) <= 0 || (strtotime($value) - strtotime($checktime) > 604800 || strtotime($value) - strtotime($checktime) <= 600)) {
                return 'Presale end time must be at least 10 minutes more than presale start time!';
            } elseif (strtotime($value) - strtotime($checktime) > 604800) {
                return 'Presale end time must be at least 10 minutes more than presale start time!';
            }
        } 
        return 1;
    }
}