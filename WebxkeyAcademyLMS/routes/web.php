<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;

use Illuminate\Support\Facades\Route;
// use app\Http\Controller\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

// dashboard
Route::get('/', [DashboardController::class, 'Dashboard']) ->name('Dashboard.StDashboard');


// login
Route::get('/StudentLogin', [LoginController::class, 'Login']) ->name('loging.StLogin');

//landingPage
Route::get('/Home', [LandingPageController::class, 'Home']);

