<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home_dev');
});
Route::get('/contact', function () {
    return view('pages.contact');
})->name('Contact');
Route::get('/gallery', 'GalleryController@imageLoop')->name('Gallery');
Route::get('/quotes', function () {
    return view('pages.quotes');
})->name('Quotes');
Route::get('/blogs', function () {
    return view('pages.blogs');
})->name('Blogs');
Route::get('/about-us', function(){
    return view('pages.about_us');
})->name('About Us');

//ADMIN
Route::get('/dashboard', function(){
    return view('pages.admin.dashboard');
})->name('dashboard');
Route::get('/blog-list', function(){
    return view('pages.admin.blog-list');
})->name('blog-list');
Route::get('/quote-list', function(){
    return view('pages.admin.quote-list');
})->name('quote-list');
Route::get('/web-information', function(){
    return view('pages.admin.web-info');
})->name('web-info');
