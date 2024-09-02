<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\TopicController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\PublicController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
    Route::put('topic/{id}/show', [TopicController::class, 'show'])->name('topic.show');
    
});
