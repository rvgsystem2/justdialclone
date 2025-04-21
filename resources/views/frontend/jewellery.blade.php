@extends('components.main')

@section('content')
    <!-- Google Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />

    <section class="bg-gray-50 py-8 px-4 lg:px-10">
        <div class="max-w-7xl mx-auto">

            <!-- Breadcrumb -->
            <nav class="flex items-center text-sm text-gray-600 mb-4">
                <a href="/" class="hover:text-amber-600 transition-colors">Mumbai</a>
                <span class="mx-2 text-gray-400">›</span>
                <a href="#" class="hover:text-amber-600 transition-colors">Jewellery Showrooms</a>
                <span class="mx-2 text-gray-400">›</span>
                <span class="text-gray-800 font-medium">28,603+ Listings</span>
            </nav>

            <!-- Heading -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2 md:mb-0">
                    Popular <span class="text-amber-600">Jewellery</span> Showrooms
                </h1>
                <p class="text-sm text-gray-600">
                    <span class="font-medium">Last updated:</span> Today, {{ now()->format('h:i A') }}
                </p>
            </div>

            <!-- Filters Row -->
            <div class="bg-white rounded-lg shadow-sm p-4 mb-8 border border-gray-100">
                <div class="flex flex-wrap items-center gap-3">
                    <div class="relative">
                        <button class="flex items-center gap-2 bg-gray-50 hover:bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 transition-colors border border-gray-200">
                            <span class="material-symbols-outlined text-lg">sort</span>
                            Sort by
                        </button>
                    </div>
                    
                    <div class="flex flex-wrap gap-3">
                        <button class="flex items-center gap-2 bg-gray-50 hover:bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 transition-colors border border-gray-200">
                            <span class="material-symbols-outlined text-amber-500">star</span>
                            Top Rated
                        </button>
                        <button class="flex items-center gap-2 bg-gray-50 hover:bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 transition-colors border border-gray-200">
                            <span class="material-symbols-outlined text-blue-500">bolt</span>
                            Quick Response
                        </button>
                        <button class="flex items-center gap-2 bg-gray-50 hover:bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 transition-colors border border-gray-200">
                            <span class="material-symbols-outlined text-green-500">verified</span>
                            JD Verified
                        </button>
                        <button class="flex items-center gap-2 bg-gray-50 hover:bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 transition-colors border border-gray-200">
                            <span class="material-symbols-outlined text-red-500">sell</span>
                            Deals
                        </button>
                        <button class="flex items-center gap-2 bg-gray-50 hover:bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 transition-colors border border-gray-200">
                            <span class="material-symbols-outlined text-purple-500">workspace_premium</span>
                            JD Trust
                        </button>
                        <button class="flex items-center gap-2 bg-gray-50 hover:bg-gray-100 px-4 py-2 rounded-lg text-sm font-medium text-gray-700 transition-colors border border-gray-200">
                            <span class="material-symbols-outlined">tune</span>
                            All Filters
                        </button>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Listings -->
                <div class="lg:col-span-2 space-y-6">

                    <!-- Card 1 -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow border border-gray-100 overflow-hidden">
                        <div class="flex flex-col sm:flex-row">
                            <div class="sm:w-48 flex-shrink-0 relative">
                                <img src="{{ asset('asset/images/sample.jpeg') }}" alt="Meghna Jewellers" class="w-full h-48 sm:h-full object-cover">
                                <div class="absolute top-2 left-2 bg-amber-600 text-white text-xs font-bold px-2 py-1 rounded">
                                    JD Verified
                                </div>
                            </div>
                            <div class="p-5 flex-1">
                                <div class="flex justify-between items-start">
                                    <h2 class="font-bold text-xl text-gray-900 mb-1">Meghna Jewellers Pvt Ltd</h2>
                                    <span class="flex items-center bg-green-100 text-green-800 text-xs font-medium px-2 py-0.5 rounded-full">
                                        <span class="material-symbols-outlined text-sm mr-1">bolt</span>
                                        Responsive
                                    </span>
                                </div>
                                
                                <div class="flex items-center flex-wrap gap-2 text-sm text-gray-600 mb-3">
                                    <div class="flex items-center bg-amber-50 text-amber-700 px-2 py-0.5 rounded-full">
                                        <span class="material-symbols-outlined text-amber-500 text-base mr-1">star</span>
                                        <span class="font-semibold">3.8</span> (88 Ratings)
                                    </div>
                                    <div class="w-px h-4 bg-gray-300"></div>
                                    <span class="flex items-center">
                                        <span class="material-symbols-outlined text-gray-400 text-base mr-1">location_on</span>
                                        Sector 3 Nerul, Navi Mumbai
                                    </span>
                                </div>
                                
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="bg-gray-50 text-gray-700 px-3 py-1 rounded-full text-xs font-medium border border-gray-200">
                                        Diamond Jewellery
                                    </span>
                                    <span class="bg-gray-50 text-gray-700 px-3 py-1 rounded-full text-xs font-medium border border-gray-200">
                                        Silver Jewellery
                                    </span>
                                    <span class="bg-gray-50 text-gray-700 px-3 py-1 rounded-full text-xs font-medium border border-gray-200">
                                        Same Day Delivery
                                    </span>
                                </div>
                                
                                <div class="flex flex-wrap items-center gap-3 mb-4">
                                    <a href="tel:08105909723" class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                        <span class="material-symbols-outlined">call</span>
                                        Call Now
                                    </a>
                                    <a href="#" class="flex items-center gap-2 bg-green-50 hover:bg-green-100 text-green-800 px-4 py-2 rounded-lg text-sm font-medium border border-green-100 transition-colors">
                                        <span class="material-symbols-outlined">chat</span>
                                        WhatsApp
                                    </a>
                                    <a href="#" class="flex items-center gap-2 bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors ml-auto">
                                        <span class="material-symbols-outlined">rocket_launch</span>
                                        Best Deal
                                    </a>
                                </div>
                                
                                <div class="flex justify-between items-center pt-3 border-t border-gray-100">
                                    <div class="text-xs text-gray-500">
                                        Updated 2 hours ago
                                    </div>
                                    <a href="{{ route('details') }}" class="text-amber-600 hover:text-amber-700 text-sm font-medium flex items-center gap-1">
                                        View Details
                                        <span class="material-symbols-outlined text-base">chevron_right</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow border border-gray-100 overflow-hidden">
                        <div class="flex flex-col sm:flex-row">
                            <div class="sm:w-48 flex-shrink-0 relative">
                                <img src="{{ asset('asset/images/sample.jpeg') }}" alt="Shree Aabhushan Jewellers" class="w-full h-48 sm:h-full object-cover">
                                <div class="absolute top-2 left-2 bg-amber-600 text-white text-xs font-bold px-2 py-1 rounded">
                                    Premium
                                </div>
                            </div>
                            <div class="p-5 flex-1">
                                <div class="flex justify-between items-start">
                                    <h2 class="font-bold text-xl text-gray-900 mb-1">Shree Aabhushan Jewellers</h2>
                                    <span class="flex items-center bg-green-100 text-green-800 text-xs font-medium px-2 py-0.5 rounded-full">
                                        <span class="material-symbols-outlined text-sm mr-1">bolt</span>
                                        Highly Responsive
                                    </span>
                                </div>
                                
                                <div class="flex items-center flex-wrap gap-2 text-sm text-gray-600 mb-3">
                                    <div class="flex items-center bg-amber-50 text-amber-700 px-2 py-0.5 rounded-full">
                                        <span class="material-symbols-outlined text-amber-500 text-base mr-1">star</span>
                                        <span class="font-semibold">4.3</span> (112 Ratings)
                                    </div>
                                    <div class="w-px h-4 bg-gray-300"></div>
                                    <span class="flex items-center">
                                        <span class="material-symbols-outlined text-gray-400 text-base mr-1">location_on</span>
                                        Sector 10 Vashi, Navi Mumbai
                                    </span>
                                </div>
                                
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="bg-gray-50 text-gray-700 px-3 py-1 rounded-full text-xs font-medium border border-gray-200">
                                        Custom Gold Work
                                    </span>
                                    <span class="bg-gray-50 text-gray-700 px-3 py-1 rounded-full text-xs font-medium border border-gray-200">
                                        Designer Bangles
                                    </span>
                                    <span class="bg-gray-50 text-gray-700 px-3 py-1 rounded-full text-xs font-medium border border-gray-200">
                                        Certified Diamonds
                                    </span>
                                </div>
                                
                                <div class="flex flex-wrap items-center gap-3 mb-4">
                                    <a href="tel:08105900000" class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                        <span class="material-symbols-outlined">call</span>
                                        Call Now
                                    </a>
                                    <a href="#" class="flex items-center gap-2 bg-green-50 hover:bg-green-100 text-green-800 px-4 py-2 rounded-lg text-sm font-medium border border-green-100 transition-colors">
                                        <span class="material-symbols-outlined">chat</span>
                                        WhatsApp
                                    </a>
                                    <a href="#" class="flex items-center gap-2 bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors ml-auto">
                                        <span class="material-symbols-outlined">rocket_launch</span>
                                        Best Deal
                                    </a>
                                </div>
                                
                                <div class="flex justify-between items-center pt-3 border-t border-gray-100">
                                    <div class="text-xs text-gray-500">
                                        Updated 1 hour ago
                                    </div>
                                    <a href="{{ route('details') }}" class="text-amber-600 hover:text-amber-700 text-sm font-medium flex items-center gap-1">
                                        View Details
                                        <span class="material-symbols-outlined text-base">chevron_right</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Right: Lead Form -->
                <div class="bg-white border border-gray-200 rounded-xl shadow-md sticky top-4">
                    <div class="p-6">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="bg-amber-100 p-2 rounded-full">
                                <span class="material-symbols-outlined text-amber-600 text-2xl">diamond</span>
                            </div>
                            <h3 class="font-bold text-xl text-gray-900">
                                Get <span class="text-amber-600">Exclusive</span> Deals
                            </h3>
                        </div>
                        
                        <p class="text-gray-600 mb-6">Connect with top-rated jewellery showrooms and get special discounts</p>
                        
                        <form>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">What jewellery are you looking for?</label>
                                <div class="grid grid-cols-2 gap-3">
                                    <label class="flex items-center justify-center gap-2 p-3 border border-gray-200 rounded-lg cursor-pointer hover:border-amber-400 transition-colors has-[:checked]:border-amber-500 has-[:checked]:bg-amber-50">
                                        <input type="radio" name="jtype" class="hidden" checked>
                                        <span class="material-symbols-outlined text-blue-500">diamond</span>
                                        <span class="text-sm font-medium">Diamond</span>
                                    </label>
                                    <label class="flex items-center justify-center gap-2 p-3 border border-gray-200 rounded-lg cursor-pointer hover:border-amber-400 transition-colors has-[:checked]:border-amber-500 has-[:checked]:bg-amber-50">
                                        <input type="radio" name="jtype" class="hidden">
                                        <span class="material-symbols-outlined text-amber-500">monetization_on</span>
                                        <span class="text-sm font-medium">Gold</span>
                                    </label>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                                <div class="relative">
                                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 material-symbols-outlined text-gray-400">person</span>
                                    <input type="text" placeholder="Full name" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition-colors">
                                </div>
                            </div>
                            
                            <div class="mb-6">
                                <label class="block text-sm font-medium text-gray-700 mb-1">Mobile Number</label>
                                <div class="relative">
                                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 material-symbols-outlined text-gray-400">call</span>
                                    <input type="tel" placeholder="10-digit mobile number" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-amber-500 outline-none transition-colors">
                                </div>
                            </div>
                            
                            <button type="submit" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white py-3 rounded-lg font-medium flex items-center justify-center gap-2 shadow-md hover:shadow-lg transition-all">
                                Get Best Deals Now
                                <span class="material-symbols-outlined">chevron_right</span>
                            </button>
                        </form>
                        
                        <div class="mt-4 flex items-center gap-2 text-xs text-gray-500">
                            <span class="material-symbols-outlined text-base">shield</span>
                            Your information is secure with us
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-10 flex justify-center">
                <nav class="flex items-center gap-1">
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 transition-colors">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-amber-500 bg-amber-50 text-amber-600 font-medium">1</button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 transition-colors">2</button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 transition-colors">3</button>
                    <span class="px-2 text-gray-400">...</span>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 transition-colors">10</button>
                    <button class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 bg-white text-gray-700 hover:bg-gray-50 transition-colors">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </nav>
            </div>
        </div>
    </section>
@endsection