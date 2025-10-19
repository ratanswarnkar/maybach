<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use App\Mail\Websitemail;
use Hash;


class AdminController extends Controller
{
    //
public function dashboard(){
    return view('admin.dashboard');
}

    public function login(){
        return view('admin.login');
    }

    public function login_submit(Request $request)
    {
     $request->validate([
        'username'=>'required',
        'password'=>'required'
     ]);
     $check= $request->all();
     $data=[
        'username'=>$check['username'],
        'password'=>$check['password'],
     ];

     if(Auth::guard('admin')->attempt($data)){
        return redirect()->route('admin_dashboard');
     }else{
        return redirect()->route('admin_login')->with('error','Invalid Credentials');
     }
     }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin_login')->with('success','Logout Successfully');
    }

    public function forget_password(){
        return view('admin.forget_password');
    }

    public function forget_passwrod_submit(Request $request)
    {
        
    }
}
