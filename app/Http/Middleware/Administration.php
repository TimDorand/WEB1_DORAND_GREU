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
        if($request->user('admin') != 1){
            return redirect('bap.index');
        }else{
            return $next($request);
        }


    }
}
