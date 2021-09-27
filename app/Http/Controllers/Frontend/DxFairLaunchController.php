<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DxFairLaunchController extends Controller
{
    public function fairdashboard()
    {
        return view('frontend.dxlaunch.index');
    }

    public function faircreatesale()
    {
        # code...
    }
}
