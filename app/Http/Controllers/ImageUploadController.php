<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class ImageUploadController extends Controller
{

    public function imageUploadPost() {
        request()->validate([
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $images=array();
        if($files=request()->file('image')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move(public_path('assets/image/slider'), $name);
                $images[]=$name;
            }
        }

        //return back()->with('success','You have successfully upload image.');
    }



}
