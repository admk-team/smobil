<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function mobile()
    {
        return view('front.mobile.index');
    }

    public function dth()
    {
        return view('front.dth.index');
    }

    public function broadband()
    {
        return view('front.broadband.index');
    }

    public function cable()
    {
        return view('front.cable.index');
    }

    public function electricity()
    {
        return view('front.electricity.index');
    }

    public function water()
    {
        return view('front.water.index');
    }
}
