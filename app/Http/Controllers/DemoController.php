<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DemoController extends Controller
{
    public function liveSearch(Request $request)
    { 
        $search = $request->id;

        if (is_null($search))
        {
           return view('search');		   
        }
        else
        {
            $users = User::where('name','LIKE',"%{$search}%")->orWhere('email','LIKE',"%{$search}%")->get();

            return view('searchajax')->withUsers($users);
        }
    }
}
