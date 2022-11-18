<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Backend;
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

Route::get('/',[Frontend\HomeController::class, 'index'])->name('home');
// Route::get('/dashboard', [Backend\DashboardController::class, 'index'])->name('dashboard');
Route::get('/login', [Auth\LoginController::class, 'index'])->name('login');
Route::post('/login', [Auth\LoginController::class, 'store']);
Route::put('/logout', [Auth\LogoutController::class, 'destroy'])->name('logout');
Route::group([ 'middleware' => ['auth'], 'prefix' => 'backend', 'as' => 'backend.'], function () {
    Route::get('/dashboard', [Backend\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile/{tab?}', [Backend\ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile/{user}/update', [Backend\ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/{id}/password', [Backend\PasswordChangeController::class, 'update'])->name('change.password');
    Route::get('/settings/{tab?}', [Backend\SettingsController::class, 'index'])->name('settings.index');
    Route::put('/settings/update', [Backend\SettingsController::class, 'update'])->name('settings.update');
});