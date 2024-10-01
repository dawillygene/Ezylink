<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/', function () {
    return view('main.main');
});

Route::get('/shopdetails', function () {
    return view('shops.shopdetails');
});

Route::get('/addshop', function () {
    return view('shops.addshop');
});







Route::get('/shops/create', [ShopController::class, 'create'])->name('shops.create');
Route::post('/shops/store', [ShopController::class, 'store'])->name('shops.store');
Route::get('/shops', [ShopController::class, 'index'])->name('shops.index');



use App\Http\Controllers\BankDetailController;
use App\Http\Controllers\BusinessDetailController;

Route::group(['prefix' => 'business-details'], function () {
    Route::get('/create', [BusinessDetailController::class, 'create'])->name('business-details.create');
    Route::post('/store', [BusinessDetailController::class, 'store'])->name('business-details.store');
    Route::get('/{id}', [BusinessDetailController::class, 'show'])->name('business-details.show');
    Route::get('/{id}/edit', [BusinessDetailController::class, 'edit'])->name('business-details.edit');
    Route::put('/{id}', [BusinessDetailController::class, 'update'])->name('business-details.update');
    Route::delete('/{id}', [BusinessDetailController::class, 'destroy'])->name('business-details.destroy');
});


Route::resource('bank-details', BankDetailController::class)->names([
    'index' => 'bankDetails.index',
    'create' => 'bankDetails.create',
    'store' => 'bankDetails.store',
    'show' => 'bankDetails.show',
    'edit' => 'bankDetails.edit',
    'update' => 'bankDetails.update',
    'destroy' => 'bankDetails.destroy',
]);


