<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenerateController;
use App\Http\Controllers\ProfileController;
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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::get('/generate', [GenerateController::class, 'index'])->name('generateIndex');
Route::post('/generate', [GenerateController::class, 'generateQrCode'])->name('generateQrCode');

Route::get('/profile/{name}', [ProfileController::class, 'index']);