<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;

Route::get('/', [HomeController::class,'homePage'])->name('home');
Route::get('/aboutus', [CompanyController::class,'aboutUs'])->name('aboutus');
Route::get('/certifications', [CompanyController::class,'certifications'])->name('certifications');
