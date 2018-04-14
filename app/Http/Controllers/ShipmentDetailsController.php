<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipmentDetailsController extends Controller
{
    public function returnView() {
        return view('shipmentDetails');
    }
}
