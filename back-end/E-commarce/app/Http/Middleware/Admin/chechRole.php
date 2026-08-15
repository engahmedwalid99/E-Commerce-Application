<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class chechRole
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        if($role != auth()->user()->role){
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}