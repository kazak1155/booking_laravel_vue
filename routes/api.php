<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hotel\ShowHotelController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('hotels', [ShowHotelController::class, 'snowAllHotel'])->name('showAll.hotel');
Route::get('hotel/{hotel}', [ShowHotelController::class, 'snowOneHotel'])->name('showOne.hotel');
