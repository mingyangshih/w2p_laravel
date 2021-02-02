<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutYFPController;
use App\Http\Controllers\servicetermController;
use App\Http\Controllers\privacytermController;
use App\Http\Controllers\serviceContentController;

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
// standard 
Route::get('/standard/{id}','App\Http\Controllers\standardController@init');
// aboutYFP
Route::get('/aboutYFP',[aboutYFPController::class, 'init']);
// service term
Route::get('/serviceterm',[servicetermController::class, 'init']);
Route::get('/privacyterm',[privacytermController::class, 'init']);
Route::prefix('servicecontent')->group(function () {
    Route::get('/', [serviceContentController::class, 'init']);
});

Route::get('welcome', function(){
    return View('welcome');
});

?>