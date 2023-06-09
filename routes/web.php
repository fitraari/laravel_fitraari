<?php

use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PatientController;
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

Route::get('/login', function () {
    return view('login', [
        'title' => 'Login'
    ]);
});

Route::get('/register', function () {
    return view('register', [
        'title' => 'Register'
    ]);
});

Route::get('/', [HospitalController::class, 'index']);

Route::get('/patient', [PatientController::class, 'index']);
