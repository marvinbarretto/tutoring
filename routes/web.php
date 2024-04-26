<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

// Home page route
Route::get('/', function () {
    return view('welcome');
});

// Another page route
Route::get('/another', function () {
    return view('another');
});

// Form display route
Route::get('/form', [FormController::class, 'showForm'])->name('form.show');

// Form submission handling route
Route::post('/submit-form', [FormController::class, 'handleSubmit'])->name('form.submit');

