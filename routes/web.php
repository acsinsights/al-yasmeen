<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\frontend\PageController;

use App\Http\Controllers\admin\DashboardController;
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

            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

            // contact form
            Route::get('/message/{id}', [DashboardController::class, 'formmessage'])->name('message');
            Route::get('/inbox', [DashboardController::class, 'inbox'])->name('inbox');
            Route::delete('/f-delete/{id}', [DashboardController::class, 'd_form']);
            Route::delete('/all-delete', [DashboardController::class, 'all_d_form']);


            // enquiry form
            Route::get('/enquiryinbox', [DashboardController::class, 'enquiryinbox'])->name('enquiryinbox');
            Route::delete('/enquiry-delete/{id}', [DashboardController::class, 'enquiry_form']);
            Route::delete('/all-delete', [DashboardController::class, 'all_d_form']);


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

            // Integration
            Route::get('/tracking', [IntegrationController::class, 'tracking'])->name('integration.tracking');


            // WIdgets
            Route::get('/widgets', [IntegrationController::class, 'widgets'])->name('integration.widgets');



            Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
            // Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');



            // csv

            // Route::get('contact-form', [ContactFormController::class, 'index'])->name('contact-form.index');
            Route::post('contact-form/export', [DashboardController::class, 'export'])->name('contact-form.export');
            // Route::delete('contact-form/delete/{contact_form}', [ContactFormController::class, 'destroy'])->name('contact-form.destroy');




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
