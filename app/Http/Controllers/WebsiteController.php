<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view("index", ["title" => "Sydhul : Home Page"]);
    }

    public function blog(){
        return view("blog", ["title" => "Sydhul : Blog Page"]);
    }
}
