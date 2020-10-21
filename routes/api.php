<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ajax routes
Route::get('properties', 'ApiController@properties');
Route::get('agreement-info', 'ApiController@agreementInfo');
Route::get('payment-status', 'ApiController@paymentMonthStatus');
Route::get('balance', 'ApiController@walletBalance');
Route::get('loan-info', 'ApiController@loanInfo');
Route::get('payment-info', 'ApiController@paymentInfo');
