<?php

//use App\Http\Controllers\FormController;
use App\Http\Controllers\empController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('animatedForm');
// });
// Route::post('processdata', [FormController::class, 'getregister']);

Route::view('dform', 'empForm');
Route::post('pform', [empController::class, 'setdata']);