<?php

namespace App\Http\Middleware;

use Closure;

class Administration
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
        /*if(Auth::check() && Auth::user()->admin == 0){
            return redirect('bap.index');
        }*/
        return $next($request);


    }
}
