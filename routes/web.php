<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\frontend\HomeController;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\TestimonialController;
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
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/projects', [HomeController::class, 'project']);

Route::put('/submit', [HomeController::class, 'submit']);
Route::put('/enquirysubmit', [HomeController::class, 'enquirysubmit']);


Route::group(['prefix' => 'admin'], function () {

    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');
    });
    Route::group(['middleware' => 'admin.auth'], function () {

        Route::redirect('/', '/admin/dashboard', 301)->name('admin.index');

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


        // contact form
        Route::get('/message/{id}', [DashboardController::class, 'formmessage'])->name('admin.message');
        Route::get('/inbox', [DashboardController::class, 'inbox'])->name('admin.inbox');
        Route::delete('/f-delete/{id}', [DashboardController::class, 'd_form']);
        Route::delete('/all-delete', [DashboardController::class, 'all_d_form']);


        // enquiry form
        Route::get('/enquiryinbox', [DashboardController::class, 'enquiryinbox'])->name('admin.enquiryinbox');
        Route::delete('/enquiry-delete/{id}', [DashboardController::class, 'enquiry_form']);
        Route::delete('/all-delete', [DashboardController::class, 'all_d_form']);




        Route::get('/projects', [ProjectController::class, 'index'])->name('admin.project.index');
        Route::get('/projects/show/{id}', [ProjectController::class, 'show'])->name('admin.project.show');
        Route::get('/projects/create', [ProjectController::class, 'create'])->name('admin.project.create');
        Route::post('/projects/store', [ProjectController::class, 'store'])->name('admin.project.store');
        Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('admin.project.edit');
        Route::post('/projects/update/{id}', [ProjectController::class, 'update'])->name('admin.project.update');
        Route::get('/projects/destroy/{id}', [ProjectController::class, 'destroy'])->name('admin.project.destroy');

        Route::get('/projects/{project_id}/image/create', [ProjectController::class, 'create_image'])->name('admin.project.image.create');
        Route::post('/projects/{project_id}/image/store', [ProjectController::class, 'store_image'])->name('admin.project.image.store');
        Route::get('/projects/{project_id}/image/destroy/{image_id}', [ProjectController::class, 'destroy_image'])->name('admin.project.image.destroy');



        Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
        Route::put('/update-profile/{id}', [DashboardController::class, 'update']);


        Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');

        Route::get('/alltestimonial', [TestimonialController::class, 'index'])->name('admin.alltestimonial');
        Route::get('/addtestimonial', [TestimonialController::class, 'create'])->name('admin.addtestimonial');
        Route::post('/add-testimonial', [TestimonialController::class, 'store'])->name('admin.add-testimonial');


        Route::get('/deletetestimonial/{id}', [TestimonialController::class, 'destroy'])->name('admin.deletetestimonial');
        Route::get('/edittestimonial/{id}', [TestimonialController::class, 'edit']);
        Route::delete('/delete-testimonial-image/{id}', [TestimonialController::class, 'deletecover']);
        Route::any('/updatetestimonial/{id}', [TestimonialController::class, 'update']);



        // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
         Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});
require __DIR__ . '/auth.php';
