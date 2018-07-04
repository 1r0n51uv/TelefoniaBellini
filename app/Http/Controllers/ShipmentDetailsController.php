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
    public function updateDetailsView($id){

        $details = ShipmentDetails::whereId($id)->first();

        return view('editDetails', compact('details'));



    }

    public function updateDetails(Request $request, $id){


        $values = $request->all();

        $details = ShipmentDetails::find($id);


        if(isset($values['address'])&& $values['address'] != null) {
            $details->addres = $request->input('address');
        }
        if(isset($values['number'])&& $values['number'] != null) {
            $details->number = $request->input('number');
        }
        if(isset($values['city'])&& $values['city'] != null) {
            $details->city = $request->input('city');
        }
        if(isset($values['province'])&& $values['province'] != null) {
            $details->province = $request->input('province');
        }
        if(isset($values['cap'])&& $values['cap'] != null) {
            $details->cap = $request->input('cap');
        }
        if(isset($values['phone'])&& $values['phone'] != null) {
            $details->phone = $request->input('phone');
        }
        if(isset($values['description'])&& $values['description'] != null) {
            $details->description = $request->input('description');
        }
        if(isset($values['user_id'])&& $values['user_id'] != null) {
            $details->user_id = $request->input('user_id');
        }
        if(isset($values['updated_at'])&& $values['updated_at'] != null) {
            $details->updated_at = $request->input('updated_at');
        }
        if(isset($values['created_at'])&& $values['created_at'] != null) {
            $details->created_at = $request->input('created_at');
        }


        return redirect()->action('ProfileController@getProfile');

    }




}

