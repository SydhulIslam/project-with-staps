<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    // Login
    public function login(){
        return view('login', [
            'title' => "Login",
        ]);
    }

    public function login_post(Request $request){

    }

    // Registion
    public function registion(){
        return view('registion', [
            'title' => "Registion",
        ]);
    }





    // Registion POST method

    public function registion_post(Request $request){

 

    }

    public function logout(Request $request){


    }

}
