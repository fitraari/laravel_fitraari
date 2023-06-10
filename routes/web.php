<?php

use App\Http\Controllers\DashboardHospitalController;
use App\Http\Controllers\DashboardPatientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', fn () => view('dashboard.index', ['title' => 'Dashboard']))->middleware('auth');
Route::resource('/dashboard/hospital', DashboardHospitalController::class)->middleware('auth');
Route::resource('/dashboard/patient', DashboardPatientController::class)->middleware('auth');
