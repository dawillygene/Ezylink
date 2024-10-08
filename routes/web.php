<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ShopDetailsController;



Route::get('/', function () {
    return view('main.main');
});

// Route::get('/shopdetails', function () {
//     return view('shops.shopdetails');
// });

Route::get('/addshop', function () {
    return view('shops.addshop');
});

Route::resource('ShopDetails', ShopDetailsController::class);

Route::resource('customers', CustomerController::class);







