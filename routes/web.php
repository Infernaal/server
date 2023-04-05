<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\databaseController;
use App\Http\Controllers\dbController;
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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin-login', function () {
    return view('admin-login');
});

Route::get('/catalogues', function () {
    return view('catalogues');
});

Route::get('/admin-panel',[AdminPanelController::class, 'index'])->name('admin-panel.index');
Route::post('/admin-panel',[AdminPanelController::class, 'login'])->name('admin-panel');


