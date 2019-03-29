<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{

    public function editSlider() {
        $slider = Slider::all()->first();
        return view('admin.editSlider', compact('slider'));
    }

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
        $request = request()->all();
        $slider = Slider::all()->first();

        switch ($request['picvalue']) {
            case 1:
                unlink(substr($slider->pic1, 3));
                $slider->pic1 = '../assets/image/slider/'.$images[0];
                break;
            case 2:
                unlink(substr($slider->pic2, 3));
                $slider->pic2 = '../assets/image/slider/'.$images[0];
                break;
            case 3:
                unlink(substr($slider->pic3, 3));
                $slider->pic3 = '../assets/image/slider/'.$images[0];
                break;
            default:
                break;
        }
        $slider->save();
        return back();
    }


}
