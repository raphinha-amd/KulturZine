<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});
Route::get('/tentang-kami', function () {
    return view('page.about');
});
Route::get('/katalog-zine', function () {
    return view('page.catalog.catalog');
});
Route::get('/katalog-zine/detail-zine', function () {
    return view('page.catalog.detail_catalog');
});
Route::get('/artikel', function () {
    return view('page.article.article');
});
Route::get('/artikel/detail-artikel', function () {
    return view('page.article.detail_article');
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
