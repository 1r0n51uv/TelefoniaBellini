<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Notification;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->check() && Auth::user()->admin != 1) {

            Notification::add('error', '', 'Non disponi dei privilegi di amministratore');
            return redirect()->action('HomeController@index');

        }

        return $next($request);





    }

}
