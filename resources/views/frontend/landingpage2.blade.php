@extends('layout.main')

@section('landingcontent')
    <!-- Hero Section with Video Background -->
    <div class="relative overflow-hidden bg-gradient-to-r from-purple-50 to-pink-50">
        <!-- Video background (optional) -->
        <div class="absolute inset-0 z-0 hidden md:block">
            <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-10">
                <source src="https://assets.mixkit.co/videos/preview/mixkit-close-up-of-a-jewelry-display-12330-large.mp4"
                    type="video/mp4">
            </video>
        </div>

        <div class="container mx-auto px-4 py-16 sm:py-24 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="text-center md:text-left">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 tracking-tight mb-4">
                        <span class="block">Timeless Elegance,</span>
                        <span class="text-pink-600 bg-clip-text bg-gradient-to-r from-pink-500 to-purple-600">Modern
                            Design</span>
                    </h1>
                    <p class="text-lg text-gray-600 mb-8 max-w-lg">Discover our handcrafted collection of fine jewelry that
                        celebrates your unique style and life's special moments.</p>
                    <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                        <a href="#collection"
                            class="px-8 py-3 bg-pink-600 text-white font-medium rounded-full hover:bg-pink-700 transition duration-300 flex items-center">
                            <span class="material-icons mr-2">shopping_bag</span>
                            Shop Collection
                        </a>
                        <a href="#about"
                            class="px-8 py-3 bg-white text-pink-600 font-medium rounded-full border border-pink-600 hover:bg-pink-50 transition duration-300 flex items-center">
                            <span class="material-icons mr-2">history_edu</span>
                            Our Story
                        </a>
                    </div>

                    <!-- Trust indicators -->
                    <div class="mt-8 flex flex-wrap items-center justify-center md:justify-start gap-6">
                        <div class="flex items-center">
                            <span class="material-icons text-yellow-400 mr-1">star</span>
                            <span class="text-gray-700">4.9 (2.4k Reviews)</span>
                        </div>
                        <div class="flex items-center">
                            <span class="material-icons text-green-500 mr-1">verified</span>
                            <span class="text-gray-700">Ethically Sourced</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div
                        class="relative overflow-hidden rounded-xl shadow-2xl transform rotate-1 hover:rotate-0 transition duration-500">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Featured Jewelry" class="w-full h-auto object-cover" />
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white p-4 rounded-lg shadow-lg border border-gray-100">
                        <p class="text-sm text-gray-500 flex items-center">
                            <span class="material-icons text-pink-500 mr-1 text-sm">fiber_new</span>
                            New Collection
                        </p>
                        <p class="text-xl font-bold text-pink-600">Spring 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Categories with Animation -->
    <div class="py-16 bg-white" id="collection">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Shop by Category</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Browse our exquisite collections curated for every occasion and
                    style.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Necklaces -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Necklaces"
                            class="w-full h-80 object-cover transition duration-500 group-hover:scale-105" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex items-end p-6">
                        <div class="w-full">
                            <h3 class="text-xl font-semibold text-white mb-2">Necklaces</h3>
                            <a href="#" class="text-white/80 hover:text-white flex items-center text-sm font-medium">
                                Explore Collection
                                <span class="material-icons ml-2 text-sm">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                    <div class="absolute top-4 left-4 bg-pink-600 text-white px-3 py-1 rounded-full text-xs font-medium">
                        Bestseller
                    </div>
                </div>

                <!-- Earrings -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Earrings" class="w-full h-80 object-cover transition duration-500 group-hover:scale-105" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex items-end p-6">
                        <div class="w-full">
                            <h3 class="text-xl font-semibold text-white mb-2">Earrings</h3>
                            <a href="#" class="text-white/80 hover:text-white flex items-center text-sm font-medium">
                                Explore Collection
                                <span class="material-icons ml-2 text-sm">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bracelets -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Bracelets"
                            class="w-full h-80 object-cover transition duration-500 group-hover:scale-105" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex items-end p-6">
                        <div class="w-full">
                            <h3 class="text-xl font-semibold text-white mb-2">Bracelets</h3>
                            <a href="#" class="text-white/80 hover:text-white flex items-center text-sm font-medium">
                                Explore Collection
                                <span class="material-icons ml-2 text-sm">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                    <div
                        class="absolute top-4 left-4 bg-white text-pink-600 px-3 py-1 rounded-full text-xs font-medium shadow-sm">
                        New Arrival
                    </div>
                </div>

                <!-- Rings -->
                <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition duration-300">
                    <div class="overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1603974372035-9e653f7f2918?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Rings" class="w-full h-80 object-cover transition duration-500 group-hover:scale-105" />
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex items-end p-6">
                        <div class="w-full">
                            <h3 class="text-xl font-semibold text-white mb-2">Rings</h3>
                            <a href="#" class="text-white/80 hover:text-white flex items-center text-sm font-medium">
                                Explore Collection
                                <span class="material-icons ml-2 text-sm">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View all categories button -->
            <div class="text-center mt-12">
                <a href="#"
                    class="inline-flex items-center px-6 py-3 border border-gray-300 rounded-full text-gray-700 hover:bg-gray-50 transition duration-300">
                    View All Categories
                    <span class="material-icons ml-2">chevron_right</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Best Sellers with Quick View -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl font-bold mb-2">Best Sellers</h2>
                    <p class="text-gray-600">Our most loved pieces by customers worldwide</p>
                </div>
                <a href="#"
                    class="px-6 py-2 border border-gray-300 rounded-full hover:bg-white transition duration-300 mt-4 md:mt-0 flex items-center">
                    View All
                    <span class="material-icons ml-1">chevron_right</span>
                </a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden group hover:shadow-md transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1603974372035-9e653f7f2918?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Diamond Pendant" class="w-full h-64 object-cover" />

                        <!-- Quick view button (shown on hover) -->
                        <div
                            class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-white text-pink-600 px-4 py-2 rounded-full font-medium flex items-center">
                                <span class="material-icons mr-1 text-sm">visibility</span>
                                Quick View
                            </button>
                        </div>

                        <!-- Wishlist button -->
                        <button
                            class="absolute top-4 right-4 bg-white rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity shadow-md hover:bg-pink-50">
                            <span class="material-icons text-pink-600">favorite_border</span>
                        </button>

                        <!-- Sale badge -->
                        <div class="absolute top-4 left-4 bg-pink-600 text-white px-2 py-1 rounded text-xs font-medium">
                            15% OFF
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-1">Diamond Pendant</h3>
                        <p class="text-gray-500 text-sm mb-2">Elegant 18K gold necklace with 0.5ct diamond</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-pink-600 font-bold">$1,299</span>
                                <span class="text-gray-400 text-sm line-through ml-2">$1,499</span>
                            </div>
                            <button class="text-gray-700 hover:text-pink-600 transition" title="Add to cart">
                                <span class="material-icons">add_shopping_cart</span>
                            </button>
                        </div>
                        <!-- Rating -->
                        <div class="flex items-center mt-2">
                            <div class="flex text-yellow-400">
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star_half</span>
                            </div>
                            <span class="text-gray-500 text-xs ml-1">(128)</span>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden group hover:shadow-md transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Gold Hoop Earrings" class="w-full h-64 object-cover" />

                        <!-- Quick view button -->
                        <div
                            class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-white text-pink-600 px-4 py-2 rounded-full font-medium flex items-center">
                                <span class="material-icons mr-1 text-sm">visibility</span>
                                Quick View
                            </button>
                        </div>

                        <!-- Wishlist button -->
                        <button
                            class="absolute top-4 right-4 bg-white rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity shadow-md hover:bg-pink-50">
                            <span class="material-icons text-pink-600">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-1">Gold Hoop Earrings</h3>
                        <p class="text-gray-500 text-sm mb-2">14K gold hoops with secure latch closure</p>
                        <div class="flex justify-between items-center">
                            <span class="text-pink-600 font-bold">$499</span>
                            <button class="text-gray-700 hover:text-pink-600 transition" title="Add to cart">
                                <span class="material-icons">add_shopping_cart</span>
                            </button>
                        </div>
                        <!-- Rating -->
                        <div class="flex items-center mt-2">
                            <div class="flex text-yellow-400">
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                            </div>
                            <span class="text-gray-500 text-xs ml-1">(89)</span>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden group hover:shadow-md transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Pearl Bracelet" class="w-full h-64 object-cover" />

                        <!-- Quick view button -->
                        <div
                            class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-white text-pink-600 px-4 py-2 rounded-full font-medium flex items-center">
                                <span class="material-icons mr-1 text-sm">visibility</span>
                                Quick View
                            </button>
                        </div>

                        <!-- Wishlist button -->
                        <button
                            class="absolute top-4 right-4 bg-white rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity shadow-md hover:bg-pink-50">
                            <span class="material-icons text-pink-600">favorite_border</span>
                        </button>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-1">Pearl Bracelet</h3>
                        <p class="text-gray-500 text-sm mb-2">Freshwater pearls with sterling silver clasp</p>
                        <div class="flex justify-between items-center">
                            <span class="text-pink-600 font-bold">$799</span>
                            <button class="text-gray-700 hover:text-pink-600 transition" title="Add to cart">
                                <span class="material-icons">add_shopping_cart</span>
                            </button>
                        </div>
                        <!-- Rating -->
                        <div class="flex items-center mt-2">
                            <div class="flex text-yellow-400">
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                            </div>
                            <span class="text-gray-500 text-xs ml-1">(64)</span>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white rounded-xl shadow-sm overflow-hidden group hover:shadow-md transition duration-300">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Sapphire Ring" class="w-full h-64 object-cover" />

                        <!-- Quick view button -->
                        <div
                            class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-white text-pink-600 px-4 py-2 rounded-full font-medium flex items-center">
                                <span class="material-icons mr-1 text-sm">visibility</span>
                                Quick View
                            </button>
                        </div>

                        <!-- Wishlist button -->
                        <button
                            class="absolute top-4 right-4 bg-white rounded-full p-2 opacity-0 group-hover:opacity-100 transition-opacity shadow-md hover:bg-pink-50">
                            <span class="material-icons text-pink-600">favorite_border</span>
                        </button>

                        <!-- New badge -->
                        <div
                            class="absolute top-4 left-4 bg-white text-pink-600 px-2 py-1 rounded text-xs font-medium border border-pink-200">
                            NEW
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-1">Sapphire Ring</h3>
                        <p class="text-gray-500 text-sm mb-2">Blue sapphire center stone with diamond accents</p>
                        <div class="flex justify-between items-center">
                            <span class="text-pink-600 font-bold">$1,499</span>
                            <button class="text-gray-700 hover:text-pink-600 transition" title="Add to cart">
                                <span class="material-icons">add_shopping_cart</span>
                            </button>
                        </div>
                        <!-- Rating -->
                        <div class="flex items-center mt-2">
                            <div class="flex text-yellow-400">
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star_half</span>
                            </div>
                            <span class="text-gray-500 text-xs ml-1">(42)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Special Offers Banner -->
    <div class="py-8 bg-gradient-to-r from-purple-600 to-pink-600 text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center mb-4 md:mb-0">
                    <span class="material-icons mr-2 text-2xl">local_offer</span>
                    <h3 class="text-xl font-bold">Summer Sale - Up to 30% Off</h3>
                </div>
                <div class="flex items-center">
                    <p class="mr-4">Limited time offer. Ends July 31.</p>
                    <a href="#"
                        class="px-4 py-2 bg-white text-pink-600 rounded-full font-medium hover:bg-gray-100 transition flex items-center">
                        Shop Now
                        <span class="material-icons ml-1">chevron_right</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials with Carousel -->
    <div class="py-16 bg-white" id="testimonials">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-2">What Our Customers Say</h2>
            <p class="text-gray-600 text-center mb-12 max-w-2xl mx-auto">Don't just take our word for it - hear from our
                satisfied customers</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-6 rounded-xl hover:shadow-md transition duration-300">
                    <div class="flex text-yellow-400 mb-4">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </div>
                    <p class="text-gray-600 italic mb-6">"The craftsmanship is exceptional. My engagement ring is exactly
                        what I dreamed of and the customer service was outstanding throughout the process."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Customer"
                            class="w-12 h-12 rounded-full mr-4 object-cover" />
                        <div>
                            <h4 class="font-medium">Emily Rodriguez</h4>
                            <p class="text-sm text-gray-500">Verified Buyer</p>
                        </div>
                        <span class="material-icons text-blue-500 ml-auto" title="Verified purchase">verified</span>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-6 rounded-xl hover:shadow-md transition duration-300">
                    <div class="flex text-yellow-400 mb-4">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </div>
                    <p class="text-gray-600 italic mb-6">"I've purchased several pieces and always receive compliments. The
                        quality is exceptional and worth every penny. Fast shipping and beautiful packaging too!"</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Customer"
                            class="w-12 h-12 rounded-full mr-4 object-cover" />
                        <div>
                            <h4 class="font-medium">Michael Chen</h4>
                            <p class="text-sm text-gray-500">Verified Buyer</p>
                        </div>
                        <span class="material-icons text-blue-500 ml-auto" title="Verified purchase">verified</span>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-6 rounded-xl hover:shadow-md transition duration-300">
                    <div class="flex text-yellow-400 mb-4">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_half</span>
                    </div>
                    <p class="text-gray-600 italic mb-6">"The custom bracelet I ordered for my wife's birthday was perfect.
                        The attention to detail and personal touch made it an unforgettable gift."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Customer"
                            class="w-12 h-12 rounded-full mr-4 object-cover" />
                        <div>
                            <h4 class="font-medium">Sarah Johnson</h4>
                            <p class="text-sm text-gray-500">Verified Buyer</p>
                        </div>
                        <span class="material-icons text-blue-500 ml-auto" title="Verified purchase">verified</span>
                    </div>
                </div>
            </div>

            <!-- View all testimonials -->
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center text-pink-600 hover:text-pink-700">
                    Read more testimonials
                    <span class="material-icons ml-1">chevron_right</span>
                </a>
            </div>
        </div>
    </div>

    <!-- Our Story with Timeline -->
    <div class="py-16 bg-gray-50" id="about">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="text-pink-600 font-medium mb-2 flex items-center">
                        <span class="material-icons mr-1">history_edu</span>
                        Our Heritage
                    </span>
                    <h2 class="text-3xl font-bold mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-4">Founded in 2010, our jewelry atelier brings together skilled artisans
                        with decades of experience and a passion for creating timeless pieces that celebrate life's special
                        moments.</p>
                    <p class="text-gray-600 mb-6">Each piece is handcrafted with meticulous attention to detail, using only
                        ethically sourced materials of the highest quality. We believe that jewelry should not only be
                        beautiful but also meaningful and lasting.</p>

                    <!-- Timeline -->
                    <div class="space-y-4 mb-6">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-4">
                                <div
                                    class="flex items-center justify-center w-10 h-10 rounded-full bg-pink-100 text-pink-600">
                                    <span class="material-icons">workspace_premium</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-medium">2015 - Excellence Award</h4>
                                <p class="text-gray-600 text-sm">Recognized for outstanding craftsmanship in fine jewelry
                                </p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0 mr-4">
                                <div
                                    class="flex items-center justify-center w-10 h-10 rounded-full bg-pink-100 text-pink-600">
                                    <span class="material-icons">eco</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-medium">2018 - Sustainable Practices</h4>
                                <p class="text-gray-600 text-sm">Fully transitioned to ethically sourced materials</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0 mr-4">
                                <div
                                    class="flex items-center justify-center w-10 h-10 rounded-full bg-pink-100 text-pink-600">
                                    <span class="material-icons">storefront</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-medium">2022 - Global Expansion</h4>
                                <p class="text-gray-600 text-sm">Opened flagship stores in 3 countries</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex space-x-4">
                        <a href="#"
                            class="px-6 py-3 bg-pink-600 text-white font-medium rounded-full hover:bg-pink-700 transition duration-300 flex items-center">
                            <span class="material-icons mr-1">precision_manufacturing</span>
                            Our Process
                        </a>
                        <a href="#"
                            class="px-6 py-3 border border-pink-600 text-pink-600 font-medium rounded-full hover:bg-pink-50 transition duration-300 flex items-center">
                            <span class="material-icons mr-1">groups</span>
                            Meet Our Team
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1605106702734-205df224ecce?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Jewelry Workshop" class="rounded-lg shadow-lg w-full h-full object-cover" />
                    <img src="https://images.unsplash.com/photo-1589128777073-263566ae5e4d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Jewelry Detail" class="rounded-lg shadow-lg w-full h-40 object-cover mb-4" />
                    <img src="https://images.unsplash.com/photo-1603974372035-9e653f7f2918?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Jewelry Designer" class="rounded-lg shadow-lg w-full h-40 object-cover col-span-2" />
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter with Incentive -->
    <div class="py-16 bg-gradient-to-r from-pink-500 to-purple-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-2xl mx-auto">
                <span class="material-icons text-4xl mb-4">mail</span>
                <h2 class="text-3xl font-bold mb-4">Join Our Mailing List</h2>
                <p class="text-white/80 mb-6">Subscribe to receive updates on new collections, exclusive offers, and
                    jewelry care tips. Get <span class="font-bold">10% off your first order</span> when you sign up!</p>
                <form class="max-w-lg mx-auto flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Your email address"
                        class="flex-1 px-4 py-3 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-white" />
                    <button type="submit"
                        class="px-8 py-3 bg-white text-pink-600 font-medium rounded-full hover:bg-gray-100 transition duration-300 flex items-center justify-center">
                        <span class="material-icons mr-1">send</span>
                        Subscribe
                    </button>
                </form>
                <p class="text-white/60 text-xs mt-4">We respect your privacy. Unsubscribe at any time.</p>
            </div>
        </div>
    </div>

    <!-- Instagram Feed -->
    <div class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <h2 class="text-3xl font-bold">Follow Us on Instagram</h2>
                <a href="#" class="flex items-center mt-4 md:mt-0 text-pink-600 hover:text-pink-700 transition">
                    <span class="mr-2">@jewelryshopname</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#" class="block group relative overflow-hidden rounded-lg">
                    <img src="/api/placeholder/300/300" alt="Instagram Post"
                        class="w-full h-64 object-cover transition duration-500 group-hover:scale-110" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </a>
                <a href="#" class="block group relative overflow-hidden rounded-lg">
                    <img src="/api/placeholder/300/300" alt="Instagram Post"
                        class="w-full h-64 object-cover transition duration-500 group-hover:scale-110" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </a>
                <a href="#" class="block group relative overflow-hidden rounded-lg">
                    <img src="/api/placeholder/300/300" alt="Instagram Post"
                        class="w-full h-64 object-cover transition duration-500 group-hover:scale-110" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </a>
                <a href="#" class="block group relative overflow-hidden rounded-lg">
                    <img src="/api/placeholder/300/300" alt="Instagram Post"
                        class="w-full h-64 object-cover transition duration-500 group-hover:scale-110" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="bg-pink-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Worldwide Shipping</h3>
                    <p class="text-gray-600">We deliver our handcrafted jewelry to customers around the globe with care and
                        precision.</p>
                </div>
                <div class="text-center p-6">
                    <div class="bg-pink-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Ethical Sourcing</h3>
                    <p class="text-gray-600">We are committed to using only ethically sourced gemstones and recycled
                        precious metals.</p>
                </div>
                <div class="text-center p-6">
                    <div class="bg-pink-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Luxury Gift Packaging</h3>
                    <p class="text-gray-600">Each piece comes in our signature packaging, perfect for gifting or as a
                        special treat for yourself.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact CTA -->
    <div class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Have Questions?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">Our jewelry specialists are here to help you find the perfect
                piece or answer any questions you may have about our collections.</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="#"
                    class="px-8 py-3 bg-pink-600 text-white font-medium rounded-full hover:bg-pink-700 transition duration-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    Contact Us
                </a>
                <a href="#"
                    class="px-8 py-3 bg-white text-pink-600 font-medium rounded-full border border-pink-600 hover:bg-pink-50 transition duration-300 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Live Chat
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <!-- Branding and Social -->
                <div>
                    <h3 class="font-bold text-xl mb-4">Jewelry Shop</h3>
                    <p class="text-gray-400 mb-4">Crafting timeless elegance since 2010. Handmade with love and attention
                        to detail.</p>
                    <div class="flex space-x-4">
                        <!-- Facebook -->
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <!-- Your SVG here -->
                            <!-- ... -->
                        </a>
                        <!-- Instagram -->
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <!-- Your SVG here -->
                            <!-- ... -->
                        </a>
                        <!-- Twitter -->
                        <a href="#" class="text-gray-400 hover:text-white transition">
                            <!-- Your SVG here -->
                            <!-- ... -->
                        </a>
                    </div>
                </div>

                <!-- Shop Links -->
                <div>
                    <h4 class="font-bold text-lg mb-4">Shop</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">New Arrivals</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Necklaces</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Earrings</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Bracelets</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Rings</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Gift Cards</a></li>
                    </ul>
                </div>

                <!-- About Links -->
                <div>
                    <h4 class="font-bold text-lg mb-4">About</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Our Story</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Ethical Practices</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Craftsmanship</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Materials</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Press</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Careers</a></li>
                    </ul>
                </div>

                <!-- Customer Care Links -->
                <div>
                    <h4 class="font-bold text-lg mb-4">Customer Care</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Shipping & Returns</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Warranty</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Care Guide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Size Guide</a></li>
                    </ul>
                </div>
            </div>

            <!-- Newsletter & Bottom Footer -->
            <div class="border-t border-gray-800 pt-8 md:flex md:items-center md:justify-between">
                <div class="mb-6 md:mb-0">
                    <p class="text-gray-400 text-sm">&copy; 2025 Jewelry Shop. All rights reserved.</p>
                </div>
                <div>
                    <form class="flex flex-col sm:flex-row items-center gap-4">
                        <input type="email" placeholder="Your email address"
                            class="px-4 py-2 w-full sm:w-auto rounded bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-pink-500" />
                        <button type="submit"
                            class="px-4 py-2 bg-pink-600 hover:bg-pink-700 rounded text-white transition">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
@endsection
