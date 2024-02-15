<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\Admin\FoodController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RatingController;
use Illuminate\Support\Facades\Auth;
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


// Route for User
Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/contact', [HomeController::class, 'Contact'])->name('contact');
Route::get('/costumer/logout', [HomeController::class, 'CostumerLogout'])->name('costumer.logout');
Route::get('/contact', [HomeController::class, 'Contact'])->name('contact');
Route::get('/reservation', [HomeController::class, 'Reservation'])->name('reservation');
Route::get('/about', [HomeController::class, 'About'])->name('about');
Route::get('/detail', [HomeController::class, 'Detail'])->name('detail');

// 
Route::get('/review/store', [RatingController::class, 'store'])->name('review.store');


// if user or agent want to acces admin dashboard
Route::get('/bwah', [HomeController::class, 'Bwah'])->name('bwah');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route Dashboard Admin

Route::middleware(['auth', 'roles_name:Admin'])->group(function(){

    Route::get('/admin', [AdminController::class, 'AdminIndex'])->name('admin.index');
    Route::get('/admin/facility', [AdminController::class, 'AdminFacility'])->name('admin.facility');
    Route::get('/admin/food', [AdminController::class, 'AdminFood'])->name('admin.food');
    Route::get('/admin/report', [AdminController::class, 'AdminReport'])->name('admin.report');
    Route::get('/admin/user', [AdminController::class, 'AdminUser'])->name('admin.user');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

});

// Route CRUD Facility for Admin

Route::middleware(['auth', 'roles_name:Admin'])->group(function(){

    Route::get('/add/facility', [FacilityController::class, 'AddFacility'])->name('add.facility');
    Route::post('/store/facility', [FacilityController::class, 'StoreFacility'])->name('store.facility');
    Route::get('/edit/facility/{id}', [FacilityController::class, 'EditFacility'])->name('edit.facility');
    Route::get('/delete/facility/{id}', [FacilityController::class, 'DeleteFacility'])->name('delete.facility');
    Route::post('/update/facility', [FacilityController::class, 'UpdateFacility'])->name('update.facility');

});

// Route CRUD Food for Admin

Route::middleware(['auth', 'roles_name:Admin'])->group(function(){

    Route::get('/add/food', [FoodController::class, 'AddFood'])->name('add.food');
    Route::post('/store/food', [FoodController::class, 'StoreFood'])->name('store.food');
    Route::get('/edit/food/{id}', [FoodController::class, 'EditFood'])->name('edit.food');
    Route::get('/delete/food/{id}', [FoodController::class, 'DeleteFood'])->name('delete.food');
    Route::post('/update/food', [FoodController::class, 'UpdateFood'])->name('update.food');

});



require __DIR__.'/auth.php';

Auth::routes();

