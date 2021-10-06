<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function dxmint()
    {
        return view('frontend.dxmint');
    }

    public function dxdrop()
    {
        return view('frontend.dxdrop');
    }

    public function viewlock()
    {
        return view('frontend.dxlock.viewlock');
    }

    public function dxlock()
    {
        return view('frontend.dxlock.dxlock');
    }

    public function dxlplock()
    {
        return view('frontend.dxlock.dxlplock');
    }

    public function auditportal()
    {
        return view('frontend.auditportal');
    }

    public function kycportal()
    {
        return view('frontend.kycportal');
    }

    public function feemanagement()
    {
        return view('frontend.dao.feemanagement');
    }

    public function salebridge()
    {
        return view('frontend.dao.salebridge');
    }

    public function dxlaunch()
    {
        return view('frontend.archive.dxlaunch');
    }

    public function dxlockar()
    {
        return view('frontend.archive.dxlock');
    }
}
