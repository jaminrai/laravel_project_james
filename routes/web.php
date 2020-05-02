<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

 Route::get("home","HtmlController@home");
 Route::get("about","HtmlController@about");
 Route::get("features","HtmlController@features");
 Route::get("portfolio","HtmlController@portfolio");
 Route::get("aboutus","HtmlController@about");
 Route::get("contact","HtmlController@contact");
 Route::get("condition","TestController@condition");
ROute::get("call","HomeController@call");

/*Route::get("call",function(){
    return view("call");
});*/

// Route::get("about","TestController@aboutus");

// Route::get("services","HomeController@services");

// Route::get("team","HomeController@team");


