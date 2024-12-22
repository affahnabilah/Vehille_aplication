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

Route::get('/', function () {
    return redirect()->route('welcome'); // Mengarahkan ke rute welcome
});
Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');


// Rute login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Rute dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Rute mobil
Route::resource('/car', CarController::class)->middleware('auth');
Route::get('/car/{id}', [CarController::class, 'show'])->name('car.detail')->middleware('auth');
Route::post('/car/update/{id}', [CarController::class, 'update']);
Route::get('/print/{id}', [CarController::class, 'print'])->name('car.print');

// Route::get('/car/detail', [CarController::class, 'showDetail'])->name('car.show')->middleware('auth');