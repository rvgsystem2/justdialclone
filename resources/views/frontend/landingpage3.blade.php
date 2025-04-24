@extends('layout.main')

@section('landingcontent')
    <div class="font-['Montserrat'] bg-white text-gray-800">
        <!-- Hero with Slider Effect -->
        <section class="relative h-screen overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/30 z-10"></div>
            <div class="absolute inset-0 flex items-center z-20 px-8">
                <div class="max-w-2xl">
                    <h1 class="text-5xl md:text-7xl font-light text-white mb-4">Timeless Elegance</h1>
                    <p class="text-xl text-gray-300 mb-8">Crafted with passion, designed for moments that matter.</p>
                    <a href="#collections"
                        class="inline-block border-b border-white text-white pb-2 hover:border-rose-300 hover:text-rose-300 transition duration-300">Discover
                        Now</a>
                </div>
            </div>
            <!-- Slider Background -->
            <div class="absolute inset-0 flex">
                <div class="w-full h-full bg-cover bg-center animate-slide"
                    style="background-image: url('https://images.unsplash.com/photo-1605100804763-247f67b3557e?auto=format&fit=crop&w=1600&q=80')">
                </div>
            </div>
        </section>

        <!-- Marquee Brands -->
        <section class="py-12 bg-gray-100 overflow-hidden">
            <div class="flex items-center space-x-16 animate-marquee whitespace-nowrap">
                <span class="text-gray-400 text-lg uppercase tracking-widest">Certified Diamonds</span>
                <span class="text-gray-400 text-lg uppercase tracking-widest">24K Gold</span>
                <span class="text-gray-400 text-lg uppercase tracking-widest">Handcrafted</span>
                <span class="text-gray-400 text-lg uppercase tracking-widest">Ethically Sourced</span>
                <span class="text-gray-400 text-lg uppercase tracking-widest">Since 1985</span>
                <!-- Duplicated for seamless loop -->
                <span class="text-gray-400 text-lg uppercase tracking-widest">Certified Diamonds</span>
                <span class="text-gray-400 text-lg uppercase tracking-widest">24K Gold</span>
                <span class="text-gray-400 text-lg uppercase tracking-widest">Handcrafted</span>
            </div>
        </section>

        <!-- Minimal About -->
        <section class="py-24 px-8 max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-light mb-6">Our Philosophy</h2>
                    <p class="text-gray-600 leading-relaxed mb-6">In a world of mass production, we choose the path of
                        thoughtful creation. Each piece is imagined, sketched, and perfected by master artisans who
                        understand that true luxury lies in the details.</p>
                    <a href="#"
                        class="text-sm uppercase tracking-wider border-b border-black pb-1 hover:text-rose-500 hover:border-rose-500 transition duration-300">Our
                        Story</a>
                </div>
                <div class="relative">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-200 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1599643478518-a784e5dc4c8f?auto=format&fit=crop&w=1000&q=80"
                            class="object-cover w-full h-full hover:scale-105 transition duration-700"
                            alt="Jewelry craftsmanship">
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white p-6 shadow-lg w-2/3">
                        <h3 class="font-light mb-2">Meet Our Master Jeweler</h3>
                        <p class="text-sm text-gray-600">Rajiv Malhotra, with over 40 years of experience</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Collections -->
        <section id="collections" class="py-20 bg-gray-50">
            <div class="px-8 max-w-6xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-light mb-4">Curated Collections</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Explore our signature lines designed for every occasion and
                        emotion.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Collection 1 -->
                    <div class="group relative overflow-hidden">
                        <div class="aspect-w-3 aspect-h-4 bg-gray-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a?auto=format&fit=crop&w=1000&q=80"
                                class="object-cover w-full h-full group-hover:scale-105 transition duration-700"
                                alt="Bridal collection">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex items-end p-6">
                            <div>
                                <h3 class="text-white text-xl mb-1">Bridal Elegance</h3>
                                <p class="text-gray-300 text-sm mb-3">For your most precious day</p>
                                <a href="#"
                                    class="text-white text-sm uppercase tracking-wider border-b border-white pb-1 hover:text-rose-300 hover:border-rose-300 transition duration-300">View
                                    Collection</a>
                            </div>
                        </div>
                    </div>

                    <!-- Collection 2 -->
                    <div class="group relative overflow-hidden">
                        <div class="aspect-w-3 aspect-h-4 bg-gray-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?auto=format&fit=crop&w=1000&q=80"
                                class="object-cover w-full h-full group-hover:scale-105 transition duration-700"
                                alt="Heirloom collection">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex items-end p-6">
                            <div>
                                <h3 class="text-white text-xl mb-1">Modern Heirlooms</h3>
                                <p class="text-gray-300 text-sm mb-3">Timeless pieces for generations</p>
                                <a href="#"
                                    class="text-white text-sm uppercase tracking-wider border-b border-white pb-1 hover:text-rose-300 hover:border-rose-300 transition duration-300">View
                                    Collection</a>
                            </div>
                        </div>
                    </div>

                    <!-- Collection 3 -->
                    <div class="group relative overflow-hidden">
                        <div class="aspect-w-3 aspect-h-4 bg-gray-200 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1603974372035-96a5c862f3a3?auto=format&fit=crop&w=1000&q=80"
                                class="object-cover w-full h-full group-hover:scale-105 transition duration-700"
                                alt="Everyday luxury collection">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent flex items-end p-6">
                            <div>
                                <h3 class="text-white text-xl mb-1">Everyday Luxury</h3>
                                <p class="text-gray-300 text-sm mb-3">Elevate your daily style</p>
                                <a href="#"
                                    class="text-white text-sm uppercase tracking-wider border-b border-white pb-1 hover:text-rose-300 hover:border-rose-300 transition duration-300">View
                                    Collection</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section id="products" class="py-20 bg-gray-50">
            <div class="px-6 max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-light mb-4 text-gray-800">Our Finest Creations</h2>
                    <p class="text-gray-600 max-w-2xl mx-auto">Discover exquisite designs that blend craftsmanship with
                        timeless beauty.</p>
                </div>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
                    <!-- Product Card -->
                    <div
                        class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-shadow duration-500">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=800&q=80"
                                alt="Diamond Pendant"
                                class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-medium text-gray-800 mb-1">Diamond Pendant</h3>
                            <p class="text-sm text-gray-500 mb-2">Elegant and timeless piece</p>
                            <div class="text-rose-600 font-semibold text-base">₹89,900</div>
                        </div>
                    </div>

                    <!-- Repeat for more products -->
                    <div
                        class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-shadow duration-500">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1608571425882-01d7f39bbca1?auto=format&fit=crop&w=800&q=80"
                                alt="Gold Hoop Earrings"
                                class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-medium text-gray-800 mb-1">Gold Hoop Earrings</h3>
                            <p class="text-sm text-gray-500 mb-2">Versatile for every look</p>
                            <div class="text-rose-600 font-semibold text-base">₹49,500</div>
                        </div>
                    </div>

                    <div
                        class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-shadow duration-500">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1600180758890-bbddbcf96be0?auto=format&fit=crop&w=800&q=80"
                                alt="Ruby Studs"
                                class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-medium text-gray-800 mb-1">Ruby Studs</h3>
                            <p class="text-sm text-gray-500 mb-2">A bold touch of red</p>
                            <div class="text-rose-600 font-semibold text-base">₹39,000</div>
                        </div>
                    </div>

                    <div
                        class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-shadow duration-500">
                        <div class="relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1579273162934-0cb0373a9f93?auto=format&fit=crop&w=800&q=80"
                                alt="Sapphire Ring"
                                class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-medium text-gray-800 mb-1">Sapphire Ring</h3>
                            <p class="text-sm text-gray-500 mb-2">Crafted for elegance</p>
                            <div class="text-rose-600 font-semibold text-base">₹1,29,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bespoke Section -->
        <section class="py-24 bg-black text-white">
            <div class="px-8 max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div class="order-2 md:order-1">
                        <h2 class="text-3xl font-light mb-6">Bespoke Creations</h2>
                        <p class="text-gray-400 leading-relaxed mb-6">Your vision, our craftsmanship. Collaborate with our
                            designers to create a one-of-a-kind piece that carries your personal story.</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-rose-400 mr-3 mt-0.5 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Initial consultation with our design team</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-rose-400 mr-3 mt-0.5 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Hand-selected gemstones and materials</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-rose-400 mr-3 mt-0.5 flex-shrink-0" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-300">Regular updates throughout the process</span>
                            </li>
                        </ul>
                        <a href="#"
                            class="inline-block border border-white px-8 py-3 text-sm uppercase tracking-wider hover:bg-white hover:text-black transition duration-300">Begin
                            Your Journey</a>
                    </div>
                    <div class="order-1 md:order-2">
                        <div class="aspect-w-1 aspect-h-1 bg-gray-800 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1603974372035-96a5c862f3a3?auto=format&fit=crop&w=1000&q=80"
                                class="object-cover w-full h-full hover:scale-105 transition duration-700"
                                alt="Custom jewelry design">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="py-24 px-8 bg-white">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-light mb-4">In Their Words</h2>
                    <p class="text-gray-600">Experiences that sparkle as much as our jewels</p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Testimonial 1 -->
                    <div class="border-b border-gray-200 pb-8">
                        <div class="flex items-start mb-6">
                            <div class="text-4xl font-serif text-rose-400 mr-4 leading-none">"</div>
                            <p class="text-gray-600 mt-2">The attention to detail in my custom engagement ring was beyond
                                anything I could have imagined. They captured our love story perfectly.</p>
                        </div>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/women/43.jpg"
                                class="w-12 h-12 rounded-full mr-4 object-cover">
                            <div>
                                <h4 class="font-medium">Priya Sharma</h4>
                                <p class="text-sm text-gray-500">Mumbai</p>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="border-b border-gray-200 pb-8">
                        <div class="flex items-start mb-6">
                            <div class="text-4xl font-serif text-rose-400 mr-4 leading-none">"</div>
                            <p class="text-gray-600 mt-2">I've purchased from many jewelers, but the personal touch and
                                after-sales service here is unparalleled. My grandmother's necklace restoration was handled
                                with such care.</p>
                        </div>
                        <div class="flex items-center">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                class="w-12 h-12 rounded-full mr-4 object-cover">
                            <div>
                                <h4 class="font-medium">Arjun Patel</h4>
                                <p class="text-sm text-gray-500">Delhi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Journal -->
        <section class="py-20 bg-gray-50">
            <div class="px-8 max-w-6xl mx-auto">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 gap-4">
                    <div>
                        <h2 class="text-3xl font-light">From Our Journal</h2>
                        <p class="text-gray-600">Insights on jewelry care, trends, and heritage</p>
                    </div>
                    <a href="#"
                        class="text-sm uppercase tracking-wider border-b border-black pb-1 hover:text-rose-500 hover:border-rose-500 transition duration-300">View
                        All</a>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Article 1 -->
                    <article class="group">
                        <div class="aspect-w-4 aspect-h-3 bg-gray-200 mb-6 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1603974372035-96a5c862f3a3?auto=format&fit=crop&w=1000&q=80"
                                class="object-cover w-full h-full group-hover:scale-105 transition duration-700"
                                alt="Jewelry maintenance">
                        </div>
                        <span class="text-sm text-gray-500">June 12, 2025</span>
                        <h3 class="text-xl font-light mt-1 mb-2 group-hover:text-rose-500 transition duration-300">The Art
                            of Jewelry Maintenance</h3>
                        <p class="text-gray-600 mb-4">Learn how to care for your precious pieces to maintain their sparkle
                            for generations.</p>
                        <a href="#"
                            class="text-sm uppercase tracking-wider border-b border-transparent pb-1 group-hover:border-rose-500 group-hover:text-rose-500 transition duration-300">Read
                            More</a>
                    </article>

                    <!-- Article 2 -->
                    <article class="group">
                        <div class="aspect-w-4 aspect-h-3 bg-gray-200 mb-6 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1602173574767-37ac01994b2a?auto=format&fit=crop&w=1000&q=80"
                                class="object-cover w-full h-full group-hover:scale-105 transition duration-700"
                                alt="Bridal jewelry trends">
                        </div>
                        <span class="text-sm text-gray-500">May 28, 2025</span>
                        <h3 class="text-xl font-light mt-1 mb-2 group-hover:text-rose-500 transition duration-300">Emerging
                            Trends in Bridal Jewelry</h3>
                        <p class="text-gray-600 mb-4">Discover what modern brides are choosing for their special day this
                            season.</p>
                        <a href="#"
                            class="text-sm uppercase tracking-wider border-b border-transparent pb-1 group-hover:border-rose-500 group-hover:text-rose-500 transition duration-300">Read
                            More</a>
                    </article>

                    <!-- Article 3 -->
                    <article class="group">
                        <div class="aspect-w-4 aspect-h-3 bg-gray-200 mb-6 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?auto=format&fit=crop&w=1000&q=80"
                                class="object-cover w-full h-full group-hover:scale-105 transition duration-700"
                                alt="Indian Kundan jewelry">
                        </div>
                        <span class="text-sm text-gray-500">April 15, 2025</span>
                        <h3 class="text-xl font-light mt-1 mb-2 group-hover:text-rose-500 transition duration-300">The
                            History of Indian Kundan</h3>
                        <p class="text-gray-600 mb-4">Exploring the royal heritage behind one of India's most celebrated
                            jewelry techniques.</p>
                        <a href="#"
                            class="text-sm uppercase tracking-wider border-b border-transparent pb-1 group-hover:border-rose-500 group-hover:text-rose-500 transition duration-300">Read
                            More</a>
                    </article>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="py-32 px-8 bg-rose-500 text-white text-center">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-light mb-6">Begin Your Jewelry Journey</h2>
                <p class="text-lg mb-8 max-w-2xl mx-auto">Visit our flagship store in Mumbai or schedule a private
                    consultation with our design team.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#"
                        class="bg-white text-rose-600 px-8 py-3 font-medium hover:bg-gray-100 transition duration-300">Book
                        Appointment</a>
                    <a href="#"
                        class="border border-white px-8 py-3 hover:bg-white hover:text-rose-600 transition duration-300">Contact
                        Us</a>
                </div>
            </div>
        </section>

        <!-- Footer -->
        {{-- <footer class="bg-black text-gray-400 py-16 px-8">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-4 gap-12 mb-16">
                    <div>
                        <h3 class="text-white text-lg font-medium mb-4">Collections</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-white transition duration-300">Bridal</a></li>
                            <li><a href="#" class="hover:text-white transition duration-300">Fine Jewelry</a></li>
                            <li><a href="#" class="hover:text-white transition duration-300">Men's Collection</a>
                            </li>
                            <li><a href="#" class="hover:text-white transition duration-300">Limited Editions</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-white text-lg font-medium mb-4">Services</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-white transition duration-300">Custom Design</a></li>
                            <li><a href="#" class="hover:text-white transition duration-300">Jewelry Repair</a></li>
                            <li><a href="#" class="hover:text-white transition duration-300">Ring Sizing</a></li>
                            <li><a href="#" class="hover:text-white transition duration-300">Appraisal</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-white text-lg font-medium mb-4">Company</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="hover:text-white transition duration-300">Our Story</a></li>
                            <li><a href="#" class="hover:text-white transition duration-300">Ethics</a></li>
                            <li><a href="#" class="hover:text-white transition duration-300">Careers</a></li>
                            <li><a href="#" class="hover:text-white transition duration-300">Press</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-white text-lg font-medium mb-4">Contact</h3>
                        <address class="not-italic">
                            <p class="mb-2">Nariman Point</p>
                            <p class="mb-2">Mumbai, 400021</p>
                            <p class="mb-4">+91 22 1234 5678</p>
                            <div class="flex space-x-4">
                                <a href="#" class="hover:text-white transition duration-300">Instagram</a>
                                <a href="#" class="hover:text-white transition duration-300">Facebook</a>
                                <a href="#" class="hover:text-white transition duration-300">Pinterest</a>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center">
                    <p>&copy; 2025 LuxeAura Jewels. All rights reserved.</p>
                    <div class="mt-4 md:mt-0">
                        <a href="#" class="text-sm hover:text-white transition duration-300">Privacy Policy</a>
                        <span class="mx-2">•</span>
                        <a href="#" class="text-sm hover:text-white transition duration-300">Terms of Service</a>
                    </div>
                </div>
            </div>
        </footer> --}}
    </div>

    <!-- Styles -->
    <style>
        .animate-slide {
            animation: slide 16s infinite;
        }

        @keyframes slide {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .animate-marquee {
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }
    </style>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
@endsection
