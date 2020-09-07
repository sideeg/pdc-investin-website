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
Route::post("/contact","homeController@message")->name('contact');
Route::get("/blog","blogController@index")->name('blog');
Route::get("/article/{id}","blogController@blogById")->name('article');
Route::get("/sector/{id}","sectorController@index");
<<<<<<< HEAD
Route::get("/sector/{id}/order","sectorController@showForm");
Route::get("/sector/{id}/order","sectorController@order");

=======
Route::get("/sector/{id}/order","sectorController@showForm")->name('order');
>>>>>>> 56a30245bad175bbd30129cc73abd07c3a4c59e8




