<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PublicController;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Topic;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'controller' => PublicController::class,
], function () {
    Route::get('index', 'index')->name('index');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('category', 'category')->name('category');
    Route::get('testimonial', 'testimonial')->name('testimonial');
    Route::get('job-list', 'joblist')->name('joblist');
    Route::get('job-details/{id}', 'jobdetails')->name('jobdetails');
    Route::post('job-apply', 'jobApply')->name('apply_job');
    Route::get('jobs', 'jobs')->name('jobs');
});


// admin
Route::prefix('admin')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('topic', TopicController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('user', UserController::class);
});
Auth::routes(['Verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//contactus
Route::resource('message', ContactController::class)->middleware('verified');