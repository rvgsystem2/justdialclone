@extends('components.main')

@section('content')
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-10">

        <!-- Main Carousel/Banner Section -->
        <div class="relative overflow-hidden bg-orange-50">
            <div class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide w-full">
                <!-- Slide -->
                <div class="snap-start w-full flex-shrink-0">
                    <div class="flex flex-col md:flex-row p-6 gap-4 items-center">
                        <!-- Left Content -->
                        <div class="relative w-full md:w-2/5 space-y-4">
                            <!-- Dots pattern -->
                            <div class="absolute top-0 left-0 opacity-30 -z-10">
                                <div class="grid grid-cols-6 gap-1">
                                    <!-- Repeat 36 dots -->
                                    <template x-for="i in 36">
                                        <div class="w-1 h-1 bg-orange-800 rounded-full"></div>
                                    </template>
                                </div>
                            </div>

                            <!-- Logo -->
                            <div class="bg-orange-200 rounded-full w-16 h-16 flex items-center justify-center">
                                <span class="text-orange-800 font-bold">Jio</span>
                            </div>

                            <!-- Texts -->
                            <h2 class="text-2xl font-bold text-orange-800">Get Loan Against Property</h2>
                            <p class="text-orange-700">
                                At a competitive interest rate starting from
                                <span class="text-orange-600 font-bold text-xl">9.00%</span>
                            </p>
                            <p class="text-orange-700">from Jio Finance Limited</p>

                            <!-- Button -->
                            <button
                                class="bg-orange-700 hover:bg-orange-800 text-white px-6 py-2 rounded mt-2 flex items-center transition">
                                Apply Now
                                <i class="fa fa-arrow-right ml-2"></i>
                            </button>
                        </div>

                        <!-- Right Cards Section -->
                        <div
                            class="w-full md:w-3/5 flex gap-4 overflow-x-auto snap-x snap-mandatory scrollbar-hide pt-4 md:pt-0">
                            <!-- Category Cards -->
                            <div
                                class="snap-start w-48 flex-shrink-0 bg-blue-500 text-white rounded-lg p-4 space-y-2 flex flex-col">
                                <h3 class="font-bold text-xl">B2B</h3>
                                <p class="text-sm">Quick Quotes</p>
                                <img src="{{ asset('asset/images/bussines.jpg') }}" alt="Business person"
                                    class="object-cover rounded" />
                            </div>

                            <div
                                class="snap-start w-48 flex-shrink-0 bg-blue-700 text-white rounded-lg p-4 space-y-2 flex flex-col">
                                <h3 class="font-bold text-xl">Repairs & Services</h3>
                                <p class="text-sm">Get Nearest Vendor</p>
                                <img src="{{ asset('asset/images/repair.jpg') }}" alt="Repair person"
                                    class="object-cover rounded" />
                            </div>

                            <div
                                class="snap-start w-48 flex-shrink-0 bg-purple-500 text-white rounded-lg p-4 space-y-2 flex flex-col">
                                <h3 class="font-bold text-xl">Real Estate</h3>
                                <p class="text-sm">Finest Agents</p>
                                <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Building"
                                    class="object-cover rounded" />
                            </div>

                            <div
                                class="snap-start w-48 flex-shrink-0 bg-green-500 text-white rounded-lg p-4 space-y-2 flex flex-col">
                                <h3 class="font-bold text-xl">Doctors</h3>
                                <p class="text-sm">Book Now</p>
                                <img src="{{ asset('asset/images/clinic.jpg') }}" alt="Doctor"
                                    class="object-cover rounded" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Optional Slider Controls -->
            <button
                class="hidden lg:flex absolute left-2 top-1/2 transform -translate-y-1/2 bg-white shadow-md hover:bg-gray-100 transition p-2 rounded-full z-10">
                <i class="fas fa-chevron-left text-gray-700"></i>
            </button>
            <button
                class="hidden lg:flex absolute right-2 top-1/2 transform -translate-y-1/2 bg-white shadow-md hover:bg-gray-100 transition p-2 rounded-full z-10">
                <i class="fas fa-chevron-right text-gray-700"></i>
            </button>
        </div>

        <!-- Category Icons Section -->
        <div class="container mx-auto my-10 px-4">
            <!-- Responsive Heading -->
            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold mb-6 text-gray-800 text-center sm:text-left">
                Explore Popular Categories
            </h2>

            <!-- Responsive Icon Grid -->
            <div class="grid grid-cols-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">

                <!-- Category Card Template -->
                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-utensils text-amber-500 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Restaurants</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-hotel text-blue-500 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Hotels</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-spa text-purple-500 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Beauty Spa</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-couch text-blue-400 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Home Decor</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div
                        class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2 bg-pink-100">
                        <i class="fas fa-heart text-pink-500 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Wedding Planning</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-graduation-cap text-green-500 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Education</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-handshake text-blue-600 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Rent & Hire</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-hospital text-red-500 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Hospitals</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-hard-hat text-yellow-500 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Contractors</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-paw text-blue-500 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Pet Shops</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-bed text-blue-400 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">PG/Hostels</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-home text-blue-500 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Estate</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-tooth text-blue-300 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Dentists</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-dumbbell text-gray-700 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Gym</span>
                </a>

                <a href="#" class="flex flex-col items-center">
                    <div class="w-16 h-16 rounded-full border-2 border-gray-200 flex items-center justify-center mb-2">
                        <i class="fas fa-money-bill-wave text-green-500 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Loans</span>
                </a>

                <!-- Added Jewellery -->
                <a href="{{route('jewellery')}}" class="flex flex-col items-center">
                    <div
                        class="w-16 h-16 rounded-full border-2 border-yellow-300 flex items-center justify-center mb-2 bg-yellow-50">
                        <i class="fas fa-gem text-yellow-500 text-2xl"></i>
                    </div>
                    <span class="text-sm text-center">Jewellery</span>
                </a>

            </div>
        </div>


        <!-- Search Section -->
        <section class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-white py-10 sm:py-14">
            <div class="container mx-auto px-4">
                <div class="max-w-2xl mx-auto text-center">
                    <!-- Heading -->
                    <h1 class="text-2xl sm:text-4xl font-bold leading-tight mb-3">
                        Find Local Services & Businesses Near You
                    </h1>
                    <!-- Subtext -->
                    <p class="text-base sm:text-lg mb-6 sm:mb-8">
                        Discover the best services in your area with verified ratings and reviews
                    </p>

                    <!-- Search Form -->
                    <div
                        class="bg-white rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-lg flex flex-col sm:flex-row gap-2 sm:gap-4 items-stretch sm:items-center">

                        <!-- Category Dropdown -->
                        <select
                            class="w-full sm:w-1/3 px-4 py-2 rounded-full border border-gray-300 text-gray-700 focus:outline-none">
                            <option>All Categories</option>
                            <option>Restaurants</option>
                            <option>Home Services</option>
                            <option>Doctors</option>
                            <option>Hotels</option>
                            <option>Education</option>
                        </select>

                        <!-- Text Input -->
                        <input type="text" placeholder="Search services or businesses..."
                            class="w-full sm:flex-1 px-4 py-2 rounded-full border border-gray-300 text-gray-700 focus:outline-none">

                        <!-- Search Button -->
                        <button
                            class="w-full sm:w-auto bg-yellow-500 hover:bg-yellow-600 text-white font-medium px-6 py-2 rounded-full transition">
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Searches -->
        <section class="w-full px-4 sm:px-6 lg:px-12 py-12 bg-gray-50">
            <!-- Responsive Heading -->
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-gray-800 mb-8 text-center sm:text-left">
                Popular Searches
            </h2>

            <!-- Scrollable Card Container -->
            <div class="relative">
                <div class="flex gap-6 overflow-x-auto pb-4 scrollbar-hide snap-x snap-mandatory scroll-smooth">

                    <!-- Card Template -->
                    <div
                        class="min-w-[250px] sm:min-w-[270px] bg-white rounded-3xl shadow-lg border border-gray-200 hover:shadow-xl transition-all duration-300 overflow-hidden snap-start">
                        <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Estate"
                            class="w-full h-[160px] object-cover" />
                        <div class="bg-blue-600 text-white text-center px-5 py-5">
                            <p class="text-base font-semibold leading-snug mb-3">
                                Estate Agents For Residential Rental
                            </p>
                            <button
                                class="bg-white text-blue-600 font-semibold px-5 py-2 text-sm rounded-full hover:bg-blue-100 transition">
                                Enquire Now
                            </button>
                        </div>
                    </div>

                    <!-- Repeat Cards -->
                    <div
                        class="min-w-[250px] sm:min-w-[270px] bg-white rounded-3xl shadow-lg border border-gray-200 hover:shadow-xl transition-all duration-300 overflow-hidden snap-start">
                        <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Estate"
                            class="w-full h-[160px] object-cover" />
                        <div class="bg-blue-600 text-white text-center px-5 py-5">
                            <p class="text-base font-semibold leading-snug mb-3">
                                Estate Agents For Residential Rental
                            </p>
                            <button
                                class="bg-white text-blue-600 font-semibold px-5 py-2 text-sm rounded-full hover:bg-blue-100 transition">
                                Enquire Now
                            </button>
                        </div>
                    </div>

                    <div
                        class="min-w-[250px] sm:min-w-[270px] bg-white rounded-3xl shadow-lg border border-gray-200 hover:shadow-xl transition-all duration-300 overflow-hidden snap-start">
                        <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Estate"
                            class="w-full h-[160px] object-cover" />
                        <div class="bg-blue-600 text-white text-center px-5 py-5">
                            <p class="text-base font-semibold leading-snug mb-3">
                                Estate Agents For Residential Rental
                            </p>
                            <button
                                class="bg-white text-blue-600 font-semibold px-5 py-2 text-sm rounded-full hover:bg-blue-100 transition">
                                Enquire Now
                            </button>
                        </div>
                    </div>

                    <div
                        class="min-w-[250px] sm:min-w-[270px] bg-white rounded-3xl shadow-lg border border-gray-200 hover:shadow-xl transition-all duration-300 overflow-hidden snap-start">
                        <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Interior"
                            class="w-full h-[160px] object-cover" />
                        <div class="bg-blue-600 text-white text-center px-5 py-5">
                            <p class="text-base font-semibold leading-snug mb-3">
                                Estate Agents For Residential Rental
                            </p>
                            <button
                                class="bg-white text-blue-600 font-semibold px-5 py-2 text-sm rounded-full hover:bg-blue-100 transition">
                                Enquire Now
                            </button>
                        </div>
                    </div>

                    <div
                        class="min-w-[250px] sm:min-w-[270px] bg-white rounded-3xl shadow-lg border border-gray-200 hover:shadow-xl transition-all duration-300 overflow-hidden snap-start">
                        <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Banquet"
                            class="w-full h-[160px] object-cover" />
                        <div class="bg-blue-600 text-white text-center px-5 py-5">
                            <p class="text-base font-semibold leading-snug mb-3">
                                Estate Agents For Residential Rental
                            </p>
                            <button
                                class="bg-white text-blue-600 font-semibold px-5 py-2 text-sm rounded-full hover:bg-blue-100 transition">
                                Enquire Now
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Related Articles -->
        <section class="w-full px-4 sm:px-6 lg:px-12 py-12 bg-white">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Related Articles</h2>
                <a href="#" class="text-blue-600 font-medium text-sm hover:underline">Explore more &rarr;</a>
            </div>

            <div class="relative">
                <!-- Horizontal Scroll Container -->
                <div class="flex space-x-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-smooth pb-3">

                    <!-- Card 1 -->
                    <div class="min-w-[280px] max-w-sm bg-white rounded-2xl shadow border snap-start overflow-hidden">
                        <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Jiu Jitsu"
                            class="w-full h-[180px] object-cover" />
                        <div class="p-4">
                            <h3 class="text-sm font-semibold text-gray-800 mb-2 leading-snug">
                                Channel All Your Power at These Top Brazilian Jiu Jitsu Classes in Mumbai
                            </h3>
                            <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Explore</a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="min-w-[280px] max-w-sm bg-white rounded-2xl shadow border snap-start overflow-hidden">
                        <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Ballet"
                            class="w-full h-[180px] object-cover" />
                        <div class="p-4">
                            <h3 class="text-sm font-semibold text-gray-800 mb-2 leading-snug">
                                Discover the Best Ballet Dance Classes in Mumbai for All Levels
                            </h3>
                            <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Explore</a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="min-w-[280px] max-w-sm bg-white rounded-2xl shadow border snap-start overflow-hidden">
                        <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Coolers"
                            class="w-full h-[180px] object-cover" />
                        <div class="p-4">
                            <h3 class="text-sm font-semibold text-gray-800 mb-2 leading-snug">
                                It's Summer Sippin' Good: The Best Summer Coolers in Mumbai
                            </h3>
                            <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Explore</a>
                        </div>
                    </div>

                    <!-- Add more cards here -->

                </div>
            </div>
        </section>

        <!-- Sunny Day Essentials -->
        <section class="w-full px-4 sm:px-6 lg:px-12 py-10">
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">

                <!-- Header -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-6 space-y-2 sm:space-y-0">
                    <div class="flex items-center space-x-3">
                        <h2 class="text-2xl font-semibold text-gray-800">Sunny Day Essentials</h2>
                        <span class="text-xs font-semibold bg-red-500 text-white px-2 py-1 rounded-md">SEASONAL</span>
                    </div>
                    <p class="text-sm text-gray-500">Discover wide range of summer collection</p>
                </div>

                <!-- Responsive Grid -->
                <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

                    <!-- Card -->
                    <div class="bg-white border rounded-xl shadow hover:shadow-md transition-all duration-300">
                        <img src="{{ asset('asset/images/declan-sun--ROm7yw7PqI-unsplash.jpg') }}" alt="AC"
                            class="w-full h-32 object-cover rounded-t-xl">
                        <div class="p-4 space-y-1">
                            <span class="text-xs text-gray-400 uppercase">Appliances</span>
                            <h3 class="font-semibold text-gray-800 text-base">AC Dealers</h3>
                            <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Explore &rarr;</a>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-white border rounded-xl shadow hover:shadow-md transition-all duration-300">
                        <img src="{{ asset('asset/images/harry-prabowo-hNmyXSH5g9Q-unsplash.jpg') }}" alt="Ice Cream"
                            class="w-full h-32 object-cover rounded-t-xl">
                        <div class="p-4 space-y-1">
                            <span class="text-xs text-gray-400 uppercase">Treats</span>
                            <h3 class="font-semibold text-gray-800 text-base">Ice Cream Parlours</h3>
                            <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Explore &rarr;</a>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-white border rounded-xl shadow hover:shadow-md transition-all duration-300">
                        <img src="{{ asset('asset/images/ozkan-guner-n-mGwFb0u4s-unsplash.jpg') }}" alt="Fan"
                            class="w-full h-32 object-cover rounded-t-xl">
                        <div class="p-4 space-y-1">
                            <span class="text-xs text-gray-400 uppercase">Cooling</span>
                            <h3 class="font-semibold text-gray-800 text-base">Fan Dealers</h3>
                            <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Explore &rarr;</a>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-white border rounded-xl shadow hover:shadow-md transition-all duration-300">
                        <img src="{{ asset('asset/images/kevin-jiner-GNywSmJYu3c-unsplash.jpg') }}" alt="AC AMC"
                            class="w-full h-32 object-cover rounded-t-xl">
                        <div class="p-4 space-y-1">
                            <span class="text-xs text-gray-400 uppercase">Services</span>
                            <h3 class="font-semibold text-gray-800 text-base">AC AMC</h3>
                            <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Explore &rarr;</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Latest Movies & Review -->
        <section class="w-full px-4 sm:px-6 lg:px-12 py-10">
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">

                <!-- Heading -->
                <div class="mb-6">
                    <h2 class="text-2xl font-semibold text-gray-800">Latest Movies & Review</h2>
                </div>

                <!-- Grid Layout -->
                <div class="grid gap-6 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">

                    <!-- Movie Card -->
                    <div
                        class="relative bg-white rounded-xl overflow-hidden shadow hover:shadow-md transition-all duration-300">
                        <img src="{{ asset('asset/images/robin-wersich-Q0IrpWQIMR4-unsplash.jpg') }}" alt="Jaat"
                            class="w-full h-48 object-cover">
                        <div class="p-3">
                            <h3 class="font-semibold text-sm text-gray-800 leading-snug">Jaat (Hindi Movie)</h3>
                            <p class="text-xs text-gray-500 mb-2">Hindi &bull; 2D</p>
                            <button
                                class="w-full bg-blue-100 text-blue-600 text-sm font-medium py-1 rounded hover:bg-blue-200 transition">Book
                                Now</button>
                        </div>
                    </div>

                    <!-- Movie Card -->
                    <div
                        class="relative bg-white rounded-xl overflow-hidden shadow hover:shadow-md transition-all duration-300">
                        <img src="{{ asset('asset/images/samuel-regan-asante-WuYSPm4XcU0-unsplash.jpg') }}"
                            alt="Sikandar" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white text-red-600 text-xs px-2 py-1 rounded-full shadow">
                            <i class="fa fa-thumbs-up mr-1"></i> 76%
                        </div>
                        <div class="p-3">
                            <h3 class="font-semibold text-sm text-gray-800 leading-snug">Sikandar (2025 Film) (Hindi Movie)
                            </h3>
                            <p class="text-xs text-gray-500 mb-2">Hindi &bull; 2D</p>
                            <button
                                class="w-full bg-blue-100 text-blue-600 text-sm font-medium py-1 rounded hover:bg-blue-200 transition">Book
                                Now</button>
                        </div>
                    </div>

                    <!-- Movie Card -->
                    <div
                        class="relative bg-white rounded-xl overflow-hidden shadow hover:shadow-md transition-all duration-300">
                        <img src="{{ asset('asset/images/shane-aldendorff-_jipKntR054-unsplash.jpg') }}" alt="Chhaava"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white text-red-600 text-xs px-2 py-1 rounded-full shadow">
                            <i class="fa fa-thumbs-up mr-1"></i> 90%
                        </div>
                        <div class="p-3">
                            <h3 class="font-semibold text-sm text-gray-800 leading-snug">Chhaava (Hindi Movie)</h3>
                            <p class="text-xs text-gray-500 mb-2">Hindi &bull; 2D</p>
                            <button
                                class="w-full bg-blue-100 text-blue-600 text-sm font-medium py-1 rounded hover:bg-blue-200 transition">Book
                                Now</button>
                        </div>
                    </div>

                    <!-- Movie Card -->
                    <div
                        class="relative bg-white rounded-xl overflow-hidden shadow hover:shadow-md transition-all duration-300">
                        <img src="{{ asset('asset/images/samuel-regan-asante-WuYSPm4XcU0-unsplash.jpg') }}"
                            alt="Minecraft" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white text-red-600 text-xs px-2 py-1 rounded-full shadow">
                            <i class="fa fa-thumbs-up mr-1"></i> 20%
                        </div>
                        <div class="p-3">
                            <h3 class="font-semibold text-sm text-gray-800 leading-snug">A Minecraft Movie</h3>
                            <p class="text-xs text-gray-500 mb-2">English &bull; 2D</p>
                            <button
                                class="w-full bg-blue-100 text-blue-600 text-sm font-medium py-1 rounded hover:bg-blue-200 transition">Book
                                Now</button>
                        </div>
                    </div>

                    <!-- Movie Card -->
                    <div
                        class="relative bg-white rounded-xl overflow-hidden shadow hover:shadow-md transition-all duration-300">
                        <img src="{{ asset('asset/images/bill-alexy-1vDN-XW6yow-unsplash.jpg') }}" alt="The Diplomat"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white text-red-600 text-xs px-2 py-1 rounded-full shadow">
                            <i class="fa fa-thumbs-up mr-1"></i> 60%
                        </div>
                        <div class="p-3">
                            <h3 class="font-semibold text-sm text-gray-800 leading-snug">The Diplomat (Hindi Movie)</h3>
                            <p class="text-xs text-gray-500 mb-2">Hindi &bull; 2D</p>
                            <button
                                class="w-full bg-blue-100 text-blue-600 text-sm font-medium py-1 rounded hover:bg-blue-200 transition">Book
                                Now</button>
                        </div>
                    </div>

                    <!-- Movie Card -->
                    <div
                        class="relative bg-white rounded-xl overflow-hidden shadow hover:shadow-md transition-all duration-300">
                        <img src="{{ asset('asset/images/cdc-VRpjDw3WqqI-unsplash.jpg') }}" alt="L2 Empuraan"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-white text-red-600 text-xs px-2 py-1 rounded-full shadow">
                            <i class="fa fa-thumbs-up mr-1"></i> 100%
                        </div>
                        <div class="p-3">
                            <h3 class="font-semibold text-sm text-gray-800 leading-snug">L2: Empuraan</h3>
                            <p class="text-xs text-gray-500 mb-2">Malayalam &bull; 2D</p>
                            <button
                                class="w-full bg-blue-100 text-blue-600 text-sm font-medium py-1 rounded hover:bg-blue-200 transition">Book
                                Now</button>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Top Rated Services -->
        <section class="container mx-auto px-4 py-10">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Top Rated Services</h2>
                <a href="#" class="text-yellow-500 hover:text-yellow-600">View All</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Business Card -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition">
                    <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Business"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg">Spice Garden Restaurant</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded">4.8 ★</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-2">Indian, Chinese, Continental</p>
                        <p class="text-gray-500 text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i> Koramangala,
                            Bangalore</p>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> Open Now</span>
                            <button class="text-yellow-500 hover:text-yellow-600"><i class="fas fa-phone-alt mr-1"></i>
                                Call
                                Now</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition">
                    <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Business"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg">Elite Home Services</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded">4.7 ★</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-2">Plumbing, Electrical, Carpentry</p>
                        <p class="text-gray-500 text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i> Indiranagar,
                            Bangalore</p>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> Open Now</span>
                            <button class="text-yellow-500 hover:text-yellow-600"><i class="fas fa-phone-alt mr-1"></i>
                                Call Now</button>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition">
                    <img src="{{ asset('asset/images/realstate.jpg') }}" alt="Business"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-lg">Dr. Sharma's Clinic</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded">4.9 ★</span>
                        </div>
                        <p class="text-gray-600 text-sm mb-2">Dentist, General Physician</p>
                        <p class="text-gray-500 text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i> HSR Layout,
                            Bangalore</p>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> Closed, Opens 9AM</span>
                            <button class="text-yellow-500 hover:text-yellow-600"><i class="fas fa-phone-alt mr-1"></i>
                                Call Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular Locations -->
        <section class="container mx-auto px-4 py-10">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Popular Locations</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Bangalore</h3>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Mumbai</h3>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Delhi</h3>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Chennai</h3>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Hyderabad</h3>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Kolkata</h3>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Pune</h3>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Ahmedabad</h3>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Jaipur</h3>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Chandigarh</h3>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Lucknow</h3>
                </div>
                <div class="bg-white shadow rounded-lg p-4 text-center hover:bg-yellow-50 transition">
                    <h3 class="font-medium">Kochi</h3>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="container mx-auto px-4 py-10">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">What Our Users Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/60/60" alt="User" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h4 class="font-semibold">Rajesh Kumar</h4>
                            <div class="text-yellow-500">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-gray-600">"Found an amazing plumber through JustDial who fixed my bathroom issues at a
                        reasonable price. The verified ratings helped me choose the right service."</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/60/60" alt="User" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h4 class="font-semibold">Priya Singh</h4>
                            <div class="text-yellow-500">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-gray-600">"JustDial has been my go-to app for finding services in my new city. Their
                        restaurant recommendations have never disappointed me!"</p>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex items-center mb-4">
                        <img src="/api/placeholder/60/60" alt="User" class="w-12 h-12 rounded-full">
                        <div class="ml-4">
                            <h4 class="font-semibold">Ahmed Khan</h4>
                            <div class="text-yellow-500">★★★★☆</div>
                        </div>
                    </div>
                    <p class="text-gray-600">"As a business owner, JustDial has helped me reach more customers. The
                        platform is easy to use and their customer support is excellent."</p>
                </div>
            </div>
        </section>

        <!-- App Download Section -->
        <section class="bg-gray-100 py-12">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-8 md:mb-0">
                        <h2 class="text-3xl font-bold mb-4">Download Our App</h2>
                        <p class="text-gray-600 mb-6">Get the JustDial experience on your mobile with our app. Find
                            services, book appointments, and get instant notifications.</p>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="bg-black text-white px-4 py-2 rounded-lg flex items-center hover:bg-gray-800">
                                <i class="fab fa-google-play text-2xl mr-2"></i>
                                <div>
                                    <p class="text-xs">GET IT ON</p>
                                    <p class="font-medium">Google Play</p>
                                </div>
                            </a>
                            <a href="#"
                                class="bg-black text-white px-4 py-2 rounded-lg flex items-center hover:bg-gray-800">
                                <i class="fab fa-apple text-2xl mr-2"></i>
                                <div>
                                    <p class="text-xs">DOWNLOAD ON THE</p>
                                    <p class="font-medium">App Store</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img src="/api/placeholder/600/400" alt="Mobile App" class="rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
