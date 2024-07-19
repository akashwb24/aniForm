<?php
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('animatedForm');
});

Route::post('processdata', [FormController::class, 'getregister']);