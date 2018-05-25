<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ShipmentDetails;
use App\Order;


class ProfileController extends Controller
{

    public function getProfile() {

        $orders = Order::whereUserId(Auth::user()->id)->get();

        $shipment = ShipmentDetails::whereUserId(Auth::user()->id)->first();

        return view('auth.profile', compact('orders','shipment'));


    }

}
