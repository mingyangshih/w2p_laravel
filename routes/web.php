<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\homeController;

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


// homepage
Route::get('/','App\Http\Controllers\homeController@getHomeData');
// productdetail
Route::get('/productDetail/{id}','App\Http\Controllers\productDetailController@init');




Route::get('welcome', function(){
    return View('welcome');
});

?>