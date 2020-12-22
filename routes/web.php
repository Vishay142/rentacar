<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoController;

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
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/reserveren', function () {
    return view('reservering');
});




Route::resource('admin', App\Http\Controllers\AdminController::class);

Route::resource('autos', App\Http\Controllers\AutoController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
