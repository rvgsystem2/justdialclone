@extends('layout.main')

@section('landingcontent')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
        }

        .font-serif {
            font-family: 'Cormorant Garamond', serif;
        }
    </style>

    <!-- Hero Section -->
    <section class="relative">
        <div class="bg-gradient-to-r from-amber-900/30 to-amber-700/30 absolute inset-0 z-10"></div>
        <div class="relative h-screen flex items-center justify-center"
            style="background: url('{{ asset('asset/landingimg/sample (1).jpg') }}') center/cover no-repeat;">
            <div class="container mx-auto px-4 z-20 text-center">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif font-bold text-white mb-6 leading-tight">Timeless
                    Elegance<br>Exquisite Craftsmanship</h1>
                <p class="text-lg md:text-xl text-white mb-8 max-w-2xl mx-auto">Discover our handcrafted collection of luxury
                    jewelry pieces that capture moments and create memories.</p>
                <div class="flex justify-center space-x-4">
                    <a href="#collection"
                        class="bg-amber-700 hover:bg-amber-800 text-white px-8 py-3 rounded-full transition duration-300 transform hover:-translate-y-1">Shop
                        Collection</a>
                    <a href="https://wa.me/919876543210" target="_blank"
                        class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full hover:bg-white hover:text-amber-800 transition duration-300 transform hover:-translate-y-1">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--Always Be On Trend Section -->
    <div class="bg-white">
        <div class="container mx-auto px-4 py-8 max-w-6xl">
            <!-- Heading -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-light text-gray-600 leading-tight">Always Be On Trend</h1>
                <h2 class="text-3xl md:text-4xl font-light text-gray-600 mt-2">With Unique Pieces</h2>
            </div>

            <!-- Image Gallery Grid -->
            <div class="grid grid-cols-12 gap-4">
                <!-- Left Column -->
                <div class="col-span-12 md:col-span-4 space-y-4">
                    <!-- Gold spatter design -->
                    <div class="relative h-32">
                        <div class="absolute right-0 top-0">
                            <svg class="h-32 w-32" viewBox="0 0 100 100">
                                <circle cx="70" cy="30" r="2" fill="#d4af37" />
                                <circle cx="60" cy="40" r="1" fill="#d4af37" />
                                <circle cx="80" cy="35" r="1.5" fill="#d4af37" />
                                <circle cx="75" cy="20" r="1" fill="#d4af37" />
                                <circle cx="65" cy="25" r="0.8" fill="#d4af37" />
                                <path d="M60,30 Q70,10 80,40" stroke="#d4af37" fill="none" stroke-width="0.5" />
                                <path d="M65,25 Q75,45 85,30" stroke="#d4af37" fill="none" stroke-width="0.5" />
                            </svg>
                        </div>
                    </div>

                    <!-- White embroidered jewelry -->
                    <div class="h-48 bg-gray-100 rounded overflow-hidden">
                        <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="White embroidered jewelry"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Person with layered necklaces -->
                    <div class="h-64 bg-gray-100 rounded overflow-hidden">
                        <img src="{{ asset('asset/landingimg/sample (2).jpg') }}" alt="Person wearing layered necklaces"
                            class="w-full h-full object-cover" />
                    </div>
                </div>

                <!-- Center Column -->
                <div class="col-span-12 md:col-span-5 space-y-4">
                    <!-- Main image: Hand holding rings -->
                    <div class="h-80 bg-gray-100 rounded overflow-hidden">
                        <img src="{{ asset('asset/landingimg/sample (3).jpg') }}" alt="Hand holding gold rings in sunlight"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Bottom two smaller images -->
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Person with star necklace -->
                        <div class="h-36 bg-gray-100 rounded overflow-hidden">
                            <img src="{{ asset('asset/landingimg/sample (4).jpg') }}" alt="Person wearing star necklace"
                                class="w-full h-full object-cover" />
                        </div>
                        <!-- Marble cube with earrings -->
                        <div class="h-36 bg-gray-100 rounded overflow-hidden">
                            <img src="{{ asset('asset/landingimg/sample (5).jpg') }}" alt="Marble display with earrings"
                                class="w-full h-full object-cover" />
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-span-12 md:col-span-3 space-y-4">
                    <!-- Book with gold ring -->
                    <div class="h-48 bg-gray-100 rounded overflow-hidden">
                        <img src="{{ asset('asset/landingimg/sample (6).jpg') }}" alt="Gold ring on an open book"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Gold chain bracelet -->
                    <div class="h-36 bg-gray-100 rounded overflow-hidden">
                        <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Gold chain bracelet"
                            class="w-full h-full object-cover" />
                    </div>

                    <!-- Gold design element -->
                    <div class="relative h-48">
                        <div class="absolute bottom-0 right-0">
                            <svg class="h-48 w-48" viewBox="0 0 100 100">
                                <circle cx="80" cy="70" r="2" fill="#d4af37" />
                                <circle cx="70" cy="80" r="1" fill="#d4af37" />
                                <circle cx="65" cy="65" r="1.5" fill="#d4af37" />
                                <circle cx="85" cy="75" r="1" fill="#d4af37" />
                                <circle cx="75" cy="60" r="0.8" fill="#d4af37" />
                                <path d="M70,60 Q90,70 60,80" stroke="#d4af37" fill="none" stroke-width="0.5" />
                                <path d="M80,70 Q60,80 90,90" stroke="#d4af37" fill="none" stroke-width="0.5" />
                                <circle cx="90" cy="85" r="1" fill="#d4af37" />
                                <circle cx="60" cy="75" r="1.2" fill="#d4af37" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Collection -->
    <section id="collection" class="py-16 md:py-24 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-amber-800 mb-4">Featured Collection</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Explore our curated selection of exquisite jewelry pieces
                    crafted
                    with the finest materials and unparalleled attention to detail.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Diamond Necklace"
                            class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-amber-600 text-white text-sm px-2 py-1 rounded">New</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-serif font-semibold text-gray-800 mb-2">Celestial Diamond Necklace</h3>
                        <p class="text-gray-600 mb-4">18k gold chain with 0.5 carat diamond pendant, perfect for special
                            occasions.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-semibold text-amber-800">₹2,499</span>
                            <button
                                onclick="window.location.href='https://wa.me/1234567890?text=Hello,%20I%20am%20interested%20in%20your%20details.%20Please%20provide%20more%20information.'"
                                class="bg-amber-700 hover:bg-amber-800 text-white px-4 py-2 rounded-full transition duration-300">
                                See Details
                            </button>

                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('asset/landingimg/sample (2).jpg') }}" alt="Ruby Earrings"
                            class="w-full h-64 object-cover">
                        <div class="absolute top-4 right-4 bg-red-600 text-white text-sm px-2 py-1 rounded">Sale</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-serif font-semibold text-gray-800 mb-2">Ruby Teardrop Earrings</h3>
                        <p class="text-gray-600 mb-4">Elegant white gold earrings featuring natural ruby gemstones with
                            diamond accents.</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-xl font-semibold text-amber-800">₹1,799</span>
                                <span class="text-sm text-gray-500 line-through ml-2">₹2,199</span>
                            </div>
                            <button
                                onclick="window.location.href='https://wa.me/1234567890?text=Hello,%20I%20am%20interested%20in%20your%20details.%20Please%20provide%20more%20information.'"
                                class="bg-amber-700 hover:bg-amber-800 text-white px-4 py-2 rounded-full transition duration-300">
                                See Details
                            </button>

                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div
                    class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-2">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('asset/landingimg/sample (3).jpg') }}" alt="Sapphire Ring"
                            class="w-full h-64 object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-serif font-semibold text-gray-800 mb-2">Sapphire Halo Ring</h3>
                        <p class="text-gray-600 mb-4">Stunning platinum ring with center blue sapphire surrounded by
                            brilliant diamonds.</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xl font-semibold text-amber-800">₹3,250</span>
                            <button
                                onclick="window.location.href='https://wa.me/1234567890?text=Hello,%20I%20am%20interested%20in%20your%20details.%20Please%20provide%20more%20information.'"
                                class="bg-amber-700 hover:bg-amber-800 text-white px-4 py-2 rounded-full transition duration-300">
                                See Details
                            </button>

                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block border-2 border-amber-700 text-amber-700 hover:bg-amber-700 hover:text-white px-8 py-3 rounded-full transition duration-300">
                    View All Collection
                </a>
            </div>
        </div>
    </section>

    <div class="bg-white font-sans">
        <div class="container mx-auto px-4 py-12">
            <div class="flex flex-col md:flex-row gap-12">
                <!-- Left Side - Hero Image with Text Overlay -->
                <div class="md:w-1/2 relative rounded-xl overflow-hidden shadow-lg h-96 md:h-auto">
                    <img src="{{ asset('asset/landingimg/bg-landing.jpg') }}" alt="Hand wearing elegant jewelry"
                        class="w-full h-full object-cover" />
                    <div
                        class="absolute inset-0 bg-opacity-40 flex flex-col justify-center items-center text-white text-center px-6">
                        <h2 class="text-2xl md:text-3xl font-light leading-snug mb-4">
                            A collection of<br>
                            <span class="font-semibold">signature styles</span> for a<br>
                            timeless finish
                        </h2>
                        <button
                            class="mt-3 px-6 py-2 text-sm border border-white text-white rounded-full hover:bg-white hover:text-black transition-all duration-300 shadow-md">
                            Explore
                        </button>
                    </div>
                </div>

                <!-- Right Side - Product Grid -->
                <div class="md:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <!-- Product 1 -->
                    <div
                        class="bg-gray-50 rounded-xl shadow-md p-4 hover:shadow-lg transition-all duration-300 flex flex-col items-center text-center">
                        <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Gold pendant necklace"
                            class="w-full h-60 object-contain rounded-md" />
                        <h3 class="text-gray-700 font-light text-lg mt-4">Duis viverra</h3>
                        <p class="text-black font-semibold mt-1">₹4,11,348</p>
                        <button
                            class="mt-3 px-5 py-2 text-sm border border-gray-400 text-gray-700 rounded-full hover:bg-gray-200 transition-all">
                            See Details
                        </button>
                    </div>

                    <!-- Product 2 -->
                    <div
                        class="bg-gray-50 rounded-xl shadow-md p-4 hover:shadow-lg transition-all duration-300 flex flex-col items-center text-center">
                        <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Gold earrings"
                            class="w-full h-60 object-contain rounded-md" />
                        <h3 class="text-gray-700 font-light text-lg mt-4">Duis viverra</h3>
                        <p class="text-black font-semibold mt-1">₹4,11,348</p>
                        <button
                            class="mt-3 px-5 py-2 text-sm border border-gray-400 text-gray-700 rounded-full hover:bg-gray-200 transition-all">
                            See Details
                        </button>
                    </div>

                    <!-- Product 3 -->
                    <div
                        class="bg-gray-50 rounded-xl shadow-md p-4 hover:shadow-lg transition-all duration-300 flex flex-col items-center text-center">
                        <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Gold bracelet"
                            class="w-full h-60 object-contain rounded-md" />
                        <h3 class="text-gray-700 font-light text-lg mt-4">Duis viverra</h3>
                        <p class="text-black font-semibold mt-1">₹4,11,348</p>
                        <button
                            class="mt-3 px-5 py-2 text-sm border border-gray-400 text-gray-700 rounded-full hover:bg-gray-200 transition-all">
                            See Details
                        </button>
                    </div>

                    <!-- Product 4 -->
                    <div
                        class="bg-gray-50 rounded-xl shadow-md p-4 hover:shadow-lg transition-all duration-300 flex flex-col items-center text-center">
                        <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Gold hoops"
                            class="w-full h-60 object-contain rounded-md" />
                        <h3 class="text-gray-700 font-light text-lg mt-4">Duis viverra</h3>
                        <p class="text-black font-semibold mt-1">₹4,11,348</p>
                        <button
                            class="mt-3 px-5 py-2 text-sm border border-gray-400 text-gray-700 rounded-full hover:bg-gray-200 transition-all">
                            See Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Luxury Experience -->
    <section class="py-16 md:py-24 bg-amber-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-amber-800 mb-6">The Luxury Experience</h2>
                    <p class="text-gray-700 mb-6">At Elegance Jewels, we believe that every piece of jewelry tells a story.
                        Our master craftsmen bring decades of experience to create timeless pieces that can be cherished for
                        generations.</p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Ethically sourced materials and gemstones</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Free lifetime cleaning and maintenance</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-amber-600 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Custom design services available</span>
                        </li>
                    </ul>
                    <div class="mt-8">
                        <a href="#"
                            class="bg-amber-700 hover:bg-amber-800 text-white px-6 py-3 rounded-full inline-block transition duration-300">
                            Book Consultation
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="{{ asset('asset/landingimg/sample (4).jpg') }}" alt="Jewelry Crafting"
                        class="rounded-lg shadow-lg h-full object-cover">
                    <div class="grid grid-rows-2 gap-4">
                        <img src="{{ asset('asset/landingimg/sample (5).jpg') }}" alt="Diamond Selection"
                            class="rounded-lg shadow-lg h-full object-cover">
                        <img src="{{ asset('asset/landingimg/sample (6).jpg') }}" alt="Jewelry Workshop"
                            class="rounded-lg shadow-lg h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-amber-800 mb-4">Browse by Category</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Explore our extensive collection of fine jewelry organized by
                    category to find your perfect piece.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Category 1 -->
                <div class="group relative rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Rings"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-serif font-semibold mb-1">Rings</h3>
                        <p class="text-sm opacity-80">30+ Designs</p>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="group relative rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('asset/landingimg/sample (2).jpg') }}" alt="Necklaces"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-serif font-semibold mb-1">Necklaces</h3>
                        <p class="text-sm opacity-80">25+ Designs</p>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="group relative rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('asset/landingimg/sample (3).jpg') }}" alt="Earrings"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-serif font-semibold mb-1">Earrings</h3>
                        <p class="text-sm opacity-80">40+ Designs</p>
                    </div>
                </div>

                <!-- Category 4 -->
                <div class="group relative rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <img src="{{ asset('asset/landingimg/sample (4).jpg') }}" alt="Bracelets"
                        class="w-full h-64 object-cover group-hover:scale-110 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white">
                        <h3 class="text-xl font-serif font-semibold mb-1">Bracelets</h3>
                        <p class="text-sm opacity-80">20+ Designs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusts -->
    <section class="py-12 text-center bg-white">
        <div class="container mx-auto px-4 flex flex-col sm:flex-row sm:justify-around sm:items-center gap-6">

            <div>
                <span class="material-symbols-outlined text-4xl text-amber-800 mb-2">credit_card</span>
                <p class="text-sm text-gray-700">100% Secure Payment</p>
            </div>

            <div>
                <span class="material-symbols-outlined text-4xl text-amber-800 mb-2">verified</span>
                <p class="text-sm text-gray-700">Authentic Certified Jewelry</p>
            </div>

            <div>
                <span class="material-symbols-outlined text-4xl text-amber-800 mb-2">local_shipping</span>
                <p class="text-sm text-gray-700">Free Worldwide Shipping</p>
            </div>

            <div>
                <span class="material-symbols-outlined text-4xl text-amber-800 mb-2">support_agent</span>
                <p class="text-sm text-gray-700">24/7 Customer Support</p>
            </div>

        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 md:py-24 bg-gray-100 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-amber-800 mb-4">Client Stories</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">See what our clients have to say about their experience with
                    Elegance Jewels.</p>
            </div>

            <div class="relative overflow-hidden">
                <div id="testimonial-wrapper" class="w-full overflow-hidden">
                    <div id="testimonial-track" class="flex transition-transform duration-700 ease-in-out">
                        <!-- Testimonial 1 -->
                        <div class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0 px-4 box-border">
                            <div class="bg-white p-8 rounded-lg shadow-md h-full">
                                <div class="flex items-center mb-4 text-amber-500">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <p class="text-gray-700 mb-6">"I purchased an engagement ring from Elegance Jewels and was
                                    blown away by the quality and craftsmanship. My fiancée absolutely loves it!"</p>
                                <div class="flex items-center">
                                    <img src="/api/placeholder/60/60" alt="Client"
                                        class="w-12 h-12 rounded-full object-cover">
                                    <div class="ml-4">
                                        <h4 class="font-semibold text-gray-800">Michael Thomas</h4>
                                        <p class="text-gray-500 text-sm">New York, NY</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0 px-4 box-border">
                            <div class="bg-white p-8 rounded-lg shadow-md h-full">
                                <div class="flex items-center mb-4 text-amber-500">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                                <p class="text-gray-700 mb-6">"The custom anniversary bracelet I ordered exceeded all
                                    expectations. The attention to detail and personal service made all the difference."</p>
                                <div class="flex items-center">
                                    <img src="/api/placeholder/60/60" alt="Client"
                                        class="w-12 h-12 rounded-full object-cover">
                                    <div class="ml-4">
                                        <h4 class="font-semibold text-gray-800">Jennifer Rodriguez</h4>
                                        <p class="text-gray-500 text-sm">Los Angeles, CA</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0 px-4 box-border">
                            <div class="bg-white p-8 rounded-lg shadow-md h-full">
                                <div class="flex items-center mb-4 text-amber-500">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                                <p class="text-gray-700 mb-6">"I've been a loyal customer for years. Their pieces are
                                    timeless and the quality is unmatched. The compliments I receive are endless!"</p>
                                <div class="flex items-center">
                                    <img src="/api/placeholder/60/60" alt="Client"
                                        class="w-12 h-12 rounded-full object-cover">
                                    <div class="ml-4">
                                        <h4 class="font-semibold text-gray-800">Sarah Johnson</h4>
                                        <p class="text-gray-500 text-sm">Chicago, IL</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="w-full sm:w-1/2 md:w-1/3 flex-shrink-0 px-4 box-border">
                            <div class="bg-white p-8 rounded-lg shadow-md h-full">
                                <div class="flex items-center mb-4 text-amber-500">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                                <p class="text-gray-700 mb-6">"Their support team helped me design a custom necklace. The
                                    result was breathtaking!"</p>
                                <div class="flex items-center">
                                    <img src="/api/placeholder/60/60" alt="Client"
                                        class="w-12 h-12 rounded-full object-cover">
                                    <div class="ml-4">
                                        <h4 class="font-semibold text-gray-800">Emily Davis</h4>
                                        <p class="text-gray-500 text-sm">Houston, TX</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Dots -->
                <div class="flex justify-center space-x-2 mt-6">
                    <button onclick="prevTestimonial()"
                        class="w-3 h-3 rounded-full bg-gray-400 hover:bg-amber-500"></button>
                    <button onclick="nextTestimonial()"
                        class="w-3 h-3 rounded-full bg-gray-400 hover:bg-amber-500"></button>
                </div>
            </div>
        </div>
    </section>

    <script>
        const track = document.getElementById("testimonial-track");
        let testimonialsPerSlide = 1; // Default to 1 per slide on mobile
        let totalSlides = Math.ceil(track.children.length / testimonialsPerSlide);
        let currentSlide = 0;

        // Dynamically set width of track and each testimonial item
        function updateSlideWidth() {
            if (window.innerWidth >= 768) {
                testimonialsPerSlide = 3; // 3 testimonials per slide on larger screens
            } else {
                testimonialsPerSlide = 1; // 1 testimonial per slide on mobile
            }

            totalSlides = Math.ceil(track.children.length / testimonialsPerSlide);
            track.style.width = `${(100 / testimonialsPerSlide) * track.children.length}%`;

            // Adjust the width of each testimonial item
            for (const child of track.children) {
                child.style.width = `${100 / track.children.length}%`;
            }
            showTestimonial(currentSlide); // Update the displayed slide
        }

        // Function to show a specific testimonial slide
        function showTestimonial(slideIndex) {
            currentSlide = (slideIndex + totalSlides) % totalSlides;
            const shift = currentSlide * (100 / totalSlides);
            track.style.transform = `translateX(-${shift}%)`;
        }

        function nextTestimonial() {
            showTestimonial(currentSlide + 1);
        }

        function prevTestimonial() {
            showTestimonial(currentSlide - 1);
        }

        // Auto Slide every 5 seconds
        setInterval(() => {
            nextTestimonial();
        }, 5000);

        // Adjust the layout when the window is resized
        window.addEventListener('resize', updateSlideWidth);
        // Initial call to set up the layout
        updateSlideWidth();
    </script>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-100">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl font-semibold text-amber-800 text-center mb-10">Frequently Asked Questions</h2>

            <div class="space-y-4" id="faqContainer">

                <!-- FAQ Item -->
                <div class="bg-white rounded-xl shadow-md p-5 cursor-pointer faq-item">
                    <div class="flex justify-between items-center faq-question">
                        <span class="text-lg font-medium text-gray-800">Is your jewelry certified?</span>
                        <span class="material-symbols-outlined text-amber-800 toggle-icon">expand_more</span>
                    </div>
                    <div class="faq-answer mt-3 text-gray-600 hidden">
                        Yes, all our jewelry pieces come with authenticity certification from reputed agencies.
                    </div>
                </div>

                <!-- FAQ Item -->
                <div class="bg-white rounded-xl shadow-md p-5 cursor-pointer faq-item">
                    <div class="flex justify-between items-center faq-question">
                        <span class="text-lg font-medium text-gray-800">Do you offer international shipping?</span>
                        <span class="material-symbols-outlined text-amber-800 toggle-icon">expand_more</span>
                    </div>
                    <div class="faq-answer mt-3 text-gray-600 hidden">
                        Yes, we offer free worldwide shipping with tracking and insurance.
                    </div>
                </div>

                <!-- FAQ Item -->
                <div class="bg-white rounded-xl shadow-md p-5 cursor-pointer faq-item">
                    <div class="flex justify-between items-center faq-question">
                        <span class="text-lg font-medium text-gray-800">What payment methods are accepted?</span>
                        <span class="material-symbols-outlined text-amber-800 toggle-icon">expand_more</span>
                    </div>
                    <div class="faq-answer mt-3 text-gray-600 hidden">
                        We accept credit/debit cards, UPI, PayPal, and all major payment gateways securely.
                    </div>
                </div>

                <!-- FAQ Item -->
                <div class="bg-white rounded-xl shadow-md p-5 cursor-pointer faq-item">
                    <div class="flex justify-between items-center faq-question">
                        <span class="text-lg font-medium text-gray-800">Can I return or exchange my order?</span>
                        <span class="material-symbols-outlined text-amber-800 toggle-icon">expand_more</span>
                    </div>
                    <div class="faq-answer mt-3 text-gray-600 hidden">
                        Yes, you can return or exchange within 7 days of delivery, no questions asked.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- contact form -->
    <section class="py-16 bg-white">
        <div class="w-full px-4 md:px-16 lg:px-32">
            <div class="bg-gray-50 p-8 rounded-2xl shadow-xl">
                <h2 class="text-3xl font-semibold text-amber-800 mb-6 text-center">Get in Touch</h2>

                <form action="#" method="POST" class="space-y-6">

                    <!-- Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-600 mb-1">Full Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-amber-800 transition">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-600 mb-1">Email Address</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-amber-800 transition">
                    </div>

                    <!-- Phone Number -->
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-600 mb-1">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-amber-800 transition">
                    </div>

                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-600 mb-1">Your Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-amber-800 transition resize-none"></textarea>
                    </div>

                    <!-- Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="bg-amber-800 text-white px-8 py-3 rounded-full font-medium hover:bg-amber-700 transition duration-300 shadow-md">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-amber-800 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-serif font-bold mb-6">Join Our Exclusive List</h2>
                <p class="mb-8">Subscribe to receive updates on new collections, special offers, and jewelry care tips.
                </p>
                <form class="flex flex-col md:flex-row gap-4 justify-center">
                    <input type="email" placeholder="Your email address"
                        class="px-6 py-3 rounded-full text-white bg-amber-800 placeholder-white focus:outline-none focus:ring-2 focus:ring-white flex-grow max-w-md">
                    <button type="submit"
                        class="bg-amber-600 hover:bg-amber-700 px-8 py-3 rounded-full transition duration-300 whitespace-nowrap">
                        Subscribe Now
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <!-- FAQ JS -->
    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.toggle-icon');

                answer.classList.toggle('hidden');
                icon.textContent = answer.classList.contains('hidden') ? 'expand_more' : 'expand_less';
            });
        });
    </script>
@endsection
