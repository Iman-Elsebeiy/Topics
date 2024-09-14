<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// public pages
Route::controller(PublicController::class)->group(function () {
    Route::get('index', 'index')->name('index');
    Route::get('contact', 'contact')->name('contact');
    Route::get('category', 'category')->name('category');
    Route::get('testimonials', 'testimonial')->name('testimonial');
    Route::get('topics-list', 'topic_list')->name('topic.list');
    Route::get('topic-details/{id}', 'topic_details')->name('topic.details');
});

// admin routes with middleware: auth and verified
Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('topic', TopicController::class);
    Route::resource('testimonial', TestimonialController::class);
    Route::resource('user', UserController::class);
});

Route::resource('message', ContactController::class);


// authentication routes with email verification
Auth::routes(['verify' => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
