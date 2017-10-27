<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function start()
    {
        return view('start');
    }

    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
}
