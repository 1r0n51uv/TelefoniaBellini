<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;

class MailController {

    public function email(){

    $data = [

        'title'=> 'hi',
        'content'=> '2121'

];

Mail::send('mailtest', $data, function($message){

        $message->to('s.ammirati95@gmail.com', 'severino')->subject('Tore caino');

});
return redirect('/index');

    }
}
