<?php

namespace App\Http\Middleware;

use Closure;

class checkRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $rol)
    {
        if(auth()->user()->getRol()===$rol)
            return $next($request);
        else
            return redirect('/');
    }
}
