<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logoutController
{
    public function logout(Request $request){
        $user = User::where('email', $request->email)->first();
        Auth::logout();
        return redirect()->route('home')->with('success','Loged out successfully');
    }
}