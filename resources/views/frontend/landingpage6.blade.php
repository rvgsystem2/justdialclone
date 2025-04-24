@extends('layout.main')

@section('landingcontent')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-rose-900 to-amber-800 text-white overflow-hidden">
        <!-- Hero Background -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="w-full h-full bg-black/30 backdrop-blur-sm"></div>
            <img src="https://images.unsplash.com/photo-1617038260897-43759a9dd5c0" alt="Luxury Jewelry"
                class="w-full h-full object-cover opacity-30">
        </div>

        <!-- Hero Content -->
        <div class="container mx-auto px-4 py-36 relative z-10">
            <div class="max-w-2xl mx-auto">
                <div class="flex flex-col items-start mb-8">
                    <span class="material-icons text-4xl mb-4 text-amber-300">diamond</span>
                    <h1 class="text-5xl md:text-7xl font-serif font-light tracking-tight mb-3">Elegant Artistry</h1>
                    <p class="text-xl md:text-2xl font-light text-amber-100">Handcrafted jewelry for life's precious moments
                    </p>
                </div>
                <div class="flex flex-wrap gap-4">
                    <a href="#collections"
                        class="flex items-center px-8 py-3 bg-amber-400 text-rose-900 hover:bg-amber-300 transition duration-300 text-sm uppercase tracking-widest font-bold rounded shadow-lg hover:shadow-xl">
                        <span class="material-icons mr-2">diamond</span>
                        Browse Collection
                    </a>
                    <a href="#contact"
                        class="flex items-center px-8 py-3 border-2 border-amber-400 text-amber-400 hover:bg-amber-400/10 transition duration-300 text-sm uppercase tracking-widest font-bold rounded shadow-lg hover:shadow-xl">
                        <span class="material-icons mr-2">calendar_today</span>
                        Schedule Consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Display Templates -->
    <section class="py-24 bg-stone-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1 bg-rose-100 text-rose-800 rounded-full text-sm font-semibold mb-4">SHOWCASE
                    OPTIONS</span>
                <h2 class="text-4xl font-serif text-stone-800 mb-3">Display Your Collection</h2>
                <p class="text-stone-600 max-w-2xl mx-auto">Choose an elegant presentation style that highlights the beauty
                    of your jewelry pieces</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Classic Gallery -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative h-72">
                        <img src="https://images.unsplash.com/photo-1603974374379-c5cf2d47450f" alt="Classic Gallery"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                            <h3 class="text-2xl font-medium text-white">Classic Gallery</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-stone-700 mb-6">Elegant grid layout with large image previews to showcase your
                            jewelry collection in detail.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-rose-700 hover:text-rose-900 font-medium flex items-center">
                                Preview Template
                                <span class="material-icons ml-1">visibility</span>
                            </a>
                            <button
                                class="px-5 py-2 bg-rose-700 text-white rounded text-sm hover:bg-rose-800 transition shadow-md">
                                Select
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Showcase Carousel -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative h-72">
                        <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a" alt="Showcase Carousel"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                            <h3 class="text-2xl font-medium text-white">Showcase Carousel</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-stone-700 mb-6">Dynamic slider presentation that brings focus to each individual
                            piece with smooth transitions.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-rose-700 hover:text-rose-900 font-medium flex items-center">
                                Preview Template
                                <span class="material-icons ml-1">visibility</span>
                            </a>
                            <button
                                class="px-5 py-2 bg-rose-700 text-white rounded text-sm hover:bg-rose-800 transition shadow-md">
                                Select
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Detail View -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300">
                    <div class="relative h-72">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e" alt="Detail View"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-6">
                            <h3 class="text-2xl font-medium text-white">Detail View</h3>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-stone-700 mb-6">Enhanced zoom functionality allowing customers to appreciate the
                            intricate details of your jewelry.</p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-rose-700 hover:text-rose-900 font-medium flex items-center">
                                Preview Template
                                <span class="material-icons ml-1">visibility</span>
                            </a>
                            <button
                                class="px-5 py-2 bg-rose-700 text-white rounded text-sm hover:bg-rose-800 transition shadow-md">
                                Select
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Collections -->
    <section id="collections" class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1 bg-amber-100 text-amber-800 rounded-full text-sm font-semibold mb-4">EXQUISITE
                    PIECES</span>
                <h2 class="text-4xl font-serif text-stone-800 mb-3">Our Signature Collections</h2>
                <p class="text-stone-600 max-w-2xl mx-auto">Discover our carefully curated selection of handcrafted jewelry
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Collection 1 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-lg shadow-lg">
                        <img src="https://images.unsplash.com/photo-1603974374379-c5cf2d47450f" alt="Rings Collection"
                            class="w-full h-80 object-cover transition duration-700 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-rose-900/80 to-transparent opacity-90 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-2xl font-serif text-white mb-2">Timeless Rings</h3>
                                <p class="text-amber-200 mb-4">Symbols of eternal commitment and style</p>
                                <a href="#"
                                    class="inline-flex items-center text-white border-b border-amber-300 pb-1 hover:text-amber-300 transition">
                                    Explore Collection
                                    <span class="material-icons ml-2">east</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collection 2 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-lg shadow-lg">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e" alt="Necklaces Collection"
                            class="w-full h-80 object-cover transition duration-700 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-rose-900/80 to-transparent opacity-90 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-2xl font-serif text-white mb-2">Luxurious Necklaces</h3>
                                <p class="text-amber-200 mb-4">Statement pieces crafted for unforgettable moments</p>
                                <a href="#"
                                    class="inline-flex items-center text-white border-b border-amber-300 pb-1 hover:text-amber-300 transition">
                                    Explore Collection
                                    <span class="material-icons ml-2">east</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collection 3 -->
                <div class="group">
                    <div class="relative overflow-hidden rounded-lg shadow-lg">
                        <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a" alt="Earrings Collection"
                            class="w-full h-80 object-cover transition duration-700 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-rose-900/80 to-transparent opacity-90 group-hover:opacity-100 transition duration-300">
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-2xl font-serif text-white mb-2">Elegant Earrings</h3>
                                <p class="text-amber-200 mb-4">From subtle sparkle to bold statements</p>
                                <a href="#"
                                    class="inline-flex items-center text-white border-b border-amber-300 pb-1 hover:text-amber-300 transition">
                                    Explore Collection
                                    <span class="material-icons ml-2">east</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-24 bg-stone-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <div>
                    <span
                        class="inline-block px-4 py-1 bg-rose-100 text-rose-800 rounded-full text-sm font-semibold mb-4">BEST
                        SELLERS</span>
                    <h2 class="text-4xl font-serif text-stone-800">Featured Creations</h2>
                </div>
                <div class="mt-6 md:mt-0">
                    <div class="inline-flex flex-wrap gap-3 p-1 bg-stone-200 rounded-lg">
                        <button class="px-5 py-2 bg-rose-700 text-white rounded text-sm font-medium transition shadow-sm"
                            data-filter="all">All</button>
                        <button class="px-5 py-2 hover:bg-stone-300 text-stone-700 rounded text-sm font-medium transition"
                            data-filter="rings">Rings</button>
                        <button class="px-5 py-2 hover:bg-stone-300 text-stone-700 rounded text-sm font-medium transition"
                            data-filter="necklaces">Necklaces</button>
                        <button class="px-5 py-2 hover:bg-stone-300 text-stone-700 rounded text-sm font-medium transition"
                            data-filter="earrings">Earrings</button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="product-gallery">

                <!-- Product Template Start -->
                <!-- Duplicate this block for more products -->
                <div class="group bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300"
                    data-category="rings">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1603974374379-c5cf2d47450f"
                            alt="Diamond Engagement Ring" class="w-full aspect-square object-cover">
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-amber-400 text-rose-900 px-3 py-1 rounded text-xs font-bold uppercase tracking-wider">Featured</span>
                        </div>
                        <div
                            class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-3">
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">favorite_border</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">visibility</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">shopping_bag</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-serif text-stone-800 mb-1">Lumière Diamond Ring</h3>
                        <p class="text-stone-600 mb-3">Platinum setting with 1.5ct brilliant cut</p>
                        <div class="flex justify-between items-center">
                            <p class="text-xl font-bold text-rose-700">₹402,550</p>
                            <div class="flex items-center text-amber-500">
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star</span>
                                <span class="material-icons text-sm">star_half</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add more products below -->
                <div class="group bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300"
                    data-category="necklaces">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e" alt="Sapphire Pendant"
                            class="w-full aspect-square object-cover">
                        <div
                            class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-3">
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">favorite_border</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">visibility</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">shopping_bag</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-serif text-stone-800 mb-1">Azure Teardrop Pendant</h3>
                        <p class="text-stone-600 mb-3">18K gold with natural sapphire and diamonds</p>
                        <div class="flex justify-between items-center">
                            <p class="text-xl font-bold text-rose-700">₹273,485</p>
                            <div class="flex items-center text-amber-500">
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
                <div class="group bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300"
                    data-category="earrings">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1602810311419-9bfe7f7b5f36" alt="Gold Earrings"
                            class="w-full aspect-square object-cover">
                        <div
                            class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-3">
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">favorite_border</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">visibility</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">shopping_bag</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-serif text-stone-800 mb-1">Golden Leaf Earrings</h3>
                        <p class="text-stone-600 mb-3">22K gold leaf design with intricate detailing</p>
                        <div class="flex justify-between items-center">
                            <p class="text-xl font-bold text-rose-700">₹165,000</p>
                            <div class="flex items-center text-amber-500">
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
                <div class="group bg-white rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300"
                    data-category="necklaces">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1599940824396-62f11f7b6f5d" alt="Ruby Bracelet"
                            class="w-full aspect-square object-cover">
                        <div
                            class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <div class="flex gap-3">
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">favorite_border</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">visibility</span>
                                </button>
                                <button
                                    class="w-10 h-10 rounded-full bg-white flex items-center justify-center hover:bg-rose-100 shadow-md">
                                    <span class="material-icons text-rose-700">shopping_bag</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-xl font-serif text-stone-800 mb-1">Royal Ruby Bracelet</h3>
                        <p class="text-stone-600 mb-3">Delicate 18K gold with handpicked rubies</p>
                        <div class="flex justify-between items-center">
                            <p class="text-xl font-bold text-rose-700">₹198,360</p>
                            <div class="flex items-center text-amber-500">
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

            <div class="text-center mt-16">
                <a href="#"
                    class="inline-flex items-center px-8 py-3 bg-rose-700 text-white rounded hover:bg-rose-800 transition duration-300 font-medium shadow-md">
                    View Complete Collection
                    <span class="material-icons ml-2">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Artisan Craftsmanship -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="relative">
                        <div class="grid grid-cols-2 gap-6">
                            <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e" alt="Jewelry Crafting"
                                class="w-full rounded-lg shadow-lg">
                            <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a" alt="Jewelry Design"
                                class="w-full mt-12 rounded-lg shadow-lg">
                        </div>
                        <div class="absolute -bottom-10 -right-10 bg-rose-700 p-6 rounded-lg shadow-lg hidden md:block">
                            <p class="text-white text-lg font-serif">25+ years of expertise</p>
                        </div>
                    </div>
                </div>
                <div>
                    <span
                        class="inline-block px-4 py-1 bg-amber-100 text-amber-800 rounded-full text-sm font-semibold mb-4">OUR
                        CRAFT</span>
                    <h2 class="text-4xl font-serif text-stone-800 mb-6">The Art of Fine Jewelry</h2>
                    <p class="text-stone-600 mb-8">Each piece in our collection represents the culmination of traditional
                        craftsmanship and contemporary design. Our master jewelers bring decades of expertise to every
                        creation.</p>

                    <div class="space-y-5 mb-10">
                        <div class="flex items-start">
                            <span class="material-icons text-amber-500 mr-4 mt-1">diamond</span>
                            <div>
                                <h3 class="text-lg font-medium text-stone-800 mb-1">Ethically Sourced Materials</h3>
                                <p class="text-stone-600">We use only conflict-free diamonds and gemstones, alongside
                                    recycled precious metals.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="material-icons text-amber-500 mr-4 mt-1">design_services</span>
                            <div>
                                <h3 class="text-lg font-medium text-stone-800 mb-1">Custom Design Process</h3>
                                <p class="text-stone-600">Our specialized design team works closely with you to bring your
                                    vision to life.</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="material-icons text-amber-500 mr-4 mt-1">verified</span>
                            <div>
                                <h3 class="text-lg font-medium text-stone-800 mb-1">Lifetime Guarantee</h3>
                                <p class="text-stone-600">Each piece comes with our commitment to quality and
                                    craftsmanship.</p>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                        class="inline-flex items-center px-8 py-3 bg-amber-400 text-rose-900 hover:bg-amber-300 transition duration-300 rounded font-medium shadow-md">
                        Our Craftsmanship Story
                        <span class="material-icons ml-2">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-rose-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1 bg-rose-100 text-rose-800 rounded-full text-sm font-semibold mb-4">CUSTOMER
                    EXPERIENCES</span>
                <h2 class="text-4xl font-serif text-stone-800 mb-3">Stories from Our Clients</h2>
                <p class="text-stone-600 max-w-2xl mx-auto">Hear what our customers have to say about their experiences
                    with our jewelry</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex items-center text-amber-500 mb-6">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </div>
                    <p class="text-stone-700 mb-6 italic">"My fiancée was absolutely speechless when I proposed with the
                        Lumière ring. The quality and brilliance of the diamond is unmatched. Worth every penny."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="James R."
                            class="w-14 h-14 rounded-full object-cover mr-4 border-2 border-amber-400">
                        <div>
                            <h4 class="font-medium text-stone-800">James R.</h4>
                            <p class="text-stone-500 text-sm">New York, NY</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex items-center text-amber-500 mb-6">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                    </div>
                    <p class="text-stone-700 mb-6 italic">"The craftsmanship of the Azure pendant is exquisite. I've
                        received countless compliments, and the customer service experience was exceptional from start to
                        finish."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Amelia S."
                            class="w-14 h-14 rounded-full object-cover mr-4 border-2 border-amber-400">
                        <div>
                            <h4 class="font-medium text-stone-800">Amelia S.</h4>
                            <p class="text-stone-500 text-sm">Chicago, IL</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex items-center text-amber-500 mb-6">
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star</span>
                        <span class="material-icons">star_half</span>
                    </div>
                    <p class="text-stone-700 mb-6 italic">"I ordered custom earrings for my anniversary, and the team went
                        above and beyond to create exactly what I envisioned. The packaging was beautiful and delivery was
                        prompt."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Robert M."
                            class="w-14 h-14 rounded-full object-cover mr-4 border-2 border-amber-400">
                        <div>
                            <h4 class="font-medium text-stone-800">Robert M.</h4>
                            <p class="text-stone-500 text-sm">Austin, TX</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center text-rose-700 hover:text-rose-900 font-medium">
                    Read More Testimonials
                    <span class="material-icons ml-1">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-stone-900 text-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <div>
                    <span
                        class="inline-block px-4 py-1 bg-amber-400 text-rose-900 rounded-full text-sm font-semibold mb-4">GET
                        IN TOUCH</span>
                    <h2 class="text-4xl font-serif text-white mb-6">Schedule Your Private Consultation</h2>
                    <p class="text-stone-300 mb-8">Our jewelry experts are available to guide you through our collections
                        or help you create a custom piece that tells your unique story.</p>

                    <div class="space-y-6 mb-10">
                        <div class="flex items-start">
                            <span class="material-icons text-amber-400 mr-4">location_on</span>
                            <div>
                                <h3 class="text-lg font-medium text-white mb-1">Our Showroom</h3>
                                <p class="text-stone-300">123 Luxury Lane, Suite 400<br>New York, NY 10001</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="material-icons text-amber-400 mr-4">schedule</span>
                            <div>
                                <h3 class="text-lg font-medium text-white mb-1">Hours</h3>
                                <p class="text-stone-300">Monday - Friday: 10am - 7pm<br>Saturday: 11am - 5pm<br>Sunday: By
                                    appointment only</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <span class="material-icons text-amber-400 mr-4">call</span>
                            <div>
                                <h3 class="text-lg font-medium text-white mb-1">Contact</h3>
                                <p class="text-stone-300">Phone: (212) 555-7890<br>Email: appointments@timelessluxury.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-stone-800 p-8 rounded-lg">
                    <h3 class="text-2xl font-serif text-white mb-6">Request an Appointment</h3>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-stone-300 mb-2 text-sm">First Name</label>
                                <input type="text"
                                    class="w-full bg-stone-700 border border-stone-600 rounded p-3 text-white focus:outline-none focus:border-amber-400">
                            </div>
                            <div>
                                <label class="block text-stone-300 mb-2 text-sm">Last Name</label>
                                <input type="text"
                                    class="w-full bg-stone-700 border border-stone-600 rounded p-3 text-white focus:outline-none focus:border-amber-400">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-stone-300 mb-2 text-sm">Email Address</label>
                            <input type="email"
                                class="w-full bg-stone-700 border border-stone-600 rounded p-3 text-white focus:outline-none focus:border-amber-400">
                        </div>
                        <div class="mb-6">
                            <label class="block text-stone-300 mb-2 text-sm">Phone Number</label>
                            <input type="tel"
                                class="w-full bg-stone-700 border border-stone-600 rounded p-3 text-white focus:outline-none focus:border-amber-400">
                        </div>
                        <div class="mb-6">
                            <label class="block text-stone-300 mb-2 text-sm">Interested In</label>
                            <select
                                class="w-full bg-stone-700 border border-stone-600 rounded p-3 text-white focus:outline-none focus:border-amber-400">
                                <option>Engagement Rings</option>
                                <option>Wedding Bands</option>
                                <option>Necklaces & Pendants</option>
                                <option>Earrings</option>
                                <option>Custom Design</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="block text-stone-300 mb-2 text-sm">Preferred Date</label>
                            <input type="date"
                                class="w-full bg-stone-700 border border-stone-600 rounded p-3 text-white focus:outline-none focus:border-amber-400">
                        </div>
                        <div class="mb-8">
                            <label class="block text-stone-300 mb-2 text-sm">Additional Information</label>
                            <textarea rows="4"
                                class="w-full bg-stone-700 border border-stone-600 rounded p-3 text-white focus:outline-none focus:border-amber-400"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-amber-400 text-rose-900 font-bold py-3 px-6 rounded hover:bg-amber-300 transition duration-300">
                            Schedule Consultation
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-16 bg-rose-900">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-serif text-white mb-2">Join Our Exclusive List</h3>
                    <p class="text-rose-200">Be the first to know about new collections and special events</p>
                </div>
                <div class="w-full md:w-auto flex flex-col sm:flex-row gap-3">
                    <input type="email" placeholder="Your email address"
                        class="px-6 py-3 rounded bg-rose-800 border border-rose-700 text-white placeholder-rose-300 focus:outline-none focus:border-amber-400">
                    <button
                        class="px-6 py-3 bg-amber-400 text-rose-900 font-bold rounded hover:bg-amber-300 transition duration-300">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-stone-900 text-stone-400 py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div>
                    <h4 class="text-xl font-serif text-white mb-6">Timeless Luxury</h4>
                    <p class="mb-6">Crafting exceptional jewelry for life's most precious moments since 1998.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-stone-400 hover:text-amber-400">
                            <span class="material-icons">facebook</span>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-amber-400">
                            <span class="material-icons">photo_camera</span>
                        </a>
                        <a href="#" class="text-stone-400 hover:text-amber-400">
                            <span class="material-icons">pinterest</span>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-medium text-white mb-6">Our Collections</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-amber-400 transition">Engagement Rings</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Wedding Bands</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Necklaces & Pendants</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Earrings</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Bracelets</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Custom Designs</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-medium text-white mb-6">Customer Service</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-amber-400 transition">Contact Us</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Shipping & Returns</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Care Instructions</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Sizing Guide</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-medium text-white mb-6">About Us</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-amber-400 transition">Our Story</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Artisan Craftsmanship</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Ethical Sourcing</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Testimonials</a></li>
                        <li><a href="#" class="hover:text-amber-400 transition">Press</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-stone-800 flex flex-col md:flex-row justify-between items-center">
                <p>&copy; 2025 Timeless Luxury Jewelry. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-sm hover:text-amber-400 transition">Privacy Policy</a>
                    <a href="#" class="text-sm hover:text-amber-400 transition">Terms of Service</a>
                    <a href="#" class="text-sm hover:text-amber-400 transition">Accessibility</a>
                </div>
            </div>
        </div>
    </footer>
@endsection
