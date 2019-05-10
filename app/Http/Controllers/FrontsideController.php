<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontsideController extends Controller
{
    public function index()
    {
    	return view('front.index');
    }

    public function reserve()
    {
    	return view('front.reservation');
    }
}
