<?php

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


Route::group(['prefix' => 'v1', 'namespace' => 'Api\v1'], function () {
    Route::post('register', 'AuthController@register')->name('register');
    Route::post('login', 'AuthController@login')->name('login');
    Route::get('pizza', 'PizzaController@index')->name('pizza');
    Route::post('order', 'OrderController@store')->name('order');
    Route::resource('cart', 'CartController');

    Route::middleware('VerifyJWTToken')->group(function () {
        Route::post('logout', 'AuthController@logout')->name('logout');
        Route::get('orders', 'OrderController@index')->name('orders');
    });
});
