<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

/**
 * Valida se o usuário que está acessando está logado na guard Admins, caso esteja passará, senão será levado para o login.
 */
class AuthRouteWebAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $checkAdmin = Auth::guard('admins')->check();

        return $checkAdmin ? $next($request) : redirect()->route('login');
    }
}
