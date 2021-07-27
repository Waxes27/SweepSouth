<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BridgeController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [HomeController::class, 'index']) ->name('home');

Route::get('/login', [LoginController::class, 'index']) -> name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'userLogin']);
Route::post('/logout', [LoginController::class, 'logout']) ->name('logout');

Route::get('/register', [RegisterController::class, 'index']) ->name('register');
Route::post('/register', [RegisterController::class, 'userStore']);

Route::get('/partner', [RegisterController::class, 'partner']) ->name('partner');
Route::post('/partner', [RegisterController::class, 'partnerStore']);

Route::get('/services', [ServicesController::class, 'index'])->name('services')->middleware('auth');
Route::get('/services/create', [ServicesController::class, 'create'])->name('create_service')->middleware('auth');
Route::post('/services/create', [ServicesController::class, 'create_service']);



Route::get('/dashboard', [DashboardController::class, 'index']) ->name('dashboard')->middleware('auth');

Route::get('/registerbridge', [BridgeController::class, 'partnerUser']) ->name('partnerUser');

#SCRIPTS HERE
Route::get('/services/type/create', [ServicesController::class, 'create_service_type'])->name('create_service_type')->middleware('auth');

