<?php

namespace App\Http\Controllers;

use App\Specification;
use Illuminate\Http\Request;
use App\Phone;

class PhoneController extends Controller
{
    public function index() {
        $phones = Phone::paginate(6);
        return view('shopping', compact('phones'));
    }

 

    public function showSingle($id) {
        $phone = Phone::whereId($id)->first();
        $specification = Specification::whereId($id)->first();
        return view('singleDevice', compact('phone', 'specification'));

    }

    public function addPhone(Request $request) {

        $input = $request->all();

        $phone = new Phone();

        $phone['pic1'] = $input['pic1'];
        $phone['pic2'] = $input['pic2'];
        $phone['pic3'] = $input['pic3'];
        $phone['marca'] = $input['marca'];
        $phone['model'] = $input['model'];
        $phone['peso'] = $input['peso'];
        $phone['anno'] = $input['anno'];
        $phone['memory'] = $input['memory'];
        $phone['sistem'] = $input['sistem'];
        $phone['processor'] = $input['processor'];
        $phone['screen'] = $input['screen'];
        $phone['disply'] = $input['display'];
        $phone['resolution'] = $input['resolution'];
        $phone['camera'] = $input['camera'];
        $phone['media'] = $input['media'];
        $phone['autofocus'] = $input['autofocus'];
        $phone['bluetooth'] = $input['bluetooth'];
        $phone['phone_id'] = Phone::phone()->id;

        $phone->save();

        Notification::add('success', '', 'Un nuovo telefono è stato aggiunto');

        return view('homeadmin');

    }

    public function deletePhone($id){

       Phone::destroy($id);
       return redirect()->action('AdminController@adminHome');

    }


}
