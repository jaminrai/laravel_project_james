<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function aboutus(){
        return view("test/aboutus");
    }

    public function condition(){
        $name="Jamin rai";
        $users=["ram","sita"];
        return view("test.condition",compact("name","users"));
    }
}
