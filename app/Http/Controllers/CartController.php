<?php

namespace App\Http\Controllers;

use Cart;
use Notification;
use App\Phone;
use Illuminate\Http\Request;

class CartController extends Controller
{
    

    public function addToCart($id) {
        $item = Phone::whereId($id)->first();

        //var_dump($item);

        Cart::add($item->id, $item->model, 1, $item->price);

        //echo "addedd";

        Notification::add('success', '', 'Elemento aggiunto al carrello');

        return redirect()->action('PhoneController@index');
    }

    public function showCart() {
        return view('cart');
    }

    public function deleteCartItem($id) {
        
        //echo $id;
        Cart::remove($id);
        Notification::add('error', '', 'Elemento rimosso dal carrello');
        return redirect()->action('CartController@showCart');

    }

    public function destroyCart() {
        Cart::destroy();
        return view('components.payTransition');
    }

    public function returnView() {
        return view('shipmentDetails');
    }

   

}
