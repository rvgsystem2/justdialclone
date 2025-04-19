@extends('layout.main')

@section('landingcontent')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-rose-900 to-rose-700 text-white overflow-hidden">
        <!-- Hero Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="/api/placeholder/1920/1080" alt="Luxury Jewelry Collection"
                class="w-full h-full object-cover opacity-20">
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 py-32 relative z-10">
            <div class="max-w-2xl text-center mx-auto">
                <div class="flex items-center justify-center mb-4">
                    <span class="material-icons text-4xl mr-2">diamond</span>
                    <h1 class="text-5xl md:text-6xl font-serif font-light">Timeless Elegance</h1>
                </div>
                <p class="text-xl md:text-2xl mb-8 font-light flex items-center justify-center">
                    <span class="material-icons mr-2">star</span>
                    Handcrafted jewelry for life's precious moments
                </p>
                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#collections"
                        class="flex items-center px-8 py-3 bg-white text-rose-800 hover:bg-rose-50 transition duration-300 text-sm uppercase tracking-wider font-medium rounded-full">
                        <span class="material-icons mr-2">collections</span>
                        Explore Collection
                    </a>
                    <a href="#contact"
                        class="flex items-center px-8 py-3 border border-white hover:bg-white hover:text-rose-800 transition duration-300 text-sm uppercase tracking-wider font-medium rounded-full">
                        <span class="material-icons mr-2">schedule</span>
                        Book Appointment
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Jewelry Product Templates Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-serif inline-flex items-center">
                    <span class="material-icons mr-3 text-4xl text-rose-600">grid_view</span>
                    Jewelry Display Templates
                </h2>
                <p class="text-rose-800/70 mt-3">Select from elegant layouts to showcase your jewelry collection</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Classic Gallery -->
                <div class="group bg-rose-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="relative h-64">
                        <img src="/api/placeholder/600/400" alt="Classic Gallery"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent flex items-end p-6">
                            <span class="material-icons text-white text-4xl">collections</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-medium text-rose-900 mb-2">Classic Gallery</h3>
                        <p class="text-rose-700/80 mb-4">Grid layout with large image previews</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-rose-600 hover:text-rose-800 font-medium flex items-center">
                                Preview
                                <span class="material-icons ml-1">visibility</span>
                            </a>
                            <button class="px-4 py-2 bg-rose-600 text-white rounded-full text-sm hover:bg-rose-700 transition">
                                Select Template
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modern Carousel -->
                <div class="group bg-rose-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="relative h-64">
                        <img src="/api/placeholder/600/400" alt="Modern Carousel"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent flex items-end p-6">
                            <span class="material-icons text-white text-4xl">slideshow</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-medium text-rose-900 mb-2">Modern Carousel</h3>
                        <p class="text-rose-700/80 mb-4">Slider-based product highlights</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-rose-600 hover:text-rose-800 font-medium flex items-center">
                                Preview
                                <span class="material-icons ml-1">visibility</span>
                            </a>
                            <button class="px-4 py-2 bg-rose-600 text-white rounded-full text-sm hover:bg-rose-700 transition">
                                Select Template
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Zoom Focus -->
                <div class="group bg-rose-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="relative h-64">
                        <img src="/api/placeholder/600/400" alt="Zoom Focus"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent flex items-end p-6">
                            <span class="material-icons text-white text-4xl">zoom_in</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-medium text-rose-900 mb-2">Zoom Focus</h3>
                        <p class="text-rose-700/80 mb-4">Detailed zoom for product clarity</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-rose-600 hover:text-rose-800 font-medium flex items-center">
                                Preview
                                <span class="material-icons ml-1">visibility</span>
                            </a>
                            <button class="px-4 py-2 bg-rose-600 text-white rounded-full text-sm hover:bg-rose-700 transition">
                                Select Template
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Feature Grid -->
                <div class="group bg-rose-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="relative h-64">
                        <img src="/api/placeholder/600/400" alt="Feature Grid"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent flex items-end p-6">
                            <span class="material-icons text-white text-4xl">view_module</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-medium text-rose-900 mb-2">Feature Grid</h3>
                        <p class="text-rose-700/80 mb-4">Showcase bestsellers & offers</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-rose-600 hover:text-rose-800 font-medium flex items-center">
                                Preview
                                <span class="material-icons ml-1">visibility</span>
                            </a>
                            <button class="px-4 py-2 bg-rose-600 text-white rounded-full text-sm hover:bg-rose-700 transition">
                                Select Template
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Catalog Scroll -->
                <div class="group bg-rose-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="relative h-64">
                        <img src="/api/placeholder/600/400" alt="Catalog Scroll"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent flex items-end p-6">
                            <span class="material-icons text-white text-4xl">horizontal_rule</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-medium text-rose-900 mb-2">Catalog Scroll</h3>
                        <p class="text-rose-700/80 mb-4">Horizontal scroll for product sets</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-rose-600 hover:text-rose-800 font-medium flex items-center">
                                Preview
                                <span class="material-icons ml-1">visibility</span>
                            </a>
                            <button class="px-4 py-2 bg-rose-600 text-white rounded-full text-sm hover:bg-rose-700 transition">
                                Select Template
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Full Showcase -->
                <div class="group bg-rose-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="relative h-64">
                        <img src="/api/placeholder/600/400" alt="Full Showcase"
                            class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent flex items-end p-6">
                            <span class="material-icons text-white text-4xl">inventory_2</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-medium text-rose-900 mb-2">Full Showcase</h3>
                        <p class="text-rose-700/80 mb-4">Best for ecommerce jewelry display</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-rose-600 hover:text-rose-800 font-medium flex items-center">
                                Preview
                                <span class="material-icons ml-1">visibility</span>
                            </a>
                            <button class="px-4 py-2 bg-rose-600 text-white rounded-full text-sm hover:bg-rose-700 transition">
                                Select Template
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="py-20 bg-rose-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-serif inline-flex items-center justify-center">
                    <span class="material-icons mr-3 text-4xl text-rose-600">category</span>
                    Our Collections
                </h2>
                <p class="text-rose-800/70 mt-3">Discover our carefully curated jewelry categories</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="collections">
                <!-- Category 1 -->
                <div class="group relative overflow-hidden cursor-pointer rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <img src="/api/placeholder/600/800" alt="Rings Collection"
                        class="w-full h-96 object-cover transition duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-rose-900/70 via-rose-900/30 to-transparent flex items-end p-6">
                        <div class="w-full">
                            <div class="flex items-center mb-2">
                                <span class="material-icons mr-2 text-white">ring_volume</span>
                                <h3 class="text-xl font-medium text-white">Rings</h3>
                            </div>
                            <p class="text-rose-100 mb-4">Symbols of love and commitment</p>
                            <a href="#" class="inline-flex items-center text-white font-medium">
                                View Collection
                                <span class="material-icons ml-1">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div class="group relative overflow-hidden cursor-pointer rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <img src="/api/placeholder/600/800" alt="Necklaces Collection"
                        class="w-full h-96 object-cover transition duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-rose-900/70 via-rose-900/30 to-transparent flex items-end p-6">
                        <div class="w-full">
                            <div class="flex items-center mb-2">
                                <span class="material-icons mr-2 text-white">checkroom</span>
                                <h3 class="text-xl font-medium text-white">Necklaces</h3>
                            </div>
                            <p class="text-rose-100 mb-4">Elegant pieces for every occasion</p>
                            <a href="#" class="inline-flex items-center text-white font-medium">
                                View Collection
                                <span class="material-icons ml-1">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div class="group relative overflow-hidden cursor-pointer rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <img src="/api/placeholder/600/800" alt="Earrings Collection"
                        class="w-full h-96 object-cover transition duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-rose-900/70 via-rose-900/30 to-transparent flex items-end p-6">
                        <div class="w-full">
                            <div class="flex items-center mb-2">
                                <span class="material-icons mr-2 text-white">hearing</span>
                                <h3 class="text-xl font-medium text-white">Earrings</h3>
                            </div>
                            <p class="text-rose-100 mb-4">Subtle sparkle or bold statements</p>
                            <a href="#" class="inline-flex items-center text-white font-medium">
                                View Collection
                                <span class="material-icons ml-1">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Gallery -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <div class="flex items-center">
                    <span class="material-icons text-4xl mr-3 text-rose-600">featured_play_list</span>
                    <h2 class="text-3xl font-serif">Featured Pieces</h2>
                </div>
                <div class="mt-4 md:mt-0">
                    <ul class="flex flex-wrap gap-4 md:gap-6">
                        <li>
                            <button class="flex items-center px-4 py-2 rounded-full bg-rose-600 text-white text-sm uppercase tracking-wider font-medium gallery-filter active"
                                data-filter="all">
                                <span class="material-icons mr-1 text-sm">apps</span>
                                All
                            </button>
                        </li>
                        <li>
                            <button class="flex items-center px-4 py-2 rounded-full hover:bg-rose-50 text-rose-800 text-sm uppercase tracking-wider font-medium gallery-filter"
                                data-filter="rings">
                                <span class="material-icons mr-1 text-sm">ring_volume</span>
                                Rings
                            </button>
                        </li>
                        <li>
                            <button class="flex items-center px-4 py-2 rounded-full hover:bg-rose-50 text-rose-800 text-sm uppercase tracking-wider font-medium gallery-filter"
                                data-filter="necklaces">
                                <span class="material-icons mr-1 text-sm">checkroom</span>
                                Necklaces
                            </button>
                        </li>
                        <li>
                            <button class="flex items-center px-4 py-2 rounded-full hover:bg-rose-50 text-rose-800 text-sm uppercase tracking-wider font-medium gallery-filter"
                                data-filter="earrings">
                                <span class="material-icons mr-1 text-sm">hearing</span>
                                Earrings
                            </button>
                        </li>
                        <li>
                            <button class="flex items-center px-4 py-2 rounded-full hover:bg-rose-50 text-rose-800 text-sm uppercase tracking-wider font-medium gallery-filter"
                                data-filter="bracelets">
                                <span class="material-icons mr-1 text-sm">watch</span>
                                Bracelets
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="product-gallery">
                <!-- Product 1 -->
                <div class="group product-item bg-rose-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300"
                    data-category="rings">
                    <div class="relative overflow-hidden">
                        <img src="/api/placeholder/600/600" alt="Diamond Engagement Ring"
                            class="w-full aspect-square object-cover">
                        <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-2">
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">favorite</span>
                                </button>
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">search</span>
                                </button>
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4 bg-white rounded-full w-10 h-10 flex items-center justify-center shadow-md">
                            <span class="material-icons text-rose-500">star</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-rose-900">Radiant Solitaire</h3>
                                <p class="text-rose-700/80">Diamond Engagement Ring</p>
                            </div>
                            <span class="material-icons text-rose-400 hover:text-rose-600">compare_arrows</span>
                        </div>
                        <div class="mt-3 flex justify-between items-center">
                            <p class="text-lg font-bold text-rose-900">$3,499</p>
                            <div class="flex items-center text-rose-500">
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star_half</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="group product-item bg-rose-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300"
                    data-category="necklaces">
                    <div class="relative overflow-hidden">
                        <img src="/api/placeholder/600/600" alt="Sapphire Pendant"
                            class="w-full aspect-square object-cover">
                        <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-2">
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">favorite</span>
                                </button>
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">search</span>
                                </button>
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-rose-900">Ocean Blue</h3>
                                <p class="text-rose-700/80">Sapphire Pendant Necklace</p>
                            </div>
                            <span class="material-icons text-rose-400 hover:text-rose-600">compare_arrows</span>
                        </div>
                        <div class="mt-3 flex justify-between items-center">
                            <p class="text-lg font-bold text-rose-900">$2,799</p>
                            <div class="flex items-center text-rose-500">
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="group product-item bg-rose-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300"
                    data-category="earrings">
                    <div class="relative overflow-hidden">
                        <img src="/api/placeholder/600/600" alt="Pearl Drop Earrings"
                            class="w-full aspect-square object-cover">
                        <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-2">
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">favorite</span>
                                </button>
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">search</span>
                                </button>
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                        <div class="absolute top-4 left-4 bg-rose-600 text-white text-xs px-2 py-1 rounded">SALE</div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-rose-900">Lunar Pearl</h3>
                                <p class="text-rose-700/80">Pearl Drop Earrings</p>
                            </div>
                            <span class="material-icons text-rose-400 hover:text-rose-600">compare_arrows</span>
                        </div>
                        <div class="mt-3 flex justify-between items-center">
                            <div>
                                <p class="text-lg font-bold text-rose-900">$1,299</p>
                                <p class="text-sm text-rose-600 line-through">$1,599</p>
                            </div>
                            <div class="flex items-center text-rose-500">
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star_border</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="group product-item bg-rose-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300"
                    data-category="bracelets">
                    <div class="relative overflow-hidden">
                        <img src="/api/placeholder/600/600" alt="Gold Tennis Bracelet"
                            class="w-full aspect-square object-cover">
                        <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-2">
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">favorite</span>
                                </button>
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">search</span>
                                </button>
                                <button class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium text-rose-900">Golden Cascade</h3>
                                <p class="text-rose-700/80">18K Gold Tennis Bracelet</p>
                            </div>
                            <span class="material-icons text-rose-400 hover:text-rose-600">compare_arrows</span>
                        </div>
                        <div class="mt-3 flex justify-between items-center">
                            <p class="text-lg font-bold text-rose-900">$4,199</p>
                            <div class="flex items-center text-rose-500">
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star_half</span>
                                <span class="material-icons text-sm">star_border</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 border border-rose-800 text-rose-800 rounded-full hover:bg-rose-800 hover:text-white transition duration-300 font-medium">
                    View All Products
                    <span class="material-icons ml-2">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Craftsmanship Section -->
    <section class="py-20 bg-rose-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <div class="flex items-center mb-6">
                        <span class="material-icons text-4xl mr-3 text-rose-600">handyman</span>
                        <h2 class="text-3xl font-serif">Artisan Craftsmanship</h2>
                    </div>
                    <div class="space-y-4">
                        <div class="flex">
                            <span class="material-icons text-rose-600 mr-3">check_circle</span>
                            <p class="text-rose-900/80">Each piece is meticulously crafted by master jewelers with decades of experience.</p>
                        </div>
                        <div class="flex">
                            <span class="material-icons text-rose-600 mr-3">check_circle</span>
                            <p class="text-rose-900/80">We use only ethically sourced gemstones and recycled precious metals.</p>
                        </div>
                        <div class="flex">
                            <span class="material-icons text-rose-600 mr-3">check_circle</span>
                            <p class="text-rose-900/80">Traditional techniques meet modern innovation in our design process.</p>
                        </div>
                    </div>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#"
                            class="inline-flex items-center px-6 py-3 bg-rose-700 text-white hover:bg-rose-800 transition duration-300 rounded-full text-sm uppercase tracking-wider font-medium">
                            <span class="material-icons mr-2">precision_manufacturing</span>
                            Our Process
                        </a>
                        <a href="#"
                            class="inline-flex items-center px-6 py-3 border border-rose-700 text-rose-700 hover:bg-rose-700 hover:text-white transition duration-300 rounded-full text-sm uppercase tracking-wider font-medium">
                            <span class="material-icons mr-2">groups</span>
                            Meet Our Artisans
                        </a>
                    </div>
                </div>
                <div class="order-1 md:order-2 grid grid-cols-2 gap-4">
                    <div class="bg-white p-4 rounded-xl shadow-md">
                        <img src="/api/placeholder/500/600" alt="Jewelry Crafting"
                            class="w-full h-full object-cover rounded-lg">
                        <div class="mt-4 flex items-center">
                            <span class="material-icons text-rose-500 mr-2">workspace_premium</span>
                            <p class="text-sm font-medium text-rose-800">Award-winning craftsmanship</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-md mt-8">
                        <img src="/api/placeholder/500/600" alt="Jewelry Design"
                            class="w-full h-full object-cover rounded-lg">
                        <div class="mt-4 flex items-center">
                            <span class="material-icons text-rose-500 mr-2">eco</span>
                            <p class="text-sm font-medium text-rose-800">Sustainable materials</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-serif inline-flex items-center justify-center">
                    <span class="material-icons mr-3 text-4xl text-rose-600">format_quote</span>
                    Client Testimonials
                </h2>
                <p class="text-rose-800/70 mt-3">What our customers say about their experience</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-rose-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center text-rose-500 mr-2">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                        </div>
                    </div>
                    <p class="text-rose-900/80 mb-6">"The craftsmanship of my engagement ring is beyond anything I've seen. It's truly a work of art that I'll cherish forever."</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/100/100" alt="Sarah J."
                            class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-medium text-rose-900">Sarah J.</h4>
                            <p class="text-rose-700/70 text-sm">Purchased: Radiant Solitaire Ring</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-rose-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center text-rose-500 mr-2">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star_half</span>
                        </div>
                    </div>
                    <p class="text-rose-900/80 mb-6">"The attention to detail in their jewelry is remarkable. My sapphire necklace gets compliments every time I wear it."</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/100/100" alt="Michael T."
                            class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-medium text-rose-900">Michael T.</h4>
                            <p class="text-rose-700/70 text-sm">Purchased: Ocean Blue Necklace</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-rose-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center text-rose-500 mr-2">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                        </div>
                    </div>
                    <p class="text-rose-900/80 mb-6">"Exceptional quality and service. The pearl earrings I bought for my wife were beautifully packaged and arrived faster than expected."</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/100/100" alt="David L."
                            class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-medium text-rose-900">David L.</h4>
                            <p class="text-rose-700/70 text-sm">Purchased: Lunar Pearl Earrings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection