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

        $order->save();

    }



}
