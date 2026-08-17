<?php

namespace App\Http\Controllers\Auth;

// use App\Mail\LoginMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Auth\loginRequest;

class loginController
{
    public function index(){
        return view("Auth.login");
    }

    public function login(loginRequest $request){

        $data = $request->validated();

        $credentials = $request->only("email","password");

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->intended('/dashboard');
            }
            
            // Mail::to($user->email)->send(new LoginMail($user->name));
            return redirect()->intended('/user/profile')->with('success', 'تم تسجيل الدخول بنجاح');
        }
        return redirect()->intended('login')->with('error','ألبيانات ألمدخله غير صحيحه.');
    }
}