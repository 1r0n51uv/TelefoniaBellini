<?php

namespace App\Http\Controllers;

use App\ShipmentDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function goToCheckout() {
        $shipment = ShipmentDetails::whereUserId(Auth::user()->id)->first();
        return view('checkout', compact('shipment'));

    }
}
