<?php

namespace App\Http\Controllers;

use App\Order;
use App\ShipmentDetails;
use App\Specification;
use App\Phone;
use App\User;
use Illuminate\Http\Request;
use Notification;

class AdminController extends Controller
{

    public function adminHome() {

        $spec = Specification::all();
        $orders = Order::all();
        $users = User::all();

        return view('admin.homeadmin', compact('phones', 'spec', 'orders', 'users'));


    }

    public function changeOrderStaut($id, $status) {

        $order = Order::whereId($id)->first();

        $order['status'] = $status;

        $order->save();

        return redirect()->action('AdminController@adminHome');

    }



}
