<?php

namespace App\Http\Controllers;

use App\ShipmentDetails;
use Illuminate\Http\Request;
use Stripe;
use App\User;
use App\Http\Controllers\OrderController;


class StripeController extends Controller
{
    public function pay(Request $request) {

        $stripe = Stripe::make(env('STRIPE_SECRET'), '2018-02-28');
    
        $amount = $request['amount'];
        $id = $request['user'];

        User::whereId($id)->first();

        $stripe->customers()->find($id);

        $stripe->cards()->create($id, $_POST['stripeToken']);

        $stripe->charges()->create([
            'customer' => $id,
            'currency' => 'Eur',
            'amount'   => $amount,
        ]);
        return redirect()->action('CartController@destroyCart');

    }

   

    public static function createStripeAccount($user) {
        $stripe = Stripe::make(env('STRIPE_SECRET'), '2018-02-28');

        try {

            $stripe->customers()->find($user->id);

        } catch (\Cartalyst\Stripe\Exception\NotFoundException $e) {

            $stripe->customers()->create([
                'id' => $user->id,
                'email' => $user->email,
            ]);
        }

    }

    public function ciao() {
        echo 'ciao';
    }



}
        