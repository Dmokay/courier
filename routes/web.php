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

Route::get('/users', 'UserController@index')->name('user.index');

Route::get('/users/create', 'UserController@create')->name('user.create');

Route::post('/users/create/save', 'UserController@store')->name('user.save');

Route::get('/payments', 'PaymentController@index')->name('payment.index');

Route::get('/payments/create', 'PaymentController@create')->name('payment.create');

Route::post('/payments/create/save', 'PaymentController@store')->name('payment.save');

Route::get('/products', 'ProductController@index')->name('product.index');

Route::get('/products/create', 'ProductController@create')->name('product.create');

Route::post('/products/create/save', 'ProductController@store')->name('product.save');

Route::get('/locations', 'LocationController@index')->name('location.index');

Route::get('/locations/create', 'LocationController@create')->name('location.create');

Route::post('/locations/create/save', 'LocationController@store')->name('location.save');

Route::get('/invoices', 'InvoiceController@index')->name('invoice.index');

Route::get('/invoices/create', 'InvoiceController@create')->name('invoice.create');

Route::post('/invoices/create/save', 'InvoiceController@store')->name('invoice.save');

Route::get('/receipts', 'ReceiptController@index')->name('receipt.index');

Route::get('/receipts/create', 'ReceiptController@create')->name('receipt.create');

Route::post('/receipts/create/save', 'ReceiptController@store')->name('receipt.save');

Route::get('/orders', 'OrderController@index')->name('order.index');

Route::get('/orders/create', 'OrderController@create')->name('order.create');

Route::post('/orders/create/save', 'OrderController@store')->name('order.save');

Route::get('/customers', 'CustomerController@index')->name('customer.index');

Route::get('/customers/create', 'CustomerController@create')->name('customer.create');

Route::post('/customers/create/save', 'CustomerController@store')->name('customer.save');

// Route::get('/display-customer', 'CustomerController@show')->name('customer.show');


