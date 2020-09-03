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

//Route::get('/', function () {
 //   return view('introController');
//});

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});


Route::get("/","homeController@index");
Route::get("/blogs","blogController@index");
Route::get("/blogs/{id}","blogController@blogById");
Route::get("/sectors/{id}","sectorController@index");
Route::get("/sectors/{id}/order","sectorController@showForm");



