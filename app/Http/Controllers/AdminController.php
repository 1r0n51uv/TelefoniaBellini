<?php

namespace App\Http\Controllers;

use App\Order;
use App\ShipmentDetails;
use App\Slider;
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
        $slider = Slider::all()->first();

        return view('admin.homeadmin', compact('spec', 'orders', 'users', 'slider'));


    }

    public function adminHome2() {

        $spec = Specification::all();
        $orders = Order::all();
        $users = User::all();
        $slider = Slider::all()->first();

        return view('admin.homeAdmin2', compact('spec', 'orders', 'users', 'slider'));


    }

    public function changeOrderStaut($id, $status) {

        $order = Order::whereId($id)->first();

        $order['status'] = $status;

        $order->save();

        return redirect()->action('AdminController@adminHome');

    }



}
