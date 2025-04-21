@extends('components.main')

@section('content')
    <style>
        /* Custom Animations */
        .slide-up {
            opacity: 0;
            transform: translateY(40px);
        }

        .fade-in {
            opacity: 0;
        }

        /* Custom Gradient */
        .jd-gradient {
            background: linear-gradient(135deg, #8B4513 0%, #DAA520 100%);
        }

        /* Custom Card Hover */
        .plan-card {
            transition: all 0.3s ease;
        }

        .plan-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Testimonial Carousel */
        .testimonial-container {
            overflow: hidden;
            position: relative;
        }

        .testimonial-track {
            display: flex;
            transition: transform 0.5s ease-out;
        }

        .testimonial-card {
            flex: 0 0 100%;
        }

        /* Stats Counter Animation */
        @keyframes countUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .count-stat {
            animation: countUp 1s forwards;
            animation-delay: var(--delay);
        }

        /* Custom Button Animation */
        .btn-pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 140, 0, 0.7);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(255, 140, 0, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 140, 0, 0);
            }
        }
    </style>

    <!-- Header Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center py-4 space-y-4 md:space-y-0">

                <!-- Mobile & Desktop Navigation -->
                <nav class="overflow-x-auto no-scrollbar -mx-4 px-4 md:mx-0 md:px-0">
                    <div
                        class="flex space-x-6 md:space-x-8 text-sm md:text-base whitespace-nowrap justify-center md:justify-start">
                        <a href="#features"
                            class="text-gray-700 hover:text-amber-600 font-medium transition-colors duration-200">Collections</a>
                        <a href="#plans"
                            class="text-gray-700 hover:text-amber-600 font-medium transition-colors duration-200">Pricing</a>
                        <a href="#testimonials"
                            class="text-gray-700 hover:text-amber-600 font-medium transition-colors duration-200">Testimonials</a>
                        <a href="#contact"
                            class="text-gray-700 hover:text-amber-600 font-medium transition-colors duration-200">Contact</a>
                    </div>
                </nav>

                <!-- Centered Buttons for Mobile, Right Aligned for Desktop -->
                <div class="flex justify-center md:justify-end space-x-3 md:space-x-4">
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 border border-amber-600 text-amber-600 rounded-md hover:bg-amber-50 focus:outline-none focus:ring-2 focus:ring-amber-300 font-medium text-sm md:text-base transition-all duration-200">
                        Login
                    </a>
                    <a href="#contact"
                        class="px-4 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-400 font-medium text-sm md:text-base transition-all duration-200">
                        Book Appointment
                    </a>
                </div>

            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative jd-gradient text-white py-20 md:py-32">
        <div class="absolute inset-0 opacity-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                <pattern id="pattern-circles" x="0" y="0" width="50" height="50" patternUnits="userSpaceOnUse"
                    patternContentUnits="userSpaceOnUse">
                    <circle id="pattern-circle" cx="10" cy="10" r="1.6257413380501518" fill="#fff">
                    </circle>
                </pattern>
                <rect id="rect" x="0" y="0" width="100%" height="100%" fill="url(#pattern-circles)"></rect>
            </svg>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-3xl md:text-5xl font-bold mb-6">Timeless Jewelry for Every Occasion</h1>
                <p class="text-lg md:text-xl mb-10 opacity-90">Handcrafted with passion and precision, our jewelry
                    collection brings elegance to your everyday life.</p>

                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#contact"
                        class="inline-block px-8 py-4 bg-white text-amber-600 rounded-lg font-semibold hover:bg-amber-50 transition-colors shadow-lg transform hover:scale-105">
                        Book Consultation
                    </a>
                    <a href="#plans"
                        class="inline-block px-8 py-4 bg-transparent border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-amber-600 transition-colors">
                        View Collections
                    </a>
                </div>
            </div>

            <!-- Stats -->
            <div class="mt-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-filter backdrop-blur-sm border border-white border-opacity-20 count-stat"
                    style="--delay: 0.2s">
                    <p class="text-4xl text-amber-600 font-bold">25K+</p>
                    <p class="text-sm text-amber-600 opacity-80 mt-2">Happy Customers</p>
                </div>
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-filter backdrop-blur-sm border border-white border-opacity-20 count-stat"
                    style="--delay: 0.4s">
                    <p class="text-4xl text-amber-600 font-bold">500+</p>
                    <p class="text-sm text-amber-600 opacity-80 mt-2">Unique Designs</p>
                </div>
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-filter backdrop-blur-sm border border-white border-opacity-20 count-stat"
                    style="--delay: 0.6s">
                    <p class="text-4xl text-amber-600 font-bold">30+</p>
                    <p class="text-sm text-amber-600 opacity-80 mt-2">Master Craftsmen</p>
                </div>
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-filter backdrop-blur-sm border border-white border-opacity-20 count-stat"
                    style="--delay: 0.8s">
                    <p class="text-4xl text-amber-600 font-bold">50+</p>
                    <p class="text-sm text-amber-600 opacity-80 mt-2">Years of Excellence</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Businesses Using Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-500 mb-8">AS FEATURED IN</p>
            <div class="flex flex-wrap justify-center items-center gap-12">
                <!-- Brand Logos using placeholder images -->
                <img src="/api/placeholder/120/60?text=Vogue" alt="Vogue logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                <img src="/api/placeholder/120/60?text=Elle" alt="Elle logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                <img src="/api/placeholder/120/60?text=Brides" alt="Brides logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                <img src="/api/placeholder/120/60?text=JewelryToday" alt="Jewelry Today logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                <img src="/api/placeholder/120/60?text=LuxuryMag" alt="Luxury Magazine logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="bg-gray-800 text-white py-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Why Choose Our Jewelry?</h2>
            <p class="text-lg text-gray-300 mb-12">
                Exquisite craftsmanship and ethical sourcing for jewelry you'll treasure forever.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Feature 1: Handcrafted -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-amber-400 mb-4">Handcrafted Excellence</h3>
                    <p class="text-gray-300">
                        Each piece is meticulously crafted by our master jewelers using traditional techniques passed down
                        through generations.
                    </p>
                </div>

                <!-- Feature 2: Ethical Sourcing -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-amber-400 mb-4">Ethically Sourced</h3>
                    <p class="text-gray-300">
                        We use only conflict-free diamonds and responsibly mined gemstones, ensuring your jewelry is as
                        ethical as it is beautiful.
                    </p>
                </div>

                <!-- Feature 3: Custom Design -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-amber-400 mb-4">Custom Designs</h3>
                    <p class="text-gray-300">
                        Create your dream piece with our bespoke design service. Our designers will bring your vision to
                        life.
                    </p>
                </div>

                <!-- Feature 4: Lifetime Care -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-amber-400 mb-4">Lifetime Care</h3>
                    <p class="text-gray-300">
                        Enjoy complimentary cleaning, inspection, and maintenance for the lifetime of your jewelry.
                    </p>
                </div>

                <!-- Feature 5: Certified Quality -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-amber-400 mb-4">Certified Quality</h3>
                    <p class="text-gray-300">
                        All our diamonds and gemstones come with certification from internationally recognized gemological
                        laboratories.
                    </p>
                </div>

                <!-- Feature 6: Easy Returns -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-amber-400 mb-4">30-Day Returns</h3>
                    <p class="text-gray-300">
                        Not completely satisfied? Return your purchase within 30 days for a full refund or exchange.
                    </p>
                </div>
            </div>

            <div class="mt-12">
                <a href="#"
                    class="bg-amber-600 hover:bg-amber-700 text-white py-3 px-6 rounded-lg font-semibold text-lg transition-colors">
                    Explore Collections
                </a>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="bg-white text-gray-900 py-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Our Process</h2>
            <p class="text-lg text-gray-700 mb-12">
                Creating your perfect piece of jewelry in three simple steps.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Step 1: Consultation -->
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-amber-400 mb-4">1. Consultation</h3>
                    <p class="text-gray-700">
                        Meet with our jewelry experts to discuss your vision, preferences, and budget for your custom piece.
                    </p>
                </div>

                <!-- Step 2: Design -->
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-amber-400 mb-4">2. Design</h3>
                    <p class="text-gray-700">
                        Our designers will create sketches and 3D renderings of your jewelry for your approval before
                        crafting begins.
                    </p>
                </div>

                <!-- Step 3: Creation -->
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-amber-400 mb-4">3. Creation</h3>
                    <p class="text-gray-700">
                        Our master jewelers handcraft your piece using the finest materials, with regular updates throughout
                        the process.
                    </p>
                </div>
            </div>

            <div class="mt-12">
                <a href="#"
                    class="bg-amber-600 hover:bg-amber-700 text-white py-3 px-6 rounded-lg font-semibold text-lg transition-colors">
                    Book Consultation
                </a>
            </div>
        </div>
    </section>

    <!-- Pricing Plans Section -->
    <section id="plans" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Our Jewelry Collections</h2>
                <p class="text-gray-600 text-lg">Timeless pieces for every style and occasion</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden plan-card">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Classic Collection</h3>
                        <div class="flex items-baseline mb-6">
                            <span class="text-4xl font-bold">₹15,000+</span>
                            <span class="text-gray-500 ml-2">starting price</span>
                        </div>
                        <p class="text-gray-600 mb-6">Elegant designs that never go out of style</p>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Sterling silver and gold pieces</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Timeless designs</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Birthstone options</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Everyday wear durability</span></li>
                        </ul>
                        <a href="#contact"
                            class="block w-full bg-gray-100 text-amber-600 text-center py-3 rounded-lg font-semibold hover:bg-gray-200 transition-colors">View
                            Collection</a>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div
                    class="bg-white rounded-xl shadow-lg transform md:scale-105 border-2 border-amber-600 relative plan-card z-10">
                    <div class="absolute top-0 inset-x-0 transform -translate-y-1/2">
                        <div class="inline-block bg-amber-600 text-white px-4 py-1 rounded-full text-sm font-semibold">Most
                            Popular</div>
                    </div>
                    <div class="p-6 pt-12">
                        <h3 class="text-xl font-semibold mb-2">Bridal Collection</h3>
                        <div class="flex items-baseline mb-6">
                            <span class="text-4xl font-bold">₹50,000+</span>
                            <span class="text-gray-500 ml-2">starting price</span>
                        </div>
                        <p class="text-gray-600 mb-6">Exquisite pieces for your special day</p>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Platinum and gold options</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Conflict-free diamonds</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Custom design service</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Complimentary engraving</span></li>
                        </ul>
                        <a href="#contact"
                            class="block w-full bg-amber-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-amber-700 transition-colors">Explore
                            Bridal</a>
                    </div>
                </div>

                <!-- Pro Plan -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden plan-card">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Luxury Collection</h3>
                        <div class="flex items-baseline mb-6">
                            <span class="text-4xl font-bold">₹1,50,000+</span>
                            <span class="text-gray-500 ml-2">starting price</span>
                        </div>
                        <p class="text-gray-600 mb-6">Exceptional pieces for the discerning collector</p>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1" ...></svg><span>18K
                                    gold and platinum</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>GIA-certified diamonds</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Rare gemstones</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Private viewings available</span></li>
                        </ul>
                        <a href="#contact"
                            class="block w-full bg-gray-100 text-amber-600 text-center py-3 rounded-lg font-semibold hover:bg-gray-200 transition-colors">Discover
                            Luxury</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Testimonial Section-->
    <section id="testimonials" class="bg-gray-50 py-16 px-4">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-6">What Our Clients Say</h2>
            <p class="text-gray-600 mb-12 text-lg">Hear from our satisfied customers about their experience with our
                jewelry.</p>

            <!-- Slider Controls (visible on mobile/tablet) -->
            <div class="flex justify-center mb-6 space-x-4 lg:hidden">
                <button id="prev-btn" class="bg-gray-200 p-2 rounded-full hover:bg-gray-300">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button id="next-btn" class="bg-gray-200 p-2 rounded-full hover:bg-gray-300">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>

            <!-- Slider Container -->
            <div id="testimonial-slider" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Testimonial 1 -->
                <div
                    class="testimonial-item bg-white rounded-2xl shadow-md p-6 text-left hover:shadow-xl transition-all duration-300">
                    <p class="text-gray-700 mb-4">"The engagement ring they created was beyond my expectations. The
                        craftsmanship is exquisite and the diamond sparkles like nothing I've seen before."</p>
                    <div class="flex items-center">
                        <img src="https://i.pravatar.cc/50?img=1" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="text-md font-semibold text-gray-800">Anjali Mehta</h4>
                            <p class="text-sm text-gray-500">Bride-to-be</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="testimonial-item bg-white rounded-2xl shadow-md p-6 text-left hover:shadow-xl transition-all duration-300">
                    <p class="text-gray-700 mb-4">"I've been collecting jewelry for 20 years, and the pieces I've acquired
                        from this jeweler are among my most treasured. The quality is unmatched."</p>
                    <div class="flex items-center">
                        <img src="https://i.pravatar.cc/50?img=2" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="text-md font-semibold text-gray-800">Rahul Sharma</h4>
                            <p class="text-sm text-gray-500">Collector</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div
                    class="testimonial-item bg-white rounded-2xl shadow-md p-6 text-left hover:shadow-xl transition-all duration-300">
                    <p class="text-gray-700 mb-4">"Their custom design service brought my grandmother's heirloom into the
                        modern age while preserving its sentimental value. Perfect for my wedding day."</p>
                    <div class="flex items-center">
                        <img src="https://i.pravatar.cc/50?img=3" alt="User" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="text-md font-semibold text-gray-800">Sneha Reddy</h4>
                            <p class="text-sm text-gray-500">Bride</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const testimonials = document.querySelectorAll('.testimonial-item');
            const prevBtn = document.querySelector('#prev-btn');
            const nextBtn = document.querySelector('#next-btn');
            let currentIndex = 0;

            function getVisibleCount() {
                if (window.innerWidth >= 1024) return testimonials.length; // desktop - all
                if (window.innerWidth >= 768) return 2; // tablet - two
                return 1; // mobile - one
            }

            function updateSlider() {
                const visibleCount = getVisibleCount();
                const maxIndex = testimonials.length - visibleCount;

                // Fix index bounds
                if (currentIndex > maxIndex) currentIndex = maxIndex;
                if (currentIndex < 0) currentIndex = 0;

                testimonials.forEach((item, index) => {
                    item.classList.add('hidden');
                    if (index >= currentIndex && index < currentIndex + visibleCount) {
                        item.classList.remove('hidden');
                    }
                });
            }

            prevBtn?.addEventListener('click', () => {
                currentIndex--;
                updateSlider();
            });

            nextBtn?.addEventListener('click', () => {
                const visibleCount = getVisibleCount();
                const maxIndex = testimonials.length - visibleCount;
                if (currentIndex < maxIndex) {
                    currentIndex++;
                    updateSlider();
                }
            });

            // Recalculate on resize
            window.addEventListener('resize', () => {
                updateSlider();
            });

            updateSlider(); // Initial call
        });
    </script>

    <!-- Contact Section -->
    <section id="contact" class="bg-gray-50 py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Visit Our Showroom</h2>
                <p class="text-gray-600 mb-10">Schedule a private viewing or consultation with our jewelry experts.</p>
            </div>

            <form action="#" method="POST" class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" placeholder="Your Name" required
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" placeholder="you@example.com" required
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                    <input type="tel" name="phone" placeholder="Phone Number" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Preferred Date/Time</label>
                    <input type="text" name="datetime" placeholder="When would you like to visit?"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea name="message" rows="5" placeholder="Tell us about the jewelry you're interested in..." required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-amber-500 focus:outline-none"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="px-6 py-3 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors font-semibold">
                        Book Appointment
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
