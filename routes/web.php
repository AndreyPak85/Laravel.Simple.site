<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'ContactController@submit' )->name('contact-form');

Route::get('/contact/all', 'ContactController@allData')->name('contact-data');

Route::get('/contact/all/{id}', 'ContactController@showOneMessage')->name('one-message');

Route::get('/contact/all/{id}/update', 'ContactController@updateMessage')->name('update-message');

Route::post('/contact/all/{id}/update', 'ContactController@updateMessageSubmit' )->name('contact-update-submit');

Route::get('/contact/all/{id}/delete', 'ContactController@deleteMessage' )->name('delete-message');








