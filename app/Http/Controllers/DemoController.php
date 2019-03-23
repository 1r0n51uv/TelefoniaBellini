<?php

namespace App\Http\Controllers;

use App\Specification;
use Illuminate\Http\Request;

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
            $phones = Specification::where('brand','LIKE',"%{$search}%")->orWhere('model','LIKE',"%{$search}%")->get();

            return view('searchajax')->withPhones($phones);
        }
    }

}
