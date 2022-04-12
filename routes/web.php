<?php

use Illuminate\Support\Facades\Route;

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


// Route for demo page
//here id is optional perameter , Route will work perfectly even if id is not provided
Route::get('/demo/{name}/{id?}', function ($name,$id=null) {
    
    // echo $name;
    // echo $id;
    $data=compact("name","id");
    return view("demo")->with($data);
});

//testing route

Route::any('/test', function () {
    return view('test');
});