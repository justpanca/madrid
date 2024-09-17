<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if(!auth()->check() || auth()->user()->role_user != $role) {
            return redirect()->route('homepage');
        }

        if($role == 'admin') {
            return $next($request);
        }

        abort(403);
    }
}
