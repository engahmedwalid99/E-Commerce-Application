<?php

namespace App\Http\Controllers\Auth;

// use App\Mail\LogoutMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class logoutController
{
    public function logout(Request $request){
        $user = Auth::user();
        if($user){
            // $userName = $user->name;
            // $userEmail = $user->email;
            Auth::logout();
            // Mail::to($userEmail)->send(new LogoutMail($userName));
        }

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success','نم تسجيل ألخروج بنجاح');
    }
}