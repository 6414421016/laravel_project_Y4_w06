<?php

use App\Http\Controllers\FacultyAPIController;
use App\Http\Controllers\ProgramAPIController;
use App\Http\Controllers\StudentAPIController;
use App\Http\Controllers\VaccineAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::resource('/students', StudentAPIController::class);
Route::resource('/faculty', FacultyAPIController::class);
Route::resource('/programs', ProgramAPIController::class);
Route::resource('/vaccines', VaccineAPIController::class);
Route::resource('/vaccinerecord', VaccineAPIController::class);