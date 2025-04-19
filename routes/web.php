<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/listing', [HomeController::class, 'listing'])->name('listing');

Route::get('/listing-details', [HomeController::class, 'listingdetails'])->name('listingdetails');

Route::get('/jewellery', [HomeController::class, 'jewellery'])->name('jewellery');

Route::get('/landingpage', [HomeController::class, 'landingpage'])->name('page.landing');

Route::get('/landingpage2', [HomeController::class, 'landingpage2'])->name('page.landing2');

Route::get('/landingpage3', [HomeController::class, 'landingpage3'])->name('page.landing3');

Route::get('/landingpage4', [HomeController::class, 'landingpage4'])->name('page.landing4');

Route::get('/landingpage5', [HomeController::class, 'landingpage5'])->name('page.landing5');

Route::get('/landingpage6', [HomeController::class, 'landingpage6'])->name('page.landing6');

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
