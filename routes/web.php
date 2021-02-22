<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutYFPController;
use App\Http\Controllers\servicetermController;
use App\Http\Controllers\privacytermController;
use App\Http\Controllers\serviceContentController;
use App\Http\Controllers\aboutMemberController;
use App\Http\Controllers\workslayoutController;
use App\Http\Controllers\buyAndTakeController;
use App\Http\Controllers\invoiceAndSaledServiceController;
use App\Http\Controllers\contactusController;

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
    Route::get('/aboutMember',[aboutMemberController::class, 'init']);
    Route::get('/workslayout',[workslayoutController::class, 'init']);
    Route::get('/buyAndTake',[buyAndTakeController::class, 'init']);
    Route::get('/invoiceAndSaledService',[invoiceAndSaledServiceController::class,'init']);
    Route::get('/contactus',[contactusController::class, 'init']);
});

Route::get('welcome', function(){
    return View('welcome');
});

?>