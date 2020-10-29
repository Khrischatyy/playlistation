<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index () {
	    	$products = new Product();
	    	$products = Product::all();
    	return view ('products',['products' => $products]);
    }

    public function getProduct($id) {
	    	$product = new Product;
	    	$product = Product::find($id);
    	return view ('product', ['product' => $product]);
    }
}
