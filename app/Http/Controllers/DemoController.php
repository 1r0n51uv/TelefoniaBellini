<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class DemoController extends Controller
{
    public function liveSearch(Request $request) { 
        $search = $request->id;

        if (is_null($search))
        {
           return view('search');		   
        }
        else
        {
            $phones = Phone::where('brand','LIKE',"%{$search}%")->orWhere('model','LIKE',"%{$search}%")->get();

            return view('searchajax')->withPhones($phones);
        }
    }



}
