<?php
/**
 * Created by PhpStorm.
 * User: Mirko Aliberti
 * Date: 26/06/2018
 * Time: 13:22
 */

namespace App\Http\Controllers;

use \Input as Input;

class UploadController extends Controller {

    public function upload(){

        if(Input::hasFile('file')){

            echo 'Uploaded';
            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());
            echo '<img src"uploads/' . $file->getClientOriginalName() . '" />';
        }

    }

    public function uploadView(){
        return view('upload');
    }

}








