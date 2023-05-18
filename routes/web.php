<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\OurServicesController;

// admin namespace
use App\Http\Controllers\Admin\DashboardController;

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


Auth::routes();

Route::get('/', function () {
    return view('index');
});

// pages route
Route::get('/about-us', [AboutUsController::class, 'index']);

Route::get('/our-services', [OurServicesController::class, 'index']);

Route::get('/contact-us', [ContactUsController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin route

Route::prefix('/admin')->middleware(['auth', 'isAdmin'])->group(
    function () {
        Route::get('dashboard', [DashboardController::class, 'index']);
    }
);