<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\frontend\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/project', [HomeController::class, 'project']);
Route::get('/contact', [HomeController::class, 'contact']);








Route::group(['prefix' => 'admin'], function () {

Route::group(['middleware' => 'admin.guest'], function () {
 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');
});
Route::group(['middleware' => 'admin.auth'], function () {

    Route::get('/login', [DashboardController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
});
require __DIR__.'/auth.php';
