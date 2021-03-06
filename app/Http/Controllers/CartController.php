<?php

namespace App\Http\Controllers;

use App\Http\Controllers\OrderController;
use App\ShipmentDetails;
use App\Specification;
use Cart;
use Illuminate\Support\Facades\Auth;
use Notification;
use App\Phone;
use Illuminate\Http\Request;


class CartController extends Controller
{
    

    public function addToCart($id) {
        $item = Specification::whereId($id)->first();

        Cart::add($item->id, $item, 1, $item->price);

        Notification::add('success', '', 'Elemento aggiunto al carrello');

        return redirect()->action('PhoneController@index');
    }

    public function showCart() {
        return view('cart');
    }

    public function deleteCartItem($id) {

        Cart::remove($id);
        Notification::add('error', '', 'Elemento rimosso dal carrello');
        return redirect()->action('CartController@showCart');

    }

    public function destroyCart() {
        return view('components.payTransition');
    }

    public function returnView() {
        return view('shipmentDetails');
    }

    public static function makeOrder() {
        $products = "";

        foreach(Cart::content() as $item ) {
            $products .= $item->id . "-";
            self::removeFromStock($item->id);
        }

        $shipment = ShipmentDetails::whereUserId(Auth::user()->id)->first();

        if (session()->get('dest') == 'spedizione') {
            OrderController::storeOrder(Auth::user(), $shipment, $products, intval(str_replace(",","",Cart::subtotal())) + 10, session()->get('dest'));
        } else {
            OrderController::storeOrder(Auth::user(), $shipment, $products, Cart::subtotal(), session()->get('dest'));
        }



        Notification::add('success', '', 'Ordine Completato, accedi al tuo profilo per visualizzarne lo stato');

        Cart::destroy();

        //MailController::mailOrder(Auth::user()->email, $order);

        return redirect()->action('HomeController@index');
    }

    public static function removeFromStock($id) {

        $device = Specification::whereId($id)->first();
        $device['qty'] -= 1;
        $device->save();


    }
   

}
