<?php

namespace App\Http\Middleware;
use Closure;
use Auth;

class CheckLogout
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
        if(Auth::guest())
        {
            return redirect()->intended('/login');
        }
        if(Auth::user()->level == 1)
        {
            return $next($request);
        }
        return redirect()->back()->with('unauthorised', 'You are 
            unauthorised to access this page');
    }
}
