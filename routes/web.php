<?php

use Illuminate\Support\Facades\Route;


Route::get('/{page?}', function () {
    return view('welcome');
})->where('page', '[\/\w\.-]*');
