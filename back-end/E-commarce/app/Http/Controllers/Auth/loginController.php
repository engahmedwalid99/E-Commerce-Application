<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\loginRequest;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->intended('/user/profile')->with('success','تم تسجيل ألدخول بنجاح');
        }
        return redirect()->intended('login')->with('error','ألبيانات ألمدخله غير صحيحه.');
    }
}
