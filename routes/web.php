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


Route::get("/","homeController@index")->name('home');
Route::post("/contact","homeController@message")->name('contact');

Route::get("/blog","blogController@index")->name('blog');
Route::get("/article/{id}","blogController@blogById")->name('article');

Route::get("/sector/{id}","sectorController@index")->name('sector');
Route::get("/sector/{id}/order","sectorController@showForm")->name('order');
Route::post("/sector/{id}/order","sectorController@order")->name('shares_order');





