<?php

use App\Http\Controllers\Citation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InspireController;

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

Route::get('/', [InspireController::class, 'callCommandInspire']);