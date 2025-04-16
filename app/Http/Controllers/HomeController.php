<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function listing()
    {
        return view('frontend.listing');
    }

    public function listingdetails()
    {
        return view('frontend.listingdetails');
    }

    public function jewellery()
    {
        return view('frontend.jewellery');
    }

    public function details()
    {
        return view('frontend.details');
    }

    public function advertise()
    {
        return view('frontend.advertise');
    }

    public function notifications()
    {
        return view('frontend.notifications');
    }

    public function login()
    {
        return view('frontend.login');
    }

    public function signup()
    {
        return view('frontend.signup');
    }

    public function profile()
    {
        return view('frontend.profile');
    }

    // Footer Pages
    public function support()
    {
        return view('frontend.support');
    }

    public function careers()
    {
        return view('frontend.careers');
    }

    public function privacy()
    {
        return view('frontend.privacy-policy');
    }

    public function terms()
    {
        return view('frontend.terms-of-service');
    }

    public function cookies()
    {
        return view('frontend.cookie-policy');
    }

    public function sitemap()
    {
        return view('frontend.sitemap');
    }

    public function error404()
    {
        return view('frontend.errors404'); // points to resources/views/frontend/errors404.blade.php
    }
}
