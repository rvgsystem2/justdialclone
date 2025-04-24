@extends('layout.main')

@section('landingcontent')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-gray-900 to-gray-800 text-white overflow-hidden">
        <!-- Hero Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{asset('asset/landingimg/sample (1).jpg')}}" alt="Luxury Jewelry Collection"
                class="w-full h-full object-cover opacity-40">
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 py-32 relative z-10">
            <div class="max-w-2xl">
                <div class="flex items-center mb-4">
                    <span class="material-icons text-4xl mr-2">diamond</span>
                    <h1 class="text-5xl md:text-6xl font-serif font-light">Exquisite Craftsmanship</h1>
                </div>
                <p class="text-xl md:text-2xl mb-8 font-light flex items-center">
                    <span class="material-icons mr-2">star</span>
                    Discover our handcrafted jewelry collections
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#collections"
                        class="flex items-center px-8 py-3 bg-white text-black hover:bg-gray-200 transition duration-300 text-sm uppercase tracking-wider font-medium rounded-full">
                        <span class="material-icons mr-2">collections</span>
                        Explore Collection
                    </a>
                    <a href="#contact"
                        class="flex items-center px-8 py-3 border border-white hover:bg-white hover:text-black transition duration-300 text-sm uppercase tracking-wider font-medium rounded-full">
                        <span class="material-icons mr-2">schedule</span>
                        Book Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-serif inline-flex items-center">
                    <span class="material-icons mr-3 text-4xl">category</span>
                    Our Collections
                </h2>
                <p class="text-gray-600 mt-3">Discover our exquisite jewelry categories</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8" id="collections">
                <!-- Category 1 -->
                <div
                    class="group relative overflow-hidden cursor-pointer rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <img src="/api/placeholder/600/800" alt="Rings Collection"
                        class="w-full h-96 object-cover transition duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex items-end p-6">
                        <div class="w-full">
                            <div class="flex items-center mb-2">
                                <span class="material-icons mr-2 text-white">ring_volume</span>
                                <h3 class="text-xl font-medium text-white">Rings</h3>
                            </div>
                            <p class="text-gray-200 mb-4">Elegant designs for every occasion</p>
                            <a href="#" class="inline-flex items-center text-white font-medium">
                                View Collection
                                <span class="material-icons ml-1">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category 2 -->
                <div
                    class="group relative overflow-hidden cursor-pointer rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <img src="/api/placeholder/600/800" alt="Necklaces Collection"
                        class="w-full h-96 object-cover transition duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex items-end p-6">
                        <div class="w-full">
                            <div class="flex items-center mb-2">
                                <span class="material-icons mr-2 text-white">checkroom</span>
                                <h3 class="text-xl font-medium text-white">Necklaces</h3>
                            </div>
                            <p class="text-gray-200 mb-4">Statement pieces that captivate</p>
                            <a href="#" class="inline-flex items-center text-white font-medium">
                                View Collection
                                <span class="material-icons ml-1">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category 3 -->
                <div
                    class="group relative overflow-hidden cursor-pointer rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                    <img src="/api/placeholder/600/800" alt="Earrings Collection"
                        class="w-full h-96 object-cover transition duration-700 group-hover:scale-105">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex items-end p-6">
                        <div class="w-full">
                            <div class="flex items-center mb-2">
                                <span class="material-icons mr-2 text-white">hearing</span>
                                <h3 class="text-xl font-medium text-white">Earrings</h3>
                            </div>
                            <p class="text-gray-200 mb-4">From subtle to spectacular</p>
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
                    <span class="material-icons text-4xl mr-3">featured_play_list</span>
                    <h2 class="text-3xl font-serif">Featured Pieces</h2>
                </div>
                <div class="mt-4 md:mt-0">
                    <ul class="flex flex-wrap gap-4 md:gap-6">
                        <li>
                            <button
                                class="flex items-center px-4 py-2 rounded-full bg-black text-white text-sm uppercase tracking-wider font-medium gallery-filter active"
                                data-filter="all">
                                All
                            </button>
                        </li>
                        <li>
                            <button
                                class="flex items-center px-4 py-2 rounded-full hover:bg-gray-100 text-sm uppercase tracking-wider font-medium gallery-filter"
                                data-filter="rings">
                                Rings
                            </button>
                        </li>
                        <li>
                            <button
                                class="flex items-center px-4 py-2 rounded-full hover:bg-gray-100 text-sm uppercase tracking-wider font-medium gallery-filter"
                                data-filter="necklaces">
                                Necklaces
                            </button>
                        </li>
                        <li>
                            <button
                                class="flex items-center px-4 py-2 rounded-full hover:bg-gray-100 text-sm uppercase tracking-wider font-medium gallery-filter"
                                data-filter="earrings">
                                Earrings
                            </button>
                        </li>
                        <li>
                            <button
                                class="flex items-center px-4 py-2 rounded-full hover:bg-gray-100 text-sm uppercase tracking-wider font-medium gallery-filter"
                                data-filter="bracelets">
                                Bracelets
                            </button>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="product-gallery">
                <!-- Product 1 -->
                <div class="group product-item bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300"
                    data-category="rings">
                    <div class="relative overflow-hidden">
                        <img src="/api/placeholder/600/600" alt="Diamond Engagement Ring"
                            class="w-full aspect-square object-cover">
                        <div
                            class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-2">
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">favorite</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">search</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                        <div
                            class="absolute top-4 right-4 bg-white rounded-full w-10 h-10 flex items-center justify-center shadow-md">
                            <span class="material-icons text-yellow-500">star</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium">Radiant Solitaire</h3>
                                <p class="text-gray-500">Diamond Engagement Ring</p>
                            </div>
                            <span class="material-icons text-gray-400 hover:text-yellow-500">compare_arrows</span>
                        </div>
                        <div class="mt-3 flex justify-between items-center">
                            <p class="text-lg font-bold">$3,499</p>
                            <div class="flex items-center text-yellow-400">
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
                <div class="group product-item bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300"
                    data-category="necklaces">
                    <div class="relative overflow-hidden">
                        <img src="/api/placeholder/600/600" alt="Sapphire Pendant"
                            class="w-full aspect-square object-cover">
                        <div
                            class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-2">
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">favorite</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">search</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium">Ocean Blue</h3>
                                <p class="text-gray-500">Sapphire Pendant Necklace</p>
                            </div>
                            <span class="material-icons text-gray-400 hover:text-yellow-500">compare_arrows</span>
                        </div>
                        <div class="mt-3 flex justify-between items-center">
                            <p class="text-lg font-bold">$2,799</p>
                            <div class="flex items-center text-yellow-400">
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
                <div class="group product-item bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300"
                    data-category="earrings">
                    <div class="relative overflow-hidden">
                        <img src="/api/placeholder/600/600" alt="Pearl Drop Earrings"
                            class="w-full aspect-square object-cover">
                        <div
                            class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-2">
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">favorite</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">search</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                        <div class="absolute top-4 left-4 bg-red-500 text-white text-xs px-2 py-1 rounded">SALE</div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium">Lunar Pearl</h3>
                                <p class="text-gray-500">Pearl Drop Earrings</p>
                            </div>
                            <span class="material-icons text-gray-400 hover:text-yellow-500">compare_arrows</span>
                        </div>
                        <div class="mt-3 flex justify-between items-center">
                            <div>
                                <p class="text-lg font-bold">$1,299</p>
                                <p class="text-sm text-red-500 line-through">$1,599</p>
                            </div>
                            <div class="flex items-center text-yellow-400">
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
                <div class="group product-item bg-gray-50 rounded-xl overflow-hidden hover:shadow-lg transition duration-300"
                    data-category="bracelets">
                    <div class="relative overflow-hidden">
                        <img src="/api/placeholder/600/600" alt="Gold Tennis Bracelet"
                            class="w-full aspect-square object-cover">
                        <div
                            class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-2">
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">favorite</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">search</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-gray-100 shadow-md">
                                    <span class="material-icons text-gray-700">shopping_cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-medium">Golden Cascade</h3>
                                <p class="text-gray-500">18K Gold Tennis Bracelet</p>
                            </div>
                            <span class="material-icons text-gray-400 hover:text-yellow-500">compare_arrows</span>
                        </div>
                        <div class="mt-3 flex justify-between items-center">
                            <p class="text-lg font-bold">$4,199</p>
                            <div class="flex items-center text-yellow-400">
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
                    class="inline-flex items-center px-6 py-3 border border-black rounded-full hover:bg-black hover:text-white transition duration-300 font-medium">
                    View All Products
                    <span class="material-icons ml-2">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Craftsmanship Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <div class="flex items-center mb-6">
                        <span class="material-icons text-4xl mr-3">handyman</span>
                        <h2 class="text-3xl font-serif">Exceptional Craftsmanship</h2>
                    </div>
                    <div class="space-y-4">
                        <div class="flex">
                            <span class="material-icons text-green-500 mr-3">check_circle</span>
                            <p class="text-gray-600">Every piece in our collection is meticulously crafted by skilled
                                artisans with decades of experience.</p>
                        </div>
                        <div class="flex">
                            <span class="material-icons text-green-500 mr-3">check_circle</span>
                            <p class="text-gray-600">We source only the finest gemstones and precious metals to create
                                jewelry that becomes an heirloom.</p>
                        </div>
                        <div class="flex">
                            <span class="material-icons text-green-500 mr-3">check_circle</span>
                            <p class="text-gray-600">Our design process combines traditional techniques with modern
                                innovation.</p>
                        </div>
                    </div>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="#"
                            class="inline-flex items-center px-6 py-3 bg-black text-white hover:bg-gray-800 transition duration-300 rounded-full text-sm uppercase tracking-wider font-medium">
                            <span class="material-icons mr-2">precision_manufacturing</span>
                            Our Process
                        </a>
                        <a href="#"
                            class="inline-flex items-center px-6 py-3 border border-black hover:bg-black hover:text-white transition duration-300 rounded-full text-sm uppercase tracking-wider font-medium">
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
                            <span class="material-icons text-yellow-500 mr-2">workspace_premium</span>
                            <p class="text-sm font-medium">Award-winning craftsmanship</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl shadow-md mt-8">
                        <img src="/api/placeholder/500/600" alt="Jewelry Design"
                            class="w-full h-full object-cover rounded-lg">
                        <div class="mt-4 flex items-center">
                            <span class="material-icons text-yellow-500 mr-2">eco</span>
                            <p class="text-sm font-medium">Ethically sourced materials</p>
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
                    <span class="material-icons mr-3 text-4xl">format_quote</span>
                    Client Testimonials
                </h2>
                <p class="text-gray-600 mt-3">What our customers say about us</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center text-yellow-400 mr-2">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"The craftsmanship of my engagement ring is beyond anything I've seen.
                        It's truly a work of art that I'll cherish forever."</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/100/100" alt="Sarah J."
                            class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-medium">Sarah J.</h4>
                            <p class="text-gray-500 text-sm">Purchased: Radiant Solitaire Ring</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center text-yellow-400 mr-2">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star_half</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"The attention to detail in their jewelry is remarkable. My sapphire
                        necklace gets compliments every time I wear it."</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/100/100" alt="Michael T."
                            class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-medium">Michael T.</h4>
                            <p class="text-gray-500 text-sm">Purchased: Ocean Blue Necklace</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="flex items-center text-yellow-400 mr-2">
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                            <span class="material-icons">star</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Exceptional quality and service. The pearl earrings I bought for my wife
                        were beautifully packaged and arrived faster than expected."</p>
                    <div class="flex items-center">
                        <img src="/api/placeholder/100/100" alt="David L."
                            class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-medium">David L.</h4>
                            <p class="text-gray-500 text-sm">Purchased: Lunar Pearl Earrings</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
