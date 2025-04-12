@extends('components.main')

@section('content')
<!-- Google Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

<section class="bg-white py-6 px-4 lg:px-10">
    <div class="max-w-7xl mx-auto">

        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-500 mb-2">
            <a href="/" class="hover:underline">Mumbai</a> ›
            <a href="#" class="hover:underline">Jewellery Showrooms</a> ›
            28603+ Listings
        </nav>

        <!-- Heading -->
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">
            Popular <span class="text-blue-600">Jewellery</span> Showrooms in Mumbai
        </h1>

        <!-- Filters Row -->
        <div class="flex flex-wrap items-center gap-2 text-sm mb-6">
            <button class="bg-gray-100 px-3 py-1 rounded shadow-sm">Sort by</button>
            <button class="bg-gray-100 px-3 py-1 rounded shadow-sm flex items-center gap-1">
                <span class="material-symbols-outlined text-base">star</span> Top Rated
            </button>
            <button class="bg-gray-100 px-3 py-1 rounded shadow-sm flex items-center gap-1">
                <span class="material-symbols-outlined text-base">bolt</span> Quick Response
            </button>
            <button class="bg-gray-100 px-3 py-1 rounded shadow-sm">Jewellery Type</button>
            <button class="bg-gray-100 px-3 py-1 rounded shadow-sm flex items-center gap-1">
                <span class="material-symbols-outlined text-base">verified</span> Jd Verified
            </button>
            <button class="bg-gray-100 px-3 py-1 rounded shadow-sm flex items-center gap-1">
                <span class="material-symbols-outlined text-base">sell</span> Deals
            </button>
            <button class="bg-gray-100 px-3 py-1 rounded shadow-sm flex items-center gap-1">
                <span class="material-symbols-outlined text-base">workspace_premium</span> Jd Trust
            </button>
            <button class="bg-gray-100 px-3 py-1 rounded shadow-sm">Brand</button>
            <button class="bg-gray-100 px-3 py-1 rounded shadow-sm">Ratings</button>
            <button class="bg-gray-100 px-3 py-1 rounded shadow-sm flex items-center gap-1">
                <span class="material-symbols-outlined text-base">tune</span> All Filters
            </button>
        </div>

        <!-- Content Area -->
        <div class="grid lg:grid-cols-3 gap-6">
            <!-- Listings -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-sm border p-4 flex flex-col sm:flex-row gap-4">
                    <img src="https://via.placeholder.com/100" alt="Jewellery" class="w-24 h-24 object-cover rounded">
                    <div class="flex-1">
                        <h2 class="font-semibold text-lg text-gray-800 mb-1">Meghna Jewellers Pvt Ltd</h2>
                        <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600 mb-2">
                            <div class="flex items-center gap-1 text-green-600 font-semibold">
                                <span class="material-symbols-outlined text-yellow-500">star</span> 3.8★
                            </div>
                            <span>88 Ratings</span>
                            <span class="text-blue-600 flex items-center gap-1">
                                <span class="material-symbols-outlined">verified</span> Verified
                            </span>
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-orange-400">bolt</span> Responsive
                            </span>
                        </div>
                        <div class="text-sm text-gray-700 mb-2">Sector 3 Nerul, Navi Mumbai</div>
                        <div class="flex flex-wrap gap-2 text-xs mb-3">
                            <span class="bg-gray-100 px-2 py-1 rounded">Diamond Jewellery</span>
                            <span class="bg-gray-100 px-2 py-1 rounded">Silver Jewellery</span>
                            <span class="bg-gray-100 px-2 py-1 rounded">Same Day Delivery</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <a href="tel:08105909723" class="bg-green-600 text-white px-4 py-1 rounded text-sm flex items-center gap-1">
                                <span class="material-symbols-outlined">call</span> 08105909723
                            </a>
                            <a href="#" class="bg-green-100 text-green-800 px-3 py-1 rounded text-sm flex items-center gap-1">
                                <span class="material-symbols-outlined">chat</span> WhatsApp
                            </a>
                            <a href="#" class="bg-blue-600 text-white px-4 py-1 rounded text-sm flex items-center gap-1">
                                <span class="material-symbols-outlined">rocket_launch</span> Get Best Deal
                            </a>
                        </div>
                        <a href="{{route('details')}}" class="text-blue-600 text-sm font-medium hover:underline">See Details</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-sm border p-4 flex flex-col sm:flex-row gap-4">
                    <img src="https://via.placeholder.com/100" alt="Jewellery" class="w-24 h-24 object-cover rounded">
                    <div class="flex-1">
                        <h2 class="font-semibold text-lg text-gray-800 mb-1">Shree Aabhushan Jewellers</h2>
                        <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600 mb-2">
                            <div class="flex items-center gap-1 text-green-600 font-semibold">
                                <span class="material-symbols-outlined text-yellow-500">star</span> 4.3★
                            </div>
                            <span>112 Ratings</span>
                            <span class="text-blue-600 flex items-center gap-1">
                                <span class="material-symbols-outlined">verified</span> Verified
                            </span>
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-orange-400">bolt</span> Responsive
                            </span>
                        </div>
                        <div class="text-sm text-gray-700 mb-2">Sector 10 Vashi, Navi Mumbai</div>
                        <div class="flex flex-wrap gap-2 text-xs mb-3">
                            <span class="bg-gray-100 px-2 py-1 rounded">Custom Gold Work</span>
                            <span class="bg-gray-100 px-2 py-1 rounded">Designer Bangles</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-3">
                            <a href="tel:08105900000" class="bg-green-600 text-white px-4 py-1 rounded text-sm flex items-center gap-1">
                                <span class="material-symbols-outlined">call</span> 08105900000
                            </a>
                            <a href="#" class="bg-green-100 text-green-800 px-3 py-1 rounded text-sm flex items-center gap-1">
                                <span class="material-symbols-outlined">chat</span> WhatsApp
                            </a>
                            <a href="#" class="bg-blue-600 text-white px-4 py-1 rounded text-sm flex items-center gap-1">
                                <span class="material-symbols-outlined">rocket_launch</span> Get Best Deal
                            </a>
                        </div>
                        <a href="{{route('details')}}" class="text-blue-600 text-sm font-medium hover:underline">See Details</a>
                    </div>
                </div>

            </div>

            <!-- Right: Lead Form -->
            <div class="bg-white border shadow-md p-5 rounded-xl">
                <h3 class="font-semibold text-gray-800 mb-2 text-lg">Get the List of Top <span class="text-blue-600">Jewellery Showrooms</span></h3>
                <p class="text-sm text-gray-600 mb-3">We’ll send you contact details in seconds for free</p>
                <p class="text-sm font-medium mb-2">What jewellery are you looking for?</p>
                <div class="flex gap-4 mb-4">
                    <label class="flex items-center gap-2 text-sm">
                        <input type="radio" name="jtype" class="accent-blue-600" checked>
                        Diamond
                    </label>
                    <label class="flex items-center gap-2 text-sm">
                        <input type="radio" name="jtype" class="accent-blue-600">
                        Gold
                    </label>
                </div>
                <input type="text" placeholder="Name" class="w-full border px-3 py-2 rounded mb-3 text-sm" />
                <input type="text" placeholder="Mobile Number" class="w-full border px-3 py-2 rounded mb-4 text-sm" />
                <button class="bg-blue-600 hover:bg-blue-700 text-white w-full py-2 rounded text-sm">
                    Get Best Deal <span class="material-symbols-outlined text-base align-middle">chevron_right</span>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection
