<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CapstoneModel;


class Admin extends Controller
{
    public function index() {
        $data = [];
        $data['users_count']  = User::count();
        $data['capstone'] = CapstoneModel::count();
        $data['iot']   = CapstoneModel::where('type', 'IoT')->count();
        $data['app']   = CapstoneModel::where('type', 'App')->count();
        $data['web']   = CapstoneModel::where('type', 'Web')->count();
        $data['projects'] = CapstoneModel::all();
        $data['users'] = User::all();
        $data['count'] = CapstoneModel::count();
        
        return view('pages.admin.dashboard', ['data' => $data]);
    }


    public function users() {
        $data = [];
        $data['users'] = User::all();
        return view('pages.admin.users', ['data' => $data]);
    }
}
