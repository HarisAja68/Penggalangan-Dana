<?php

use App\Http\Controllers\{
    CampaignController,
    DashboardController,
    CategoryController,
};
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified', 'role:admin,donatur'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware(['role:admin'])->group(function () {
        Route::resource('/category', CategoryController::class);
        Route::resource('/campaign', CampaignController::class)->except('create', 'edit');
    });

    Route::middleware(['role:donatur'])->group(function () {
        //
    });
});
