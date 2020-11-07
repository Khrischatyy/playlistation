<?php

namespace App\Http\Controllers;
use App\Artist;
use App\Product;
use Illuminate\Http\Request;
use DB;

class ArtistsController extends Controller
{
    public function index() {
    	return view('artists');
    }

    public function getArtists() {
            $artists = new Artist();
            $artists = Artist::paginate(5);
            return $artists;
    }

    public function getArtist($id) {
	    	$artist = new Artist;
	    	$product = new Product;
	    	$artist = Artist::find($id);
    	return view('artist',['artist'=> $artist, 'product' => $product->where('artist_id', '=', $artist->id)->get()]);
    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $query = $request->get('query');
            if(strlen($query) > 0)
            {
                $data = DB::table('artists')->where('name','like','%'.$query.'%')->get();
            }
            else {
                exit();
            }

            $totalcount = $data->count();
            if($totalcount > 0) {
                foreach($data as $name)
                {
                    $output = '<a class="search-item" href="/artist/'.$name->id.'">'.$name->name.'</a>';

                }
            }

            else {
                $output = '<a class="search-item" href="/">No record</a>';
            }

            $data = ['name' => $output];
            echo json_encode($data);
        }
    }
}
