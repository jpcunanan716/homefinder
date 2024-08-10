<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HouseController::class, 'home'])->name('index');
Route::get('/listing', [HouseController::class, 'listing'])->name('createlisting');
Route::post('/home', [HouseController::class, 'save'])->name('save');