<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ZineCatalogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', function () {
    return view('page.about');
});


Route::get('/katalog-zine', [ZineCatalogController::class, 'index'])->name('zine.catalog');
Route::get('/katalog-zine/{zine:slug}', [ZineCatalogController::class, 'show'])->name('zine.show');

Route::prefix('artikel')->controller(ArticleController::class)->group(function () {
    Route::get('/', 'index')->name('article.index');
    Route::get('/{post}', 'show')->name('article.show');
});


Route::get('/event', [EventController::class, 'index'])->name('event.index');
Route::get('/event/{event:slug}', [EventController::class, 'show'])->name('event.show');
Route::get('/galeri', function () {
    return view('page.galleries');
});
