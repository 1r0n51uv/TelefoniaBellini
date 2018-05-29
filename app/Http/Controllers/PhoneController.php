<?php

namespace App\Http\Controllers;

use App\Specification;
use Illuminate\Http\Request;
use App\Phone;
use function Symfony\Component\Console\Tests\Command\createClosure;

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

    public function addSpecification(Request $request) {

        $input = $request->all();

        $specification = new Specification();

        $specification['pic1'] = $input['pic1'];
        $specification['pic2'] = $input['pic2'];
        $specification['pic3'] = $input['pic3'];
        $specification['marca'] = $input['marca'];
        $specification['model'] = $input['model'];
        $specification['peso'] = $input['peso'];
        $specification['anno'] = $input['anno'];
        $specification['memory'] = $input['memory'];
        $specification['sistem'] = $input['sistem'];
        $specification['processor'] = $input['processor'];
        $specification['screen'] = $input['screen'];
        $specification['disply'] = $input['display'];
        $specification['resolution'] = $input['resolution'];
        $specification['camera'] = $input['camera'];
        $specification['media'] = $input['media'];
        $specification['autofocus'] = $input['autofocus'];
        $specification['bluetooth'] = $input['bluetooth'];
        $specification['phone_id'] = Phone::phone()->id;

        $specification->save();

        Notification::add('success', '', 'Un nuovo telefono è stato aggiunto');

    }

    public function addPhone(Request $request){

        /*
                    $this->validate($request, [

                        'marca' => 'required',
                        'model' => 'required',
                        'storage' => 'required',
                        'color' => 'required',
                        'price' => 'required',
                        'description' => 'required',
                    ]);
        */

        $values = $request->all();

        $phone = new Phone();


        $phone['brand'] = $values['marca'];


        $phone['model'] = $values['model'];


        $phone['storage'] = $values['storage'];


        $phone['color'] = $values['color'];


        $phone['price'] = $values['price'];


        $phone['pic'] = $values['description'];


        $phone->save();

        return redirect()->action('AdminController@adminHome');

    }



    public function updatePhone(Request $request, $id){


        $values = $request->all();
        var_dump($values);
        $specification = Specification::find($id);


        if(isset($values['marca'])&& $values['marca'] != null) {
            $specification->marca = $request->input('marca');
        }
        if(isset($values['model'])&& $values['model'] != null) {
            $specification->model = $request->input('model');
        }
        if(isset($values['peso'])&& $values['peso'] != null) {
            $specification->peso = $request->input('peso');
        }
        if(isset($values['anno'])&& $values['anno'] != null) {
            $specification->anno = $request->input('anno');
        }
        if(isset($values['memory'])&& $values['memory'] != null) {
            $specification->memory = $request->input('memory');
        }
        if(isset($values['sistem'])&& $values['sistem'] != null) {
            $specification->sistem = $request->input('sistem');
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
        $specification->save();

        /*
                $phone = Phone::find($id);
                $phone -> color = $request->input('color');
                $phone -> price = $request->input('price');
                $phone -> memory = $request->input('description');
                $phone->save();
        */
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
