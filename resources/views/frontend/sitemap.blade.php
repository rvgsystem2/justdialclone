@extends('components.main')

@section('content')
    <section class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-4 tracking-tight">Explore Our Platform</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Navigate effortlessly through our comprehensive directory of
                pages and resources.</p>
            <div class="mt-6">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full shadow-lg">
                    <span class="material-icons text-white mr-2">map</span>
                    <span class="font-medium text-white">Full Sitemap</span>
                </div>
            </div>
        </div>

        <!-- Sitemap Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Main Pages Card -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all duration-300">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-5 border-b border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-800 flex items-center">
                        <span class="material-icons text-blue-500 mr-2">home</span>
                        Main Pages
                    </h2>
                </div>
                <div class="p-5">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <span class="bg-blue-100 text-blue-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">home</span>
                            </span>
                            <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-indigo-100 text-indigo-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">call</span>
                            </span>
                            <a href="{{ route('contact') }}"
                                class="text-gray-700 hover:text-blue-600 transition">Contact</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-purple-100 text-purple-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">info</span>
                            </span>
                            <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 transition">About Us</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-amber-100 text-amber-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">list_alt</span>
                            </span>
                            <a href="{{ route('listing') }}" class="text-gray-700 hover:text-blue-600 transition">All
                                Listings</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-green-100 text-green-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">description</span>
                            </span>
                            <a href="{{ route('listingdetails') }}"
                                class="text-gray-700 hover:text-blue-600 transition">Listing Details</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-pink-100 text-pink-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">diamond</span>
                            </span>
                            <a href="{{ route('jewellery') }}"
                                class="text-gray-700 hover:text-blue-600 transition">Jewellery</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Business Categories Card -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all duration-300">
                <div class="bg-gradient-to-r from-green-50 to-teal-50 p-5 border-b border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-800 flex items-center">
                        <span class="material-icons text-green-500 mr-2">business</span>
                        Business Categories
                    </h2>
                </div>
                <div class="p-5">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <span class="bg-blue-100 text-blue-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">storefront</span>
                            </span>
                            <a href="{{ route('listing') }}"
                                class="text-gray-700 hover:text-green-600 transition">Showrooms</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-red-100 text-red-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">restaurant</span>
                            </span>
                            <a href="{{ route('listing') }}"
                                class="text-gray-700 hover:text-green-600 transition">Restaurants</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-purple-100 text-purple-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">handyman</span>
                            </span>
                            <a href="{{ route('listing') }}"
                                class="text-gray-700 hover:text-green-600 transition">Services</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-pink-100 text-pink-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">local_hospital</span>
                            </span>
                            <a href="{{ route('listing') }}"
                                class="text-gray-700 hover:text-green-600 transition">Hospitals</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-amber-100 text-amber-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">hotel</span>
                            </span>
                            <a href="{{ route('listing') }}"
                                class="text-gray-700 hover:text-green-600 transition">Hotels</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-teal-100 text-teal-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">apartment</span>
                            </span>
                            <a href="{{ route('listing') }}" class="text-gray-700 hover:text-green-600 transition">Real
                                Estate</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- User & Account Pages Card -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all duration-300">
                <div class="bg-gradient-to-r from-purple-50 to-indigo-50 p-5 border-b border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-800 flex items-center">
                        <span class="material-icons text-purple-500 mr-2">account_circle</span>
                        User & Account
                    </h2>
                </div>
                <div class="p-5">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <span class="bg-blue-100 text-blue-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">login</span>
                            </span>
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-purple-600 transition">Login</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-green-100 text-green-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">person_add</span>
                            </span>
                            <a href="{{ route('signup') }}"
                                class="text-gray-700 hover:text-purple-600 transition">Signup</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-purple-100 text-purple-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">account_box</span>
                            </span>
                            <a href="{{ route('profile') }}" class="text-gray-700 hover:text-purple-600 transition">User
                                Profile</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-pink-100 text-pink-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">settings</span>
                            </span>
                            <a href="#" class="text-gray-700 hover:text-purple-600 transition">Account Settings</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-amber-100 text-amber-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">history</span>
                            </span>
                            <a href="#" class="text-gray-700 hover:text-purple-600 transition">Activity History</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Legal & Information Card -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all duration-300">
                <div class="bg-gradient-to-r from-gray-50 to-blue-gray-50 p-5 border-b border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-800 flex items-center">
                        <span class="material-icons text-gray-600 mr-2">gavel</span>
                        Legal & Information
                    </h2>
                </div>
                <div class="p-5">
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <span class="bg-blue-100 text-blue-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">help_center</span>
                            </span>
                            <a href="{{ route('support') }}" class="text-gray-700 hover:text-gray-800 transition">Help &
                                Support</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-green-100 text-green-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">work</span>
                            </span>
                            <a href="{{ route('careers') }}"
                                class="text-gray-700 hover:text-gray-800 transition">Careers</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-purple-100 text-purple-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">privacy_tip</span>
                            </span>
                            <a href="{{ route('privacy') }}" class="text-gray-700 hover:text-gray-800 transition">Privacy
                                Policy</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-amber-100 text-amber-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">description</span>
                            </span>
                            <a href="{{ route('terms') }}" class="text-gray-700 hover:text-gray-800 transition">Terms of
                                Service</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-pink-100 text-pink-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-sm">cookie</span>
                            </span>
                            <a href="{{ route('cookies') }}" class="text-gray-700 hover:text-gray-800 transition">Cookie
                                Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Add this in your layout file or before the closing body tag -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
