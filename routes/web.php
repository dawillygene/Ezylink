<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ShopDetailsController;

use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/shopdetails', function () {
//     return view('shops.shopdetails');
// });

Route::get('/addshop', function () {
    return view('shops.addshop');
});

Route::resource('ShopDetails', ShopDetailsController::class);

Route::resource('customers', CustomerController::class);

Route::resource('products', ProductController::class);




