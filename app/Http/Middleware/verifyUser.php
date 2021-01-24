<?php

namespace App\Http\Middleware;

use Closure;

class verifyUser
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
        if($request->session()->get('user'))
        {
           // dd(1);
           return $next($request);
        }
        return redirect()->route('user.home'); 
    }

}