<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


Route::get('/contact_page', function () {
    return view('contact-page');
});

Route::get('/our-projects', function () {
    return view('projects');
});

