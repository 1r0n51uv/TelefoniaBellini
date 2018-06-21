<?php

namespace App\Http\Controllers;

use App\Specification;
use Illuminate\Http\Request;
use App\Phone;
use function Symfony\Component\Console\Tests\Command\createClosure;

class PhoneController extends Controller
{
    public function index() {
        $phones = Specification::paginate(8);
        return view('shopping', compact('phones'));
    }



    public function showSingle($id) {
        $phone = Phone::whereId($id)->first();
        $specification = Specification::whereId($id)->first();
        return view('singleDevice', compact('phone', 'specification'));

    }

    public function addSpecification(Request $request) {

        $input = $request->all();

        $specification = new Specification();

        $specification['pic1'] = "";
        $specification['pic2'] = "";
        $specification['pic3'] = "";
        $specification['brand'] = $input['brand'];
        $specification['model'] = $input['model'];
        $specification['weight'] = $input['weight'];
        $specification['year'] = $input['year'];
        $specification['memory'] = $input['memory'];
        $specification['system'] = $input['system'];
        $specification['processor'] = $input['processor'];
        $specification['screen'] = $input['screen'];
        $specification['display'] = $input['display'];
        $specification['resolution'] = $input['resolution'];
        $specification['camera'] = $input['camera'];
        $specification['price'] = $input['price'];
        $specification['status'] = $input['status'];
        $specification['color'] = $input['color'];

        $specification->save();

        return redirect()->action('AdminController@adminHome');

    }



    public function updateSpecification(Request $request, $id){


        $values = $request->all();

        $specification = Specification::find($id);


        if(isset($values['brand'])&& $values['brand'] != null) {
            $specification->brand = $request->input('brand');
        }
        if(isset($values['model'])&& $values['model'] != null) {
            $specification->model = $request->input('model');
        }
        if(isset($values['weight'])&& $values['weight'] != null) {
            $specification->weight = $request->input('weight');
        }
        if(isset($values['year'])&& $values['year'] != null) {
            $specification->year = $request->input('year');
        }
        if(isset($values['memory'])&& $values['memory'] != null) {
            $specification->memory = $request->input('memory');
        }
        if(isset($values['system'])&& $values['system'] != null) {
            $specification->system = $request->input('system');
        }
        if(isset($values['processor'])&& $values['processor'] != null) {
            $specification->processor = $request->input('processor');
        }
        if(isset($values['screen'])&& $values['screen'] != null) {
            $specification->screen = $request->input('screen');
        }
        if(isset($values['display'])&& $values['display'] != null) {
            $specification->display = $request->input('display');
        }
        if(isset($values['resolution'])&& $values['resolution'] != null) {
            $specification->resolution = $request->input('resolution');
        }
        if(isset($values['camera'])&& $values['camera'] != null) {
            $specification->camera = $request->input('camera');
        }
        if(isset($values['price'])&& $values['price'] != null) {
            $specification->price = $request->input('price');
        }
        if(isset($values['status'])&& $values['status'] != null) {
            $specification->status = $request->input('status');
        }
        $specification->save();

        return redirect()->action('AdminController@adminHome');

    }


    public function deletePhone($id){

        Phone::destroy($id);
        return redirect()->action('AdminController@adminHome');

    }

    public function editPhone($id){

        $phone = Phone::find($id);
        $specification = Specification::find($id);
        return view('admin.editphone', compact('phone', 'specification'));


    }




}
