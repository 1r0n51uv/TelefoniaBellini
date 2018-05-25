<?php

namespace App\Http\Controllers;

use App\Specification;
use Illuminate\Http\Request;
use App\Phone;

class PhoneController extends Controller
{
    public function index() {
        $phones = Phone::paginate(6);
        return view('shop2', compact('phones'));
    }

 

    public function showSingle($id) {
        $phone = Phone::whereId($id)->first();
        $specification = Specification::whereId($id)->first();
        return view('singleDevice', compact('phone', 'specification'));

    }

    
}
