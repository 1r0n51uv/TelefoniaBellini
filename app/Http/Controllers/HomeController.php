<?php

namespace App\Http\Controllers;
use App\Specification;
use App\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $evidence = Specification::where('description', '!=', ' ')->get();
        $slider = Slider::all()->first();
        $paginate = false;
        return view('index', compact('evidence', 'paginate', 'slider'));
    }


}
