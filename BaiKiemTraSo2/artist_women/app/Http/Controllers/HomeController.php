<?php

namespace App\Http\Controllers;

use App\Models\Artwork;

class HomeController
{
    public function getAllartworks()
    {
        $artworks = Artwork::orderBy('id','desc')->get();
//        $artworks = Author::all();
        return view('home',compact('artworks'));
    }

}
