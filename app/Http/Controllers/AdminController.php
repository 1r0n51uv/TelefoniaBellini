<?php

namespace App\Http\Controllers;

use App\Order;
use App\Phone;

class AdminController extends Controller
{

    public function adminHome() {
        $phones = Phone::all();
        $orders = Order::all();
        foreach ($orders as $order) {
          OrderController::extractDeviceFromOrder($order->id);

        }

        //return view('admin.homeadmin', compact('phones', 'orders'));


    }



}
