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

        $user = User::whereId($id)->first();


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
        $stripe = Stripe::make(env('STRIPE_SECRET'), '2018-02-28');

        try {

            $customer = $stripe->customers()->find($user->id);

        } catch (\Cartalyst\Stripe\Exception\NotFoundException $e) {

            $customer = $stripe->customers()->create([
                'id' => $user->id,
                'email' => $user->email,
            ]);
        }

    }

    public function ciao() {
        echo 'ciao';
    }



}
        