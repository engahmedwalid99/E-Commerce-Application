<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\loginRequest;
use App\Mail\LoginMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class loginController
{
    public function index(){
        return view("Auth.login");
    }

    public function login(loginRequest $request){
        $data = $request->validated();
        $cradentails = $request->only("email","password");
        if(Auth::attempt($cradentails)){
            if($request->role == 'admin'){
                return redirect()->intended('dashboard');
            }
            Mail::to($request->email)->send(new LoginMail(Auth::user()->name));
            return redirect()->intended('/user/profile')->with('success','تم تسجيل ألدخول بنجاح');
        }
        return redirect()->intended('login')->with('error','ألبيانات ألمدخله غير صحيحه.');
    }
}
