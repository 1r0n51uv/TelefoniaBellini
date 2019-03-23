<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Notification;
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


    public function resetPassword(Request $request) {

        $input = $request->all();

        if (User::whereEmail($input['email'])->first() != null) {
            $pass = str_random(8);
            $hashed = Hash::make($pass);
            MailController::resetPassword(User::whereEmail($input['email'])->first()->email, $hashed);
            Notification::add('success', '', 'Password reinviata con successo');
            return redirect('/');

        } else {
            Notification::add('error', '', 'Indirizzo email non trovato');
            return redirect('/login');
        }



    }

}
