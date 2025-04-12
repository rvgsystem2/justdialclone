<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/listing', [HomeController::class, 'listing'])->name('listing');

Route::get('/listing-details', [HomeController::class, 'listingdetails'])->name('listingdetails');

Route::get('/jewellery', [HomeController::class, 'jewellery'])->name('jewellery');

Route::get('/details', [HomeController::class, 'details'])->name('details');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/signup', [HomeController::class, 'signup'])->name('signup');