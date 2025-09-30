<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function showFormLogin(){
        return view('Auth.login');
    }
    public function login(){

    }
    public function showFormRegister(){
        return view('Auth.register');
    }
}
