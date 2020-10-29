<?php

namespace App\Http\Controllers;
use App\Artist;
use App\Product;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function index() {
	    	$artists = new Artist();
	    	$artists = Artist::all();
    	return view('artists',['artists'=>$artists]);
    }

    public function getArtist($id) {
	    	$artist = new Artist;
	    	$product = new Product;
	    	$artist = Artist::find($id);
    	return view('artist',['artist'=> $artist, 'product' => $product->where('artist_id', '=', $artist->id)->get()]);
    }
}
