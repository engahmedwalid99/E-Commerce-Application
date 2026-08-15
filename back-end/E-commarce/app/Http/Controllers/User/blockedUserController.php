<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class blockedUserController
{
    public function __invoke(Request $request)
    {
        $user = auth()->user();
        return view('User.blocked', compact('user'));
    }
}