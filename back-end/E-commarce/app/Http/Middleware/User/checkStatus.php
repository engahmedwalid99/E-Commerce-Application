<?php

namespace App\Http\Middleware\User;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checkStatus
{
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->status == 0) {
            return redirect()->route('blocked-user');
        }
        return $next($request);
    }
}