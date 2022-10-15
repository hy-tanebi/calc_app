<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calcs/{val1}/addition/{val2}', [App\Http\Controllers\MessageController::class, 'add']);
Route::get('/calcs/{val1}/division/{val2}', [App\Http\Controllers\MessageController::class, 'divi']);
Route::get('/calcs/{val1}/multiplication/{val2}', [App\Http\Controllers\MessageController::class, 'multi']);
Route::get('/calcs/{val1}/subtraction/{val2}', [App\Http\Controllers\MessageController::class, 'sub']);
