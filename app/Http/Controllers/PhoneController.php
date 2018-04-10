<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class PhoneController extends Controller
{
    public function index() {
        $phones = Phone::latest()->get();
        return view('shop2', compact('phones'));
    }


    public function singlephone($id) {
        $phone = Phone::whereId($id)->first();
        return view('listphone', compact('phone'));

    }
}
