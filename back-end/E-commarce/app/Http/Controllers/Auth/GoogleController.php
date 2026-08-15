<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController
{
    public function redirect(){
        try {
            $user = Socialite::driver('google')->redirect();
            return $user;
        } catch (\Throwable $th) {
            return redirect()->route('register')->with('error', $th->getMessage());
        }
    }

    public function callback(){
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::firstOrCreate([
                'email' => $google_user->getEmail()
            ], [
                'name' => $google_user->getName(),
                'email' => $google_user->getEmail(),
                'password' => Hash::make(Str::random(14))
            ]);

            Auth::login($user);
            return redirect()->route('user.profile')->with('success', 'Logged in successfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
