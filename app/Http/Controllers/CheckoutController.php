<?php

namespace App\Http\Controllers;

use App\ShipmentDetails;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    public function goToCheckout() {
        $shipment = ShipmentDetails::whereUserId(Auth::user()->id)->first();
        return view('checkout', compact('shipment'));

    }

    public function selectDestination($destination) {
        session()->put('dest', $destination);
        return back();

    }

}
