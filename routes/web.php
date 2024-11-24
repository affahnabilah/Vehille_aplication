<?php

use App\Http\Controllers\{AuthController, StartController, DashboardController, CarController, WelcomeController};
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
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');

// Mengarahkan ke rute welcome saat mengakses root URL
Route::get('/', function () {
    return redirect()->route('welcome'); // Mengarahkan ke rute welcome
});

// Rute login
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Rute dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


// Rute mobil
Route::resource('/car', CarController::class)->middleware('auth');
Route::get('/print', [CarController::class, 'printCar'])->middleware('auth');
