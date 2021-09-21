<?php

use JfBiswajit\SSLCommerz\Http\Controllers\SslCommerzPaymentController;

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
    return view('welcome');
});

Route::post('/get-payment-info', [SslCommerzPaymentController::class, 'getPaymentInfo']);
Route::get('/payment', [SslCommerzPaymentController::class, 'payment']);
Route::post('/payment-successfull', [SslCommerzPaymentController::class, 'paymentSuccessfull']);

// Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);

// Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

// Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
// Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

// Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
