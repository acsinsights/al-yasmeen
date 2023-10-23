<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\frontend\PageController;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FormController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\IntegrationController;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
use App\User;
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

Route::name('frontend.')->group(function () {

    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::post('/enquiry/store', [PageController::class, 'enquiry_store'])->name('enquiry.store');

    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/services', [PageController::class, 'services'])->name('services');

    Route::get('/projects', [PageController::class, 'project'])->name('projects');

    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::post('/contact/store', [PageController::class, 'contact_store'])->name('contact.store');
});



Route::group(['prefix' => 'admin'], function () {
    Route::name('admin.')->group(function () {

        Route::group(['middleware' => 'admin.auth'], function () {

            Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

            // contact form
            Route::get('/message', [FormController::class, 'message_index'])->name('message.index');
            Route::get('/message/destroy/{id}', [FormController::class, 'message_destroy'])->name('message.destroy');
            Route::post('/message/export', [FormController::class, 'message_export'])->name('message.export');

            // enquiry form
            Route::get('/enquiry', [FormController::class, 'enquiry_index'])->name('enquiry.index');
            Route::get('/enquiry/destroy/{id}', [FormController::class, 'enquiry_destroy'])->name('enquiry.destroy');
            Route::post('/enquiry/export', [FormController::class, 'enquiry_export'])->name('enquiry.export');


            // projects
            Route::name('project.')->group(function () {
                Route::get('/projects', [ProjectController::class, 'index'])->name('index');
                Route::get('/projects/show/{id}', [ProjectController::class, 'show'])->name('show');
                Route::get('/projects/create', [ProjectController::class, 'create'])->name('create');
                Route::post('/projects/store', [ProjectController::class, 'store'])->name('store');
                Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('edit');
                Route::post('/projects/update/{id}', [ProjectController::class, 'update'])->name('update');
                Route::get('/projects/destroy/{id}', [ProjectController::class, 'destroy'])->name('destroy');

                Route::get('/projects/{project_id}/image/create', [ProjectController::class, 'create_image'])->name('image.create');
                Route::post('/projects/{project_id}/image/store', [ProjectController::class, 'store_image'])->name('image.store');
                Route::get('/projects/{project_id}/image/destroy/{image_id}', [ProjectController::class, 'destroy_image'])->name('image.destroy');
            });





            Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
            // Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');





            Route::get('/alltestimonial', [TestimonialController::class, 'index'])->name('alltestimonial');
            Route::get('/addtestimonial', [TestimonialController::class, 'create'])->name('addtestimonial');
            Route::post('/add-testimonial', [TestimonialController::class, 'store'])->name('add-testimonial');



            Route::get('/deletetestimonial/{id}', [TestimonialController::class, 'destroy'])->name('deletetestimonial');
            Route::get('/edittestimonial/{id}', [TestimonialController::class, 'edit']);
            Route::delete('/delete-testimonial-image/{id}', [TestimonialController::class, 'deletecover']);
            Route::any('/updatetestimonial/{id}', [TestimonialController::class, 'update']);

            // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            //  Route::patch('/tracking', [ProfileController::class, 'tracking'])->name('admin.integration.tracking');
            //  Route::patch('/widgets', [ProfileController::class, 'widgets'])->name('admin.integration.widgets');
            // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
    });
});
require __DIR__ . '/auth.php';
