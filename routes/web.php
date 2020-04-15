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

Route::get('/users', function () {
    return view('users');
});

Route::get('/payments', function () {
    return view('payments');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/locations', function () {
    return view('locations');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/receipts', function () {
    return view('receipts');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/customers', function () {
    return view('customers');
});
