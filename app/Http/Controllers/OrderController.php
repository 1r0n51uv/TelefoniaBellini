<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Order;
use Notification;

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

    public static function deleteOrder($id) {

        $order = Order::whereId($id)->first();

        $extractedDate = date('d-m-Y', strtotime($order->created_at));

        $dateTocheck = Carbon::parse($extractedDate)->addWeeks(4);

        $parsedNextDate = date('d-m-Y', strtotime($dateTocheck));

        $now = Carbon::now();

        $parsedNow = date('d-m-Y', strtotime($now));

        if ($dateTocheck > $now) {
            $order['status'] = 'Cancellato';
            $order->save();
            Notification::add('success', '', "Il tuo ordine è stato cancellato con successo");
            return redirect()->action('HomeController@index');

        } else {
            Notification::add('error', '', "Impossibile cancellare l'ordine");
            return redirect()->action('ProfileController@getProfile');
        }




    }



}
