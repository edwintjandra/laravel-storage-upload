<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ImageController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/image/create',[ImageController::class,'createImage'])->name('image.create');
Route::post('/image',[ImageController::class,'storeImage'])->name('image.store');
Route::get('/image',[ImageController::class,'viewImage'])->name('image.index');
