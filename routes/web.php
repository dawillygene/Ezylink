<?php

use App\Http\Controllers\ShopDetailsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('main.main');
});

Route::get('/shopdetails', function () {
    return view('shops.shopdetails');
});

Route::get('/addshop', function () {
    return view('shops.addshop');
});

Route::resource('ShopDetails', ShopDetailsController::class);







