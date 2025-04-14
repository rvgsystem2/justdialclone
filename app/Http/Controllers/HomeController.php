<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
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
}
