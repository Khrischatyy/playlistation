<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;
use App\Cart;
class ShoppingBagController extends Controller
{
    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id); 

        $request->session()->put('cart',$cart);
        return redirect()->route('products');
    }
    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items) > 0) {
            Session::put('cart',$cart); 
        }
        else {
            Session::forget('cart');
        }
        return redirect()->route('shopping-bag');
    }
    public function getPlusByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->plusByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('shopping-bag');
    }
    public function getShoppingCart () {
        if(Session::has('cart')) {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            return view('shopping-bag',['products'=> $cart->items,'totalPrice'=>$cart->totalPrice]);
        }
        return view('shopping-bag',['products'=>null]);
        
    }
    public function getRemoveAll($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeAll($id);
        if(count($cart->items) > 0) {
            Session::put('cart',$cart); 
        }
        else {
            Session::forget('cart');
        }
        return redirect()->route('shopping-bag');
    }
}
