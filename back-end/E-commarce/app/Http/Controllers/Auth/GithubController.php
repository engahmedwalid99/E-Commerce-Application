<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GithubController
{
    public function redirect(){
        try {
            $user = Socialite::driver('github')->redirect();
            return $user;
        } catch (\Throwable $th) {
            return redirect()->route('login')->with('error', $th->getMessage());
        }
    }

    public function callback(){
        try {
            $github_user = Socialite::driver('github')->user();

            $user = User::firstOrCreate([
                'email' => $github_user->getEmail()
            ],[
                'name' => $github_user->getName(),
                'email' => $github_user->getEmail(),
                'password' => Hash::make(Str::random(14)),
            ]);

            Auth::login($user);
            return redirect()->route('home')->with('success','تم ألدخول بواسطه github');

        } catch (\Throwable $th) {
            return redirect()
            ->route('register')
            ->with('error', $th->getMessage());
        }
    }
}
