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
    return view('pages/index');
});
Route::get('/shop', function () {
    return view('pages/shop');
});
Route::get('/login', function () {
    return view('pages/login');
});
Route::get('/register', function () {
    return view('pages/register');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
Route::get('/register2', function () {
    return view('pages/register2');
});
Route::get('/register3', function () {
    return view('pages/register3');
});
Route::get('/register4', function () {
    return view('pages/register4');
});
Route::get('/reussi', function () {
    return view('pages/reussi');
});
Route::get('/echec', function () {
    return view('pages/echec');
});

Route::get('/error', function () {
    return view('pages/error');
});



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
