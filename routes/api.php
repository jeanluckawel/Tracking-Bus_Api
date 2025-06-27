<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/users', function () {
    return ['hello'];
});



Route::get('/employees', [\App\Http\Controllers\EmployeeController::class, 'index']);
Route::get('/employees/{id}', [\App\Http\Controllers\EmployeeController::class, 'show']);

