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

Route::resource('/payments', 'PaymentController');

Route::resource('/product', 'ProductController');

Route::resource('/location', 'LocationController');

Route::resource('/invoice', 'InvoiceController');

Route::resource('/receipt', 'ReceiptController');

Route::resource('/order', 'OrderController');

Route::resource('/customers', 'CustomersController');


