<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function showStudent(){
        return view('listStudent');
    }
    public function registerStudent(){
        return view('Register');
    }
}
