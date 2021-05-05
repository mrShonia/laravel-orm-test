<?php

namespace App\Http\Middleware;

use Closure;

class FilterSymbols
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

        $ex = explode(';', $request->get('text'));


        if(count($ex) > 1 ) {
            echo 'Dropped';
            exit;
        }

        return $next($request);
    }
}
