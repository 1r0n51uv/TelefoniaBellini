<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public static function storeOrder($user, $shipment, $products, $total) {

        $order = new Order;

        $order['user_id'] = $user->id;
        $order['shipment_id'] = $shipment->id;
        $order['products_id'] = $products;
        $order['total'] = $total;
        $order['status'] = "Ricevuto";

        $order->save();

        return $order;

    }

    public static function extractDeviceFromOrder($order_id) {

        $order = Order::whereId($order_id)->first();

        $devices = explode("-", $order['products_id']);

        return $devices;


    }



}
