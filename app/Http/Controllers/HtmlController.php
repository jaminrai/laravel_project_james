<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function home(){
        return view("html.home");

    }

    public function about(){
        return view("html.about");
    }

    public function portfolio(){
        return view("html.portfolio");
    }

    public function features(){
        return view("html.features");
        
    }

    public function contact(){
        return view("html.contact");
        
    }
}
