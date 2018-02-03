<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AuthorRole
{

    const MEMBER_ROLE = 1;
    const AUTHOR_ROLE = 2;
    const MOD_ROLE = 3;
    const ADMIN_ROLE = 4;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user()->role < self::AUTHOR_ROLE){
            return response()->view('error.403');
        }
        return $next($request);
    }
}
