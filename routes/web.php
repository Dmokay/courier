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

Route::get('/newpayment', function () {
    return view('payment.new_payment');
});

Route::get('/products', function () {
    return view('product.products');
});

Route::get('/newproduct', function () {
    return view('product.new_product');
});

Route::get('/locations', function () {
    return view('location.locations');
});

Route::get('/newlocation', function () {
    return view('location.new_location');
});

Route::get('/invoice', function () {
    return view('invoice.invoice');
});

Route::get('/newinvoice', function () {
    return view('invoice.new_invoice');
});

Route::get('/receipts', function () {
    return view('receipt.receipts');
});

Route::get('/newreceipt', function () {
    return view('receipt.new_receipt');
});

Route::get('/orders', function () {
    return view('order.orders');
});

Route::get('/neworder', function () {
    return view('order.new_order');
});

Route::get('/customers', function () {
    return view('customer.customers');
});

Route::get('/newcustomer', function () {
    return view('customer.new_customer');
});
