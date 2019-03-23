<?php

namespace App\Http\Middleware;

use Closure;
use Notification;
use App\ShipmentDetails;
use Illuminate\Support\Facades\Auth;

class ShipmentDetailsMiddleware
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

        if(ShipmentDetails::whereUserId(Auth::user()->id)->first() == null) {
            Notification::add('error', '', 'Completa le informazioni di spedizione prima di continuare');
            return redirect()->action('ShipmentDetailsController@createShipmentDetailsView');

        }

        return $next($request);



    }

}
