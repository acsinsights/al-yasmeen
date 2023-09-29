<?php
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\frontend\HomeController;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AllprojectsController;
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


Route::put('/submit', [HomeController::class, 'submit']);


Route::group(['prefix' => 'admin'], function () {

Route::group(['middleware' => 'admin.guest'], function () {
 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');
});
Route::group(['middleware' => 'admin.auth'], function () {

    Route::get('/login', [DashboardController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');




    Route::get('/message/{id}', [DashboardController::class, 'formmessage'])->name('admin.message');
    Route::get('/inbox', [DashboardController::class, 'inbox'])->name('admin.inbox');
    Route::delete('/f-delete/{id}', [DashboardController::class, 'd_form']);
    Route::delete('/all-delete', [DashboardController::class, 'all_d_form']);





    Route::any('/allprojects', [AllprojectsController::class, 'allprojects'])->name('admin.allprojects');

     Route::post('/add-project', [AllprojectsController::class, 'addproject']);
     Route::get('/editproject', [AllprojectsController::class, 'editproject'])->name('admin.editproject');
     Route::get('/add-project', [AllprojectsController::class, 'create'])->name('admin.add-project');
     Route::post('/addproject', [AllprojectsController::class, 'store'])->name('admin.addproject');

     Route::any('/deleteproject/{id}', [AllprojectsController::class, 'destroy']);
     Route::get('/editproject/{id}', [AllprojectsController::class, 'edit']);
     Route::delete('/delete-project-image/{id}', [AllprojectsController::class, 'deletecover']);
     Route::any('/updateproject/{id}', [AllprojectsController::class, 'update']);





    Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
});
require __DIR__.'/auth.php';
