<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Cart;
use App\User;
use App\Http\Controllers\CartController;


class StripeController extends Controller
{
    public function pay(Request $request) {
        $stripe = Stripe::make('sk_test_8Kzs6fXmdOGs7i7h9cdujG6k', '2018-02-28');
    
        $amount = $request['amount'];
        $id = $request['user'];

        $user = User::whereId($id)->first();;

        $customer = $stripe->customers()->find($id);       


        $card = $stripe->cards()->create($id, $_POST['stripeToken']);

        $charge = $stripe->charges()->create([
            'customer' => $id,
            'currency' => 'Eur',
            'amount'   => $amount,
        ]);
    
        return redirect()->action('CartController@destroyCart');

    }

   

    public static function createStripeAccount($user) {
        $stripe = Stripe::make('sk_test_8Kzs6fXmdOGs7i7h9cdujG6k', '2018-02-28');

        $customer = $stripe->customers()->create([
            'id' => $user->id,
            'email' => $user->email,
        ]);

    }



}
        