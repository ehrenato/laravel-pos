<?php

use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;


Route::namespace('site')->group(function (){

    Route::get('/', [HomeController::class, 'index'])->name('site.home');

    Route::get('produtos', [CategoryController::class, 'index'])->name('site.products');
    Route::get('produtos/{slug}', [CategoryController::class, 'show'])->name('site.produtos.slug');

    Route::get('blog', [BlogController::class, 'index'])->name('site.blog');

    Route::view('sobre', 'site.about.index')->name('site.about');

    Route::get('contato', [ContactController::class, 'index'])->name('site.contact');
    Route::post('contato', [ContactController::class, 'form'])->name('site.contact.form');

});
