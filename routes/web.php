<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\PublicController;
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
    Route::get('category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::delete('category/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::put('category/{id}', [CategoryController::class, 'update'])->name('category.update');
    
    Route::get('topic', [TopicController::class, 'index'])->name('topic.index');
    Route::get('topic/create', [TopicController::class, 'create'])->name('topic.create');
    Route::post('topic', [TopicController::class, 'store'])->name('topic.store');
    Route::get('topic/{id}/edit', [TopicController::class, 'edit'])->name('topic.edit');
    Route::delete('topic/delete', [TopicController::class, 'destroy'])->name('topic.destroy');
    Route::put('topic/{id}', [TopicController::class, 'update'])->name('topic.update');
    Route::get('topic/{id}/show', [TopicController::class, 'show'])->name('topic.show');
        
    Route::get('testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
    Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
    Route::post('testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('testimonial/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::delete('testimonial/delete', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
    Route::put('testimonial/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('testimonial/{id}/show', [TestimonialController::class, 'show'])->name('testimonial.show');
});
Auth::routes(['Verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//contactus

Route::get('message', [ContactController::class, 'index'])->name('message.index'); //show page 
Route::get('/contacts/create', [ContactController::class, 'create'])->name('message.create');
Route::post('message/store', [ContactController::class, 'store'])->name('message.store'); //store in db 
Route::get('messagel/{id}/show', [ContactController::class, 'show'])->name('message.show'); //store in db 
Route::delete('message/delete', [ContactController::class, 'destroy'])->name('message.destroy'); //store in db 

