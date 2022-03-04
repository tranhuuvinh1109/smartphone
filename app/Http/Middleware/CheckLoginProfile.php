<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLoginProfile
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
        if(Auth::user()->level == 0)
        {
            return $next($request);
        }
        return redirect()->back()->with('unauthorised', 'You are 
                  unauthorised to access this page');
    }
}
