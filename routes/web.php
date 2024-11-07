<?php

use App\Http\Controllers\pembeli\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::resource('login', LoginController::class);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/auth/a8Bc7xZ2Yka8Bc7xZ2Ykkbc', [LoginController::class, 'login'])->name('login');
Route::get('/auth/a3ac9xL3Yka3ac9xL4Ykkbc', [LoginController::class, 'logout'])->name('logout');

