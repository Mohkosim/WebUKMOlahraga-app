<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
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
    return view('ukm');
});

//Tampilan view
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('logins.login');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboards.dashboard');
Route::get('/divisi', [DashboardController::class, 'divisi'])->name('divisi');
Route::get('/jadwal_latihan', [DashboardController::class, 'jadwal_latihan'])->name('jadwal_latihan');
