<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class AdminController extends Controller
{

    public function adminHome() {
        $phones = Phone::all();
        return view('admin.homeadmin', compact('phones'));


    }



}
