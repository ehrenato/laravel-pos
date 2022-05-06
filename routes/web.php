<?php

use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;


Route::namespace('site')->group(function (){

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('produtos', [CategoryController::class, 'index'])->name('produtos');
    Route::get('produtos/{slug}', [CategoryController::class, 'show'])->name('produtos.slug');

    Route::get('blog', [BlogController::class, 'show'])->name('blog');

    Route::view('sobre', 'site.about.index');

    Route::get('contato', [ContactController::class, 'index'])->name('contact');
    Route::post('contato', [ContactController::class, 'form'])->name('contact.form');

});
