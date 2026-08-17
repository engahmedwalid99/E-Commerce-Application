<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\registerRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


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
        return redirect()->intended('/profile')->with('success','تم أنشاء ألحساب بنجاح');
    }
}
