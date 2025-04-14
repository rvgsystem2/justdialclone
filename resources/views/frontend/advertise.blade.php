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
            background: linear-gradient(135deg, #0a2463 0%, #3e92cc 100%);
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
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(59, 130, 246, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0);
            }
        }
    </style>

    <!-- Header Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Justdial_Logo.svg/2560px-Justdial_Logo.svg.png"
                        alt="Justdial" class="h-8">
                    <div class="hidden md:flex ml-10 space-x-8">
                        <a href="#features" class="text-gray-600 hover:text-blue-600 font-medium">Features</a>
                        <a href="#plans" class="text-gray-600 hover:text-blue-600 font-medium">Plans</a>
                        <a href="#testimonials" class="text-gray-600 hover:text-blue-600 font-medium">Testimonials</a>
                        <a href="#contact" class="text-gray-600 hover:text-blue-600 font-medium">Contact</a>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#contact"
                        class="hidden md:inline-block px-4 py-2 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 transition-colors font-medium">Login</a>
                    <a href="#contact"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-medium btn-pulse">Get
                        Started</a>

                    <!-- Mobile menu button -->
                    <button class="md:hidden bg-gray-100 p-2 rounded-md focus:outline-none">
                        <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
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
                <h1 class="text-3xl md:text-5xl font-bold mb-6">Grow Your Business with Justdial Advertising</h1>
                <p class="text-lg md:text-xl mb-10 opacity-90">Reach over 25 million monthly active users looking for
                    businesses like yours. Get more calls, more customers, more growth.</p>

                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#contact"
                        class="inline-block px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:bg-blue-50 transition-colors shadow-lg transform hover:scale-105">
                        Start Advertising
                    </a>
                    <a href="#plans"
                        class="inline-block px-8 py-4 bg-transparent border-2 border-white text-white rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                        View Plans
                    </a>
                </div>
            </div>

            <!-- Stats -->
            <div class="mt-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-filter backdrop-blur-sm border border-white border-opacity-20 count-stat"
                    style="--delay: 0.2s">
                    <p class="text-4xl text-blue-600 font-bold">25M+</p>
                    <p class="text-sm text-blue-600 opacity-80 mt-2">Monthly Active Users</p>
                </div>
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-filter backdrop-blur-sm border border-white border-opacity-20 count-stat"
                    style="--delay: 0.4s">
                    <p class="text-4xl text-blue-600 font-bold">500K+</p>
                    <p class="text-sm text-blue-600 opacity-80 mt-2">Business Listings</p>
                </div>
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-filter backdrop-blur-sm border border-white border-opacity-20 count-stat"
                    style="--delay: 0.6s">
                    <p class="text-4xl text-blue-600 font-bold">150M+</p>
                    <p class="text-sm text-blue-600 opacity-80 mt-2">Monthly Searches</p>
                </div>
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-filter backdrop-blur-sm border border-white border-opacity-20 count-stat"
                    style="--delay: 0.8s">
                    <p class="text-4xl text-blue-600 font-bold">20+</p>
                    <p class="text-sm text-blue-600 opacity-80 mt-2">Years of Trust</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Businesses Using Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-500 mb-8">TRUSTED BY BUSINESSES ACROSS INDIA</p>
            <div class="flex flex-wrap justify-center items-center gap-12">
                <!-- Brand Logos -->
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/JustDial_Logo.png" alt="JustDial logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity"
                    onerror="this.onerror=null; this.src='https://via.placeholder.com/120x60?text=Logo';">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Flipkart_logo_2018.png" alt="Flipkart logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity"
                    onerror="this.onerror=null; this.src='https://via.placeholder.com/120x60?text=Logo';">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/PhonePe_logo.png" alt="PhonePe logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity"
                    onerror="this.onerror=null; this.src='https://via.placeholder.com/120x60?text=Logo';">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e3/Amazon_logo.svg" alt="Amazon logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity"
                    onerror="this.onerror=null; this.src='https://via.placeholder.com/120x60?text=Logo';">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/Myntra_logo.png" alt="Myntra logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity"
                    onerror="this.onerror=null; this.src='https://via.placeholder.com/120x60?text=Logo';">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6f/Paytm_Logo.svg" alt="Paytm logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity"
                    onerror="this.onerror=null; this.src='https://via.placeholder.com/120x60?text=Logo';">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="bg-gray-800 text-white py-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Why Advertise with JustDial?</h2>
            <p class="text-lg text-gray-300 mb-12">
                Powerful features to boost your business visibility and drive real results.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Feature 1: Increased Visibility -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-blue-400 mb-4">Increased Visibility</h3>
                    <p class="text-gray-300">
                        With millions of users searching for services and businesses, advertising on JustDial ensures that
                        your business gets seen by the right audience, every time.
                    </p>
                </div>

                <!-- Feature 2: Targeted Marketing -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-blue-400 mb-4">Targeted Marketing</h3>
                    <p class="text-gray-300">
                        Reach customers who are actively searching for products or services in your niche. JustDial's
                        advertising platform helps you target the right audience for maximum impact.
                    </p>
                </div>

                <!-- Feature 3: Real-Time Analytics -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-blue-400 mb-4">Real-Time Analytics</h3>
                    <p class="text-gray-300">
                        Track the performance of your advertisements in real-time. Measure clicks, views, and leads to see
                        exactly how your investment is driving results.
                    </p>
                </div>

                <!-- Feature 4: Local SEO Boost -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-blue-400 mb-4">Local SEO Boost</h3>
                    <p class="text-gray-300">
                        JustDial's powerful SEO tools help you rank higher in local searches, ensuring your business appears
                        in front of customers when they need you the most.
                    </p>
                </div>

                <!-- Feature 5: Lead Generation -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-blue-400 mb-4">Lead Generation</h3>
                    <p class="text-gray-300">
                        Generate qualified leads through JustDial’s exclusive lead generation system. Turn online inquiries
                        into real-world customers effortlessly.
                    </p>
                </div>

                <!-- Feature 6: Customizable Plans -->
                <div class="bg-gray-900 p-8 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-blue-400 mb-4">Customizable Plans</h3>
                    <p class="text-gray-300">
                        Tailor your advertising campaigns to suit your business needs. Whether you’re a small business or a
                        large enterprise, JustDial offers flexible advertising solutions.
                    </p>
                </div>
            </div>

            <div class="mt-12">
                <a href="{{ route('advertise') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-semibold text-lg transition-colors">
                    Get Started with Advertising
                </a>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="bg-white text-gray-900 py-16 px-4">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">How It Works</h2>
            <p class="text-lg text-gray-700 mb-12">
                Get started with JustDial advertising in three simple steps.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Step 1: Choose Your Plan -->
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-blue-400 mb-4">1. Choose Your Plan</h3>
                    <p class="text-gray-700">
                        Select an advertising package that suits your business needs and budget. Whether you’re looking for
                        visibility or lead generation, we have the right plan for you.
                    </p>
                </div>

                <!-- Step 2: Complete Your Profile -->
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-blue-400 mb-4">2. Complete Your Profile</h3>
                    <p class="text-gray-700">
                        Our team will guide you to create an engaging business profile that showcases your offerings,
                        services, and unique value to attract potential customers.
                    </p>
                </div>

                <!-- Step 3: Start Advertising -->
                <div class="bg-gray-100 p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-semibold text-blue-400 mb-4">3. Start Advertising</h3>
                    <p class="text-gray-700">
                        Once your profile is set up, your ads will be live. We’ll help you track the performance and make
                        adjustments to maximize your results.
                    </p>
                </div>
            </div>

            <div class="mt-12">
                <a href="{{ route('advertise') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-semibold text-lg transition-colors">
                    Get Started with Advertising
                </a>
            </div>
        </div>
    </section>

    <!-- Pricing Plans Section -->
    <section id="plans" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Choose Your Advertising Plan</h2>
                <p class="text-gray-600 text-lg">Flexible options to fit businesses of all sizes</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden plan-card">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Starter</h3>
                        <div class="flex items-baseline mb-6">
                            <span class="text-4xl font-bold">₹4,999</span>
                            <span class="text-gray-500 ml-2">/month</span>
                        </div>
                        <p class="text-gray-600 mb-6">Perfect for small businesses just getting started</p>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Enhanced business listing</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1" ...></svg><span>Top
                                    10 search placement</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1" ...></svg><span>5
                                    product/service photos</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Basic analytics reports</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Email & phone support</span></li>
                        </ul>
                        <a href="#contact"
                            class="block w-full bg-gray-100 text-blue-600 text-center py-3 rounded-lg font-semibold hover:bg-gray-200 transition-colors">Get
                            Started</a>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div
                    class="bg-white rounded-xl shadow-lg transform md:scale-105 border-2 border-blue-600 relative plan-card z-10">
                    <div class="absolute top-0 inset-x-0 transform -translate-y-1/2">
                        <div class="inline-block bg-blue-600 text-white px-4 py-1 rounded-full text-sm font-semibold">Most
                            Popular</div>
                    </div>
                    <div class="p-6 pt-12">
                        <h3 class="text-xl font-semibold mb-2">Growth</h3>
                        <div class="flex items-baseline mb-6">
                            <span class="text-4xl font-bold">₹9,999</span>
                            <span class="text-gray-500 ml-2">/month</span>
                        </div>
                        <p class="text-gray-600 mb-6">Designed for growing businesses seeking more visibility</p>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Priority search listing</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1" ...></svg><span>15
                                    product/service photos</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Advanced analytics reports</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Review & rating management</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Dedicated account manager</span></li>
                        </ul>
                        <a href="#contact"
                            class="block w-full bg-blue-600 text-white text-center py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">Choose
                            Growth</a>
                    </div>
                </div>

                <!-- Pro Plan -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden plan-card">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">Pro</h3>
                        <div class="flex items-baseline mb-6">
                            <span class="text-4xl font-bold">₹14,999</span>
                            <span class="text-gray-500 ml-2">/month</span>
                        </div>
                        <p class="text-gray-600 mb-6">Best for established brands looking to dominate local search</p>
                        <ul class="mb-8 space-y-3">
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Top-tier search ranking</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Unlimited product/service photos</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Competitor insights</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>Social media promotion</span></li>
                            <li class="flex items-start"><svg class="h-5 w-5 text-green-500 mr-3 mt-1"
                                    ...></svg><span>24/7 priority support</span></li>
                        </ul>
                        <a href="#contact"
                            class="block w-full bg-gray-100 text-blue-600 text-center py-3 rounded-lg font-semibold hover:bg-gray-200 transition-colors">Go
                            Pro</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Style -->
    <style>
        .testimonial-container {
            position: relative;
            padding: 0 60px;
        }

        @media (max-width: 768px) {
            .testimonial-card {
                min-width: 100%;
            }
        }

        @media (min-width: 768px) and (max-width: 1024px) {
            .testimonial-card {
                min-width: 48%;
            }
        }

        @media (min-width: 1024px) {
            .testimonial-card {
                min-width: 32%;
            }
        }

        .nav-button {
            z-index: 10;
        }

        .testimonial-track {
            transition: transform 0.5s ease-out;
        }
    </style>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">What Our Customers Say</h2>
                <p class="text-gray-600 text-lg">Success stories from businesses across India</p>
            </div>

            <div class="testimonial-container">
                <!-- Previous Button -->
                <button
                    class="nav-button absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-200 hover:bg-gray-300 rounded-full p-2 shadow-lg focus:outline-none"
                    id="prevBtn" aria-label="Previous testimonial">
                    <span class="material-icons">chevron_left</span>
                </button>

                <!-- Testimonial Track -->
                <div class="overflow-hidden">
                    <div class="testimonial-track flex transition-transform duration-500" id="testimonialTrack">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-card p-2">
                            <div class="bg-gray-50 rounded-xl p-8 h-full shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex items-center mb-6">
                                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                        <span class="material-icons text-blue-600">person</span>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold">Rajesh Sharma</h4>
                                        <p class="text-gray-500">Delhi Electronics</p>
                                    </div>
                                </div>
                                <p class="text-gray-600">"Since advertising with Justdial, our customer inquiries have
                                    increased by 70%. The return on investment has been incredible, and the platform's
                                    analytics help us track everything."</p>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-card p-2">
                            <div class="bg-gray-50 rounded-xl p-8 h-full shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex items-center mb-6">
                                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                        <span class="material-icons text-blue-600">person</span>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold">Priya Patel</h4>
                                        <p class="text-gray-500">Mumbai Beauty Salon</p>
                                    </div>
                                </div>
                                <p class="text-gray-600">"The best marketing decision we ever made. Being featured at the
                                    top of search results has brought us so many new clients. The ROI is amazing compared to
                                    other advertising channels."</p>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-card p-2">
                            <div class="bg-gray-50 rounded-xl p-8 h-full shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex items-center mb-6">
                                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                        <span class="material-icons text-blue-600">person</span>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold">Arun Mehta</h4>
                                        <p class="text-gray-500">Jaipur Jewellers</p>
                                    </div>
                                </div>
                                <p class="text-gray-600">"Justdial has helped us expand our local reach significantly. Our
                                    online presence improved drastically, and we started getting quality leads within a week
                                    of registration."</p>
                            </div>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="testimonial-card p-2">
                            <div class="bg-gray-50 rounded-xl p-8 h-full shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex items-center mb-6">
                                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                        <span class="material-icons text-blue-600">person</span>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold">Sunita Reddy</h4>
                                        <p class="text-gray-500">Bangalore IT Solutions</p>
                                    </div>
                                </div>
                                <p class="text-gray-600">"Our digital visibility has transformed since we joined Justdial.
                                    The premium listing has been worth every rupee, bringing us consistent business growth
                                    month after month."</p>
                            </div>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="testimonial-card p-2">
                            <div class="bg-gray-50 rounded-xl p-8 h-full shadow-sm hover:shadow-md transition-shadow">
                                <div class="flex items-center mb-6">
                                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                        <span class="material-icons text-blue-600">person</span>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold">Vikram Singh</h4>
                                        <p class="text-gray-500">Chandigarh Auto Services</p>
                                    </div>
                                </div>
                                <p class="text-gray-600">"The verification badge on our Justdial listing has built immense
                                    trust with customers. We've seen a 50% increase in walk-ins since upgrading our business
                                    profile."</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Next Button -->
                <button
                    class="nav-button absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-200 hover:bg-gray-300 rounded-full p-2 shadow-lg focus:outline-none"
                    id="nextBtn" aria-label="Next testimonial">
                    <span class="material-icons">chevron_right</span>
                </button>

                <!-- Indicator Dots -->
                <div class="flex justify-center mt-8" id="indicators">
                    <!-- Dots will be inserted by JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials JavaScript for the Slider -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const prevButton = document.getElementById('prevBtn');
            const nextButton = document.getElementById('nextBtn');
            const testimonialTrack = document.getElementById('testimonialTrack');
            const testimonialCards = document.querySelectorAll('.testimonial-card');
            const indicatorsContainer = document.getElementById('indicators');

            let currentIndex = 0;
            let totalTestimonials = testimonialCards.length;
            let visibleSlides = getVisibleSlides();
            let maxIndex = totalTestimonials - visibleSlides;

            // Create indicator dots
            for (let i = 0; i <= maxIndex; i++) {
                const dot = document.createElement('button');
                dot.className = 'w-3 h-3 rounded-full mx-1 focus:outline-none';
                dot.setAttribute('aria-label', `Go to testimonial ${i+1}`);
                dot.dataset.index = i;
                indicatorsContainer.appendChild(dot);

                dot.addEventListener('click', function() {
                    goToSlide(parseInt(this.dataset.index));
                });
            }

            const indicators = indicatorsContainer.querySelectorAll('button');

            // Initialize
            updateSlider();
            updateIndicators();

            // Handle window resize
            window.addEventListener('resize', function() {
                visibleSlides = getVisibleSlides();
                maxIndex = Math.max(0, totalTestimonials - visibleSlides);

                // If current index is now out of bounds
                if (currentIndex > maxIndex) {
                    currentIndex = maxIndex;
                }

                updateSlider();

                // Rebuild indicators if needed
                while (indicatorsContainer.firstChild) {
                    indicatorsContainer.removeChild(indicatorsContainer.firstChild);
                }

                for (let i = 0; i <= maxIndex; i++) {
                    const dot = document.createElement('button');
                    dot.className = 'w-3 h-3 rounded-full mx-1 focus:outline-none';
                    dot.setAttribute('aria-label', `Go to testimonial ${i+1}`);
                    dot.dataset.index = i;
                    indicatorsContainer.appendChild(dot);

                    dot.addEventListener('click', function() {
                        goToSlide(parseInt(this.dataset.index));
                    });
                }

                updateIndicators();
            });

            // Determine how many slides should be visible based on screen width
            function getVisibleSlides() {
                if (window.innerWidth < 768) {
                    return 1; // Mobile: one card at a time
                } else if (window.innerWidth < 1024) {
                    return 2; // Tablet: two cards at a time
                } else {
                    return 3; // Desktop: three cards at a time
                }
            }

            // Move to a specific slide
            function goToSlide(index) {
                currentIndex = index;
                updateSlider();
                updateIndicators();
            }

            // Move to the next slide
            function nextSlide() {
                if (currentIndex < maxIndex) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Loop back to first slide
                }
                updateSlider();
                updateIndicators();
            }

            // Move to the previous slide
            function prevSlide() {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = maxIndex; // Loop to last slide
                }
                updateSlider();
                updateIndicators();
            }

            // Update the slider position
            function updateSlider() {
                // Get the current card width including its margins
                const cardWidth = testimonialCards[0].offsetWidth;
                const offset = -currentIndex * cardWidth;
                testimonialTrack.style.transform = `translateX(${offset}px)`;
            }

            // Update indicator dots
            function updateIndicators() {
                indicators.forEach((dot, index) => {
                    if (index === currentIndex) {
                        dot.classList.remove('bg-gray-300');
                        dot.classList.add('bg-blue-600');
                    } else {
                        dot.classList.remove('bg-blue-600');
                        dot.classList.add('bg-gray-300');
                    }
                });
            }

            // Event listeners for the buttons
            nextButton.addEventListener('click', nextSlide);
            prevButton.addEventListener('click', prevSlide);

            // Auto slide every 5 seconds
            let autoSlideInterval = setInterval(nextSlide, 5000);

            // Pause auto-sliding when hovering over the slider
            testimonialTrack.parentElement.addEventListener('mouseenter', function() {
                clearInterval(autoSlideInterval);
            });

            testimonialTrack.parentElement.addEventListener('mouseleave', function() {
                autoSlideInterval = setInterval(nextSlide, 5000);
            });

            // Initialize indicator states
            updateIndicators();
        });
    </script>

    <!-- Contact Section -->
    <section id="contact" class="bg-gray-50 py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Get in Touch</h2>
                <p class="text-gray-600 mb-10">We’d love to hear from you! Fill out the form below and we’ll get back to
                    you as soon as possible.</p>
            </div>

            <form action="#" method="POST" class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                        <input type="text" name="name" placeholder="Your Name" required
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" placeholder="you@example.com" required
                            class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                    <input type="text" name="subject" placeholder="Subject"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea name="message" rows="5" placeholder="Your message here..." required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
