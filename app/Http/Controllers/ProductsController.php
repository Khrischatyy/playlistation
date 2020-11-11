<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index () {

    	return view('products');
    }

        public function getProducts () {
                $products = new Product();
                $products = Product::paginate(12);
            return $products;
        }

    public function getProduct($id) {
	    	$product = new Product;
	    	$product = Product::find($id);
    	return view ('product', ['product' => $product]);
    }
}
