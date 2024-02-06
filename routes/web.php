<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
Route::get('/staff',[HomeController::class, 'index']);

Route::get('/reg', function () {
    return view('staff/reg');
});

Route::get('/log', function () {
    return view('staff/log');
});

Route::get('/payment', function () {
    return view('staff/payment');
});


Route::get('/detail', function () {
    return view('staff/detail');
});


Route::get('/info', function () {
    return view('staff/info');
});

Route::get('/reservasi', function () {
    return view('staff/reservasi');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
