<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MarketingController;

Route::get('/', [HomeController::class,'homePage'])->name('home');
Route::get('/aboutus', [CompanyController::class,'aboutUs'])->name('aboutus');
Route::get('/certifications', [CompanyController::class,'certifications'])->name('certifications');
Route::get('/digital-marketing', [MarketingController::class,'digitalMarketing'])->name('digital-marketing');
Route::get('/seo-service', [MarketingController::class,'seoService'])->name('seo-service');
Route::get('/social-media-marketing', [MarketingController::class,'socialMedia'])->name('social-media-marketing');
