<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ZineCatalogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});
Route::get('/tentang-kami', function () {
    return view('page.about');
});


Route::get('/katalog-zine', [ZineCatalogController::class, 'index'])->name('zine.catalog');
Route::get('/katalog-zine/{zine:slug}', [ZineCatalogController::class, 'show'])->name('zine.show');

Route::prefix('artikel')->controller(ArticleController::class)->group(function () {
    Route::get('/', 'index')->name('article.index');
    Route::get('/{post}', 'show')->name('article.show');
});


Route::get('/event', function () {
    return view('page.event.events');
});
Route::get('/event/detail-event', function () {
    return view('page.event.detail_event');
});
Route::get('/galeri', function () {
    return view('page.galleries');
});
