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
use App\supermercados;
Route::get('/', function () {
	$supermercados = supermercados::all();
	return View('welcome', compact('supermercados')); 
    //return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('modifiqued_data', 'HomeController@modifiqued_data')->name('modifiqued_data');
/*participants */
Route::post('registerReceipt', 'registerReceiptController@registerReceipt')->name('registerReceipt');
Route::post('deleted_participants', 'registerReceiptController@deleted_participants')->name('deleted_participants');

