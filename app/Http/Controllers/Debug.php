<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Debug extends Controller
{
    public function index()
    {
        return view('test.registration');
    }
    public function homepage()
    {
        return view('test.homepage');
    }
}
