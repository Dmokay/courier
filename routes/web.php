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
    return view('user.users');
});

Route::get('/payments', function () {
    return view('payment.payments');
});

Route::get('/products', function () {
    return view('product.products');
});

Route::get('/locations', function () {
    return view('location.locations');
});

Route::get('/invoice', function () {
    return view('invoice.invoice');
});

Route::get('/receipts', function () {
    return view('receipt.receipts');
});

Route::get('/orders', function () {
    return view('order.orders');
});

Route::get('/customers', function () {
    return view('customer.customers');
});
