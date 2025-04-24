@extends('layout.main')

@section('landingcontent')
    <div class="font-sans bg-white text-gray-800">
        <!-- Navigation -->
        {{-- <nav class="bg-white shadow-md sticky top-0 z-50">
            <div class="container mx-auto px-6 py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <a href="#" class="text-2xl font-bold text-gray-800">Luxuria<span
                                class="text-amber-600">Jewels</span></a>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="#" class="text-gray-800 hover:text-amber-600">Home</a>
                        <a href="#" class="text-gray-800 hover:text-amber-600">Collections</a>
                        <a href="#" class="text-gray-800 hover:text-amber-600">Rings</a>
                        <a href="#" class="text-gray-800 hover:text-amber-600">Necklaces</a>
                        <a href="#" class="text-gray-800 hover:text-amber-600">About</a>
                        <a href="#" class="text-gray-800 hover:text-amber-600">Contact</a>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="#" class="text-gray-800 hover:text-amber-600"><i class="fas fa-search"></i></a>
                        <a href="#" class="text-gray-800 hover:text-amber-600"><i class="fas fa-user"></i></a>
                        <a href="#" class="text-gray-800 hover:text-amber-600"><i class="fas fa-shopping-bag"></i></a>
                        <button class="md:hidden focus:outline-none">
                            <i class="fas fa-bars text-gray-800"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav> --}}

        <!-- Hero Section -->
        <section class="relative bg-gray-100">
            <div class="container mx-auto px-6 py-24 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 flex flex-col justify-center">
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-800 mb-4">Timeless Elegance, Crafted to Perfection
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8">Discover our exquisite collection of handcrafted
                        jewelry that tells your unique story.</p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="bg-amber-600 text-white px-8 py-3 rounded-full font-medium hover:bg-amber-700 transition duration-300">Shop
                            Now</a>
                        <a href="#"
                            class="border border-amber-600 text-amber-600 px-8 py-3 rounded-full font-medium hover:bg-amber-50 transition duration-300">Explore</a>
                    </div>
                </div>
                <div class="md:w-1/2 mt-12 md:mt-0">
                    <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Luxury Jewelry" class="rounded-lg shadow-xl">
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-white to-transparent"></div>
        </section>

        <!-- Featured Collections -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-16">Our Featured Collections</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Collection 1 -->
                    <div class="relative group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://images.unsplash.com/photo-1603974372033-9b2d7c423ad2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Engagement Rings"
                            class="w-full h-96 object-cover transition duration-500 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                            <a href="#"
                                class="text-white text-xl font-medium border-2 border-white px-6 py-2 rounded-full hover:bg-white hover:text-black transition duration-300">Engagement
                                Rings</a>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4">
                            <h3 class="text-xl font-bold text-gray-800">Engagement Rings</h3>
                            <p class="text-gray-600">Symbols of eternal love</p>
                        </div>
                    </div>

                    <!-- Collection 2 -->
                    <div class="relative group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Diamond Necklaces"
                            class="w-full h-96 object-cover transition duration-500 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                            <a href="#"
                                class="text-white text-xl font-medium border-2 border-white px-6 py-2 rounded-full hover:bg-white hover:text-black transition duration-300">Diamond
                                Necklaces</a>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4">
                            <h3 class="text-xl font-bold text-gray-800">Diamond Necklaces</h3>
                            <p class="text-gray-600">Elegance for every occasion</p>
                        </div>
                    </div>

                    <!-- Collection 3 -->
                    <div class="relative group overflow-hidden rounded-lg shadow-lg">
                        <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Gold Bracelets"
                            class="w-full h-96 object-cover transition duration-500 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                            <a href="#"
                                class="text-white text-xl font-medium border-2 border-white px-6 py-2 rounded-full hover:bg-white hover:text-black transition duration-300">Gold
                                Bracelets</a>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4">
                            <h3 class="text-xl font-bold text-gray-800">Gold Bracelets</h3>
                            <p class="text-gray-600">Timeless sophistication</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Banner Section -->
        <section class="py-20 bg-amber-50">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Handcrafted with Passion, Worn with Pride</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-8">Each piece in our collection is meticulously crafted
                    by master jewelers using only the finest materials. Our commitment to quality ensures that your jewelry
                    will be cherished for generations.</p>
                <a href="#"
                    class="bg-amber-600 text-white px-8 py-3 rounded-full font-medium hover:bg-amber-700 transition duration-300">Discover
                    Our Craftsmanship</a>
            </div>
        </section>

        <!-- Best Sellers -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-16">Our Best Sellers</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Product 1 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1603974372033-9b2d7c423ad2?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Diamond Ring" class="w-full h-64 object-cover">
                            <div
                                class="absolute top-2 right-2 bg-amber-600 text-white text-xs font-bold px-2 py-1 rounded-full">
                                BESTSELLER</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-1">Eternal Diamond Ring</h3>
                            <p class="text-gray-600 text-sm mb-2">18K White Gold</p>
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-gray-800">₹107,817</span>
                                <button class="text-amber-600 hover:text-amber-700">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="text-sm text-amber-600 hover:underline">See Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Pearl Necklace" class="w-full h-64 object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-1">Pearl Elegance Necklace</h3>
                            <p class="text-gray-600 text-sm mb-2">South Sea Pearls</p>
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-gray-800">₹74,517</span>
                                <button class="text-amber-600 hover:text-amber-700">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="text-sm text-amber-600 hover:underline">See Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Gold Bracelet" class="w-full h-64 object-cover">
                            <div
                                class="absolute top-2 right-2 bg-amber-600 text-white text-xs font-bold px-2 py-1 rounded-full">
                                NEW</div>
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-1">Infinity Gold Bracelet</h3>
                            <p class="text-gray-600 text-sm mb-2">24K Solid Gold</p>
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-gray-800">₹132,717</span>
                                <button class="text-amber-600 hover:text-amber-700">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="text-sm text-amber-600 hover:underline">See Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition duration-300">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                alt="Diamond Earrings" class="w-full h-64 object-cover">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-gray-800 mb-1">Diamond Stud Earrings</h3>
                            <p class="text-gray-600 text-sm mb-2">0.5ct each</p>
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-gray-800">₹66,357</span>
                                <button class="text-amber-600 hover:text-amber-700">
                                    <i class="fas fa-shopping-bag"></i>
                                </button>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="text-sm text-amber-600 hover:underline">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href="#"
                        class="inline-block border-2 border-amber-600 text-amber-600 px-8 py-3 rounded-full font-medium hover:bg-amber-600 hover:text-white transition duration-300">
                        View All Products
                    </a>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-20 bg-gray-100">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-16">What Our Customers Say</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="text-amber-500 text-xl mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">"The craftsmanship of my engagement ring is exceptional. It's even
                            more beautiful in person than in the photos. My fiancée was speechless!"</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah J."
                                class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <h4 class="font-bold text-gray-800">Sarah J.</h4>
                                <p class="text-gray-600 text-sm">Verified Buyer</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="text-amber-500 text-xl mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">"I've purchased several pieces from LuxuriaJewels over the years and
                            the quality is consistently outstanding. Their customer service is top-notch."</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael T."
                                class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <h4 class="font-bold text-gray-800">Michael T.</h4>
                                <p class="text-gray-600 text-sm">Loyal Customer</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="flex items-center mb-4">
                            <div class="text-amber-500 text-xl mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">"The pearl necklace I bought for my mother's birthday was stunning.
                            The packaging was elegant and delivery was prompt. Highly recommend!"</p>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily R."
                                class="w-10 h-10 rounded-full mr-3">
                            <div>
                                <h4 class="font-bold text-gray-800">Emily R.</h4>
                                <p class="text-gray-600 text-sm">First-time Buyer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section class="py-16 bg-amber-600 text-white">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-4">Join Our Jewelry Community</h2>
                <p class="text-lg mb-8 max-w-2xl mx-auto">Subscribe to our newsletter for exclusive offers, new collection
                    previews, and jewelry care tips.</p>
                <div class="max-w-md mx-auto flex">
                    <input type="email" placeholder="Your email address"
                        class="flex-grow px-4 py-3 rounded-l-full focus:outline-none text-gray-800">
                    <button
                        class="bg-gray-800 text-white px-6 py-3 rounded-r-full font-medium hover:bg-gray-900 transition duration-300">Subscribe</button>
                </div>
            </div>
        </section>

        <!-- Footer -->
        {{-- <footer class="bg-gray-900 text-white pt-16 pb-8">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">LuxuriaJewels</h3>
                        <p class="text-gray-400">Crafting timeless jewelry since 1985. Each piece tells a story of elegance
                            and passion.</p>
                        <div class="flex space-x-4 mt-4">
                            <a href="#" class="text-gray-400 hover:text-white"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i
                                    class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-4">Shop</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">All Jewelry</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">New Arrivals</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Best Sellers</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Sale</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Gift Cards</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-4">About</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Our Story</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Craftsmanship</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Materials</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Sustainability</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg mb-4">Customer Care</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Contact Us</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">FAQs</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Shipping & Returns</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Size Guide</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Jewelry Care</a></li>
                        </ul>
                    </div>
                </div>
                <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 text-sm">© 2023 LuxuriaJewels. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-white text-sm">Accessibility</a>
                    </div>
                </div>
            </div>
        </footer> --}}
    </div>
@endsection
