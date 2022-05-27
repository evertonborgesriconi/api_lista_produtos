<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/getProducts', 'App\Http\Controllers\ProductsController@index');
Route::delete('/deleteProduct/{id}', 'App\Http\Controllers\ProductsController@destroy');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
