<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        
        $title = "Sydhul : Home Page";
        return view("index", compact('title'));
    }

    public function blog(){

        $title = "Sydhul : Blog Page";
        return view("blog", compact('title'));
    }
}
