<?php

namespace App\Http\Middleware;

use Closure;

use Cart;
use Notification;
use Auth;


class CartCheckout
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

        if(Cart::total() == 0) {
            Notification::add('error', '', 'Aggiungi un elemento nel carrello');
            return redirect()->action('CartController@showCart');
        }


        return $next($request);
    }
}
