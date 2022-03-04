<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAddCart
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
        if(Auth::check())
        {
            return redirect()->intended('frontend/login')->with('error','Vui lòng login');
        }
        return $next($request);
    }
}
