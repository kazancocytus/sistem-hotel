<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\FacilityController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomeController;

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

Route::get('/customer', [HomeController::class, 'Home'])->name('home'); //Home Page
Route::get('/costumer/logout', [HomeController::class, 'CostumerLogout'])->name('costumer.logout');
Route::get('/contact', function () {
    return view('contactpage');
});//Contact Page

// Route::middleware(['auth', 'roles_name::Admin'])->group(function(){
//     Route::get('/admin', [AdminController::class, 'AdminIndex'])->name('admin.index_admin');
// });


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

Route::middleware(['auth', 'roles_name:Admin'])->group(function(){

    Route::get('/admin', [AdminController::class, 'AdminIndex'])->name('admin.index');
    Route::get('/admin/facility', [AdminController::class, 'AdminFacility'])->name('admin.facility');
    Route::get('/admin/food', [AdminController::class, 'AdminFood'])->name('admin.food');
    Route::get('/admin/report', [AdminController::class, 'AdminReport'])->name('admin.report');
    Route::get('/admin/user', [AdminController::class, 'AdminUser'])->name('admin.user');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

});

Route::middleware([])->group(function(){

    Route::get('/add/facility', [FacilityController::class, 'AddFacility'])->name('add.facility');
    Route::post('/store/facility', [FacilityController::class, 'StoreFacility'])->name('store.facility');
    
});



require __DIR__.'/auth.php';

Auth::routes();

