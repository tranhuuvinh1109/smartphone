<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLoginFrontend
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
            return redirect()->intended('frontend/login')->with('error','Vui lòng login');
        }
        return $next($request);
    }
}
