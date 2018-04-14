<?php

namespace App\Http\Controllers;

use App\ShipmentDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Notification;

class ShipmentDetailsController extends Controller
{
    public function createShipmentDetailsView() {
        return view('shipmentDetails');
    }

    public function storeDetails(Request $request) {

        $input = $request->all();

        $details = new ShipmentDetails;

        $details['address'] = $input['address'];
        $details['number'] = $input['number'];
        $details['city'] = $input['city'];
        $details['province'] = $input['province'];
        $details['state'] = 'Italia';
        $details['cap'] = $input['cap'];
        $details['phone'] = $input['phone'];
        $details['description'] = $input['description'];
        $details['user_id'] = Auth::user()->id;

        $details->save();

        Notification::add('success', '', 'Informazioni inserite con successo');

        return view('index');


    }
}
