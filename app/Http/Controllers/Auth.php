<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth; 

use App\Models\User;
class Auth extends Controller
{
    public function index(){

        return view("pages.login");
    }


    public function registration() {

        return view('pages.registration');
    }

    public function register(Request $request) {
        $data = $request->validate([
            'username'      => 'required|min:6|max:20',
            'email'         => 'required',
            'password'      => 'required|min:8|confirmed',
        ]);

        User::create([
            'name'      => $data['username'],
            'email'     => $data['email'],
            'password'  => bcrypt($data['password']),
        ]);


        return redirect()->back()->with('msg','Registered Successfuly');
 
    }


    public function login(Request $request){
        $credentials = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);


        if (FacadesAuth::attempt($credentials)) {

            $user = FacadesAuth::user();
            $request->session()->regenerate();

            if ($user->role == 'admin') {
                return redirect()->route('admin');
            } else if ($user->role == 'user') {
                return redirect()->route('home');
            }
        }


        return back()->with([
            'error' => 'The provided credentials do not match our records.',
        ]);

    }



    public function logout(){   
        FacadesAuth::logout();
        return redirect()->route('login');
    }
}
