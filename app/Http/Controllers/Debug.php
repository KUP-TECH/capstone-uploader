<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Debug extends Controller
{
    public function index()
    {
        return view('test.registration');
    }
        public function login()
    {
        return view('test.login');
    }

    public function homepage()
    {
        return view('test.homepage');
    }
        public function listofcapstone()
    {
        return view('test.listofcapstone');
    }
    public function uploadaproject()
    {
        return view('test.uploadproject');
    }
}
