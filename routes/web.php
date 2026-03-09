<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\YayasanController;
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
    return redirect('/login');
});

Route::middleware(['auth'])->prefix('dashboard')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('yayasan', YayasanController::class);
    Route::resource('sekolah', SekolahController::class);

});


require __DIR__.'/auth.php';
