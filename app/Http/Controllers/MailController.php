<?php


namespace App\Http\Controllers;

use App\User;
use Illuminate\Hashing\ArgonHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        'subject' => 'Password: ',
        'content' => $pass,
    ];


    Mail::send('mail.mail', $data, function ($message) use ($data) {

        $message->from('spcorporation69@gmail.com', 'Comunicazione Password');
        $message->to($data['email']);
        $message->subject($data['subject']);


    });

}

}
