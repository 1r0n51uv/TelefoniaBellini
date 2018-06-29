<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Hashing\ArgonHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Snowfire\Beautymail\Beautymail;

class MailController {

public function index() {
    return view('mailform');
}

public function postEmail(Request $request) {

    $data = [

        'email' => $request['email'],
        'subject' => $request['subject'],
        'message' => $request['message'],

    ];

    Mail::send('mail.mail', $data, function ($message) use ($data) {

        $message->from('spcorporation69@gmail.com', 'Mail Test');
        $message->to($data['email']);
        $message->subject($data['subject']);

    });

    return redirect()->back();


}

public static function passCreation($email, $pass) {

    $data = [

        'email' => $email,
        'subject' => 'Comunicazione password: ',
        'content' => $pass,
    ];


    Mail::send('mail.mail', $data, function ($message) use ($data) {

        $message->from('spcorporation69@gmail.com', 'Conferma Registrazione');
        $message->to($data['email']);
        $message->subject($data['subject']);

    });

}

public static function mailOrder($email, $order) {

    $data = [

        'email' => $email,
        'subject' => 'Ordine n°: ' . $order->id,
        'id' => $order->id,
        'products_id' => $order->products_id,
        'user_id' => $order->user_id,
        'shipment_id' => $order->shipment_id,
        'total' => $order->total,
    ];

    Mail::send('mail.order', $data, function ($message) use ($data) {

        $message->from('spcorporation69@gmail.com', 'Conferma ordine');
        $message->to($data['email']);
        $message->subject($data['subject']);

    });

}



}
