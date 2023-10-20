<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function getAllAuthors()
    {
        $authors = Author::orderBy('id','desc')->get();
//        $authors = Author::all();
        return view('index',compact('authors'));
    }

}
