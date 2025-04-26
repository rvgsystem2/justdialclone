@extends('components.main')

@section('content')
    <section class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="text-center mb-14">
            <h1 class="text-3xl font-semibold text-gray-900 mb-3 tracking-tight">Explore Our Platform</h1>
            <p class="text-base text-gray-600 max-w-3xl mx-auto">Navigate effortlessly through our comprehensive directory of
                pages and resources.</p>
            <div class="mt-5">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-500 to-amber-700 rounded-full shadow-lg">
                    <span class="material-icons text-white mr-2 text-sm">map</span>
                    <span class="font-medium text-white text-sm">Full Sitemap</span>
                </div>
            </div>
        </div>

        <!-- Sitemap Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Main Pages Card -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all duration-300">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-4 border-b border-gray-100">
                    <h2 class="text-lg font-medium text-gray-800 flex items-center">
                        <span class="material-icons text-blue-500 mr-2 text-base">home</span>
                        Main Pages
                    </h2>
                </div>
                <div class="p-4">
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <span class="bg-blue-100 text-blue-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">home</span>
                            </span>
                            <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-indigo-100 text-indigo-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">call</span>
                            </span>
                            <a href="{{ route('contact') }}"
                                class="text-gray-700 hover:text-blue-600 transition">Contact</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-purple-100 text-purple-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">info</span>
                            </span>
                            <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 transition">About Us</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-amber-100 text-amber-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">list_alt</span>
                            </span>
                            <a href="{{ route('listing') }}" class="text-gray-700 hover:text-blue-600 transition">All
                                Listings</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-green-100 text-green-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">description</span>
                            </span>
                            <a href="{{ route('listingdetails') }}"
                                class="text-gray-700 hover:text-blue-600 transition">Listing Details</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-pink-100 text-pink-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">diamond</span>
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
                <div class="bg-gradient-to-r from-green-50 to-teal-50 p-4 border-b border-gray-100">
                    <h2 class="text-lg font-medium text-gray-800 flex items-center">
                        <span class="material-icons text-green-500 mr-2 text-base">business</span>
                        Business Categories
                    </h2>
                </div>
                <div class="p-4">
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <span class="bg-blue-100 text-blue-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">storefront</span>
                            </span>
                            <a href="{{ route('listing') }}"
                                class="text-gray-700 hover:text-green-600 transition">Showrooms</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-red-100 text-red-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">restaurant</span>
                            </span>
                            <a href="{{ route('listing') }}"
                                class="text-gray-700 hover:text-green-600 transition">Restaurants</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-purple-100 text-purple-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">handyman</span>
                            </span>
                            <a href="{{ route('listing') }}"
                                class="text-gray-700 hover:text-green-600 transition">Services</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-pink-100 text-pink-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">local_hospital</span>
                            </span>
                            <a href="{{ route('listing') }}"
                                class="text-gray-700 hover:text-green-600 transition">Hospitals</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-amber-100 text-amber-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">hotel</span>
                            </span>
                            <a href="{{ route('listing') }}"
                                class="text-gray-700 hover:text-green-600 transition">Hotels</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-teal-100 text-teal-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">apartment</span>
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
                <div class="bg-gradient-to-r from-purple-50 to-indigo-50 p-4 border-b border-gray-100">
                    <h2 class="text-lg font-medium text-gray-800 flex items-center">
                        <span class="material-icons text-purple-500 mr-2 text-base">account_circle</span>
                        User & Account
                    </h2>
                </div>
                <div class="p-4">
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <span class="bg-blue-100 text-blue-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">login</span>
                            </span>
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-purple-600 transition">Login</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-green-100 text-green-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">person_add</span>
                            </span>
                            <a href="{{ route('signup') }}"
                                class="text-gray-700 hover:text-purple-600 transition">Signup</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-purple-100 text-purple-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">account_box</span>
                            </span>
                            <a href="{{ route('profile') }}" class="text-gray-700 hover:text-purple-600 transition">User
                                Profile</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-pink-100 text-pink-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">settings</span>
                            </span>
                            <a href="#" class="text-gray-700 hover:text-purple-600 transition">Account Settings</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-amber-100 text-amber-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">history</span>
                            </span>
                            <a href="#" class="text-gray-700 hover:text-purple-600 transition">Activity History</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Legal & Information Card -->
            <div
                class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition-all duration-300">
                <div class="bg-gradient-to-r from-gray-50 to-blue-gray-50 p-4 border-b border-gray-100">
                    <h2 class="text-lg font-medium text-gray-800 flex items-center">
                        <span class="material-icons text-gray-600 mr-2 text-base">gavel</span>
                        Legal & Information
                    </h2>
                </div>
                <div class="p-4">
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-center">
                            <span class="bg-blue-100 text-blue-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">help_center</span>
                            </span>
                            <a href="{{ route('support') }}" class="text-gray-700 hover:text-gray-800 transition">Help &
                                Support</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-green-100 text-green-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">work</span>
                            </span>
                            <a href="{{ route('careers') }}"
                                class="text-gray-700 hover:text-gray-800 transition">Careers</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-purple-100 text-purple-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">privacy_tip</span>
                            </span>
                            <a href="{{ route('privacy') }}" class="text-gray-700 hover:text-gray-800 transition">Privacy
                                Policy</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-amber-100 text-amber-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">description</span>
                            </span>
                            <a href="{{ route('terms') }}" class="text-gray-700 hover:text-gray-800 transition">Terms of
                                Service</a>
                        </li>
                        <li class="flex items-center">
                            <span class="bg-pink-100 text-pink-800 p-1 rounded-lg mr-3">
                                <span class="material-icons text-xs">cookie</span>
                            </span>
                            <a href="{{ route('cookies') }}" class="text-gray-700 hover:text-gray-800 transition">Cookie
                                Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
