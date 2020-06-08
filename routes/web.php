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
    return view('panel');
});


Route::resource('/user', 'UserController');


Route::get('/tafuta/{kitambulisho}/{simu}', 'UserController@huduma');

Route::resource('/payments', 'PaymentsController');

Route::resource('/products', 'ProductsController');

Route::resource('/locations', 'LocationsController');

Route::resource('/invoices', 'InvoicesController');

Route::resource('/receipts', 'ReceiptsController');

Route::resource('/orders', 'OrdersController');

Route::resource('/customers', 'CustomersController');



