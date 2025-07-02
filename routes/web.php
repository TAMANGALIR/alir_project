<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function(){
    return view("about");
});

Route::get("/companies", function(){
    return view("company.index");
});

Route::get("/company/create", function(){
    return view("company.create");
});
Route::post("/company/store", function(Request $request){
    return $request;
});


