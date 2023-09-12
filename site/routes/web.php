<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\TermsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'HomeIndex']);
Route::post('/ContactSend',[HomeController::class, 'ContactSend']);



Route::get('/Policy', [PolicyController::class, 'PolicyPage']);
Route::get('/Terms', [TermsController::class, 'TermPage']);
