<?php

namespace App\Http\Controllers;

use App\Specification;
use App\Phone;

class AdminController extends Controller
{

    public function adminHome() {
        $phones = Phone::all();
        $spec = Specification::all();
        return view('admin.homeadmin', compact('phones', 'spec'));


    }



}
