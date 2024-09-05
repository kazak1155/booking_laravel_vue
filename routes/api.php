<?php

use App\Http\Controllers\Hotel\StoreHotelCotroller;
use App\Http\Controllers\Room\ShowRoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hotel\ShowHotelController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('hotels', [ShowHotelController::class, 'snowAllHotel'])->name('showAll.hotel');
Route::get('hotels', [StoreHotelCotroller::class, 'showForm'])->name('showForm.hotel');
Route::get('hotel/{hotel}', [ShowHotelController::class, 'snowOneHotel'])->name('showOne.hotel');

Route::get('room/{room}', [ShowRoomController::class, 'snowOneRoom'])->name('showOne.room');
