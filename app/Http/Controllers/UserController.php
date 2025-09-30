<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function showFormLogin(){
        return view('Auth.login');
    }
    public function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            if(Auth::user()->role==0){
                return redirect('/user/home');
            }else{
                 return redirect('/admin/dashboard');
            }
        }
    }
    public function showFormRegister(){
        return view('Auth.register');
    }
    public function reigster(Request $request){
        $input=$request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $input['password']=Hash::make($request->password);
        if($request->hasFile('profile')){
            $file=$request->file('profile');
            $filename=$file->getClientOriginalName();
            $file->move('upload',$filename);
            $input['profile']='upload/'.$filename;
        }
        $register=User::create($input);
        if($register){
            return redirect('/auth/login');
        }
    }
    public function dashboard(){
        if(Auth::user()->role==0){
            return redirect('/user/home');
        }
        return view('Dashboard.index');
    }
    public function logout(){
        Auth::logout();
        return redirect('/auth/login');
    }
}
