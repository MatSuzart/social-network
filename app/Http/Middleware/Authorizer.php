<?php

namespace App\Http\Middleware;

use Closure;

class Authorizer

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
        if(!$request->is('entrar') && \Auth::guest()){
            return redirect('/entrar');
        }

        return $next($request);
    }
}
