<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\registerRequest;
use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class registerController
{
    public function index(){
        return view('Auth.register');
    }

    public function create_account(registerRequest $request){
        $data = $request->validated();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        Auth::login($user);

        Mail::to($request->email)->send(new RegisterMail($data['name']));
        return redirect()->intended('/user/profile')->with('success','تم أنشاء ألحساب بنجاح');
    }
}
