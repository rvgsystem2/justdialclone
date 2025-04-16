<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/listing', [HomeController::class, 'listing'])->name('listing');

Route::get('/listing-details', [HomeController::class, 'listingdetails'])->name('listingdetails');

Route::get('/jewellery', [HomeController::class, 'jewellery'])->name('jewellery');

Route::get('/details', [HomeController::class, 'details'])->name('details');

Route::get('/advertise', [HomeController::class, 'advertise'])->name('advertise');

Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/signup', [HomeController::class, 'signup'])->name('signup');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

// Footer Pages
Route::get('/support', [HomeController::class, 'support'])->name('support');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms-of-service', [HomeController::class, 'terms'])->name('terms');
Route::get('/cookie-policy', [HomeController::class, 'cookies'])->name('cookies');
Route::get('/sitemap', [HomeController::class, 'sitemap'])->name('sitemap');

Route::get('/404', [HomeController::class, 'error404'])->name('404');
