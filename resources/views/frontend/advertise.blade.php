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
                    <p class="text-4xl font-bold">25M+</p>
                    <p class="text-sm opacity-80 mt-2">Monthly Active Users</p>
                </div>
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-filter backdrop-blur-sm border border-white border-opacity-20 count-stat"
                    style="--delay: 0.4s">
                    <p class="text-4xl font-bold">500K+</p>
                    <p class="text-sm opacity-80 mt-2">Business Listings</p>
                </div>
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-filter backdrop-blur-sm border border-white border-opacity-20 count-stat"
                    style="--delay: 0.6s">
                    <p class="text-4xl font-bold">150M+</p>
                    <p class="text-sm opacity-80 mt-2">Monthly Searches</p>
                </div>
                <div class="bg-white bg-opacity-10 rounded-xl p-6 backdrop-filter backdrop-blur-sm border border-white border-opacity-20 count-stat"
                    style="--delay: 0.8s">
                    <p class="text-4xl font-bold">20+</p>
                    <p class="text-sm opacity-80 mt-2">Years of Trust</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Businesses Using Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <p class="text-center text-gray-500 mb-8">TRUSTED BY BUSINESSES ACROSS INDIA</p>
            <div class="flex flex-wrap justify-center items-center gap-12">
                <img src="/api/placeholder/120/60" alt="Brand logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                <img src="/api/placeholder/120/60" alt="Brand logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                <img src="/api/placeholder/120/60" alt="Brand logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                <img src="/api/placeholder/120/60" alt="Brand logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                <img src="/api/placeholder/120/60" alt="Brand logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity">
                <img src="/api/placeholder/120/60" alt="Brand logo"
                    class="h-8 opacity-60 hover:opacity-100 transition-opacity">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">Why Advertise with Justdial?</h2>
                <p class="text-gray-600 text-lg">Powerful features to boost your business visibility and drive real results
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-xl p-6 shadow-md slide-up">
                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Enhanced Visibility</h3>
                    <p class="text-gray-600">Your business appears at the top of search results, giving you maximum
                        exposure to potential customers actively looking for your services.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-xl p-6 shadow-md slide-up">
                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Detailed Business Profile</h3>
                    <p class="text-gray-600">Showcase your products, services, offers, and high-quality images in an
                        enhanced profile that builds customer trust.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-xl p-6 shadow-md slide-up">
                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Performance Analytics</h3>
                    <p class="text-gray-600">Gain valuable insights with detailed reports on calls, clicks, and customer
                        engagement to track your ROI and optimize campaigns.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-white rounded-xl p-6 shadow-md slide-up">
                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Customer Reviews</h3>
                    <p class="text-gray-600">Build credibility with verified customer reviews and ratings, helping new
                        customers make confident decisions to choose you.</p>
                </div>

                <!-- Feature 5 -->
                <div class="bg-white rounded-xl p-6 shadow-md slide-up">
                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Lead Management</h3>
                    <p class="text-gray-600">Efficiently handle customer inquiries and track leads through our integrated
                        system with mobile app notifications.</p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-white rounded-xl p-6 shadow-md slide-up">
                    <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Multi-Platform Presence</h3>
                    <p class="text-gray-600">Reach customers across web, mobile app, and voice search platforms, ensuring
                        you never miss a potential lead.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">How It Works</h2>
                <p class="text-gray-600 text-lg">Get started with Justdial advertising in three simple steps</p>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center max-w-xs fade-in">
                    <div
                        class="w-16 h-16 rounded-full bg-blue-600 text-white flex items-center justify-center text-2xl font-bold mb-4">
                        1</div>
                    <h3 class="text-xl font-semibold mb-3">Choose Your Plan</h3>
                    <p class="text-gray-600">Select an advertising package that suits your business needs and budget.</p>
                </div>

                <!-- Arrow -->
                <div class="hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </div>

                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center max-w-xs fade-in">
                    <div
                        class="w-16 h-16 rounded-full bg-blue-600 text-white flex items-center justify-center text-2xl font-bold mb-4">
                        2</div>
                    <h3 class="text-xl font-semibold mb-3">Complete Your Profile</h3>
                    <p class="text-gray-600">Our team helps you create an engaging business profile that showcases your
                        offerings.</p>
                </div>

                <!-- Arrow -->
                <div class="hidden md:block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </div>

                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center max-w-xs fade-in">
                    <div
                        class="w-16 h-16 rounded-full bg-blue-600 text-white flex items-center justify-center text-2xl font-bold mb-4">
                        3</div>
                    <h3 class="text-xl font-semibold mb-3">Start Getting Leads</h3>
                    <p class="text-gray-600">Watch your business grow as quality leads start coming in from day one.</p>
                </div>
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

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl font-bold mb-4">What Our Customers Say</h2>
                <p class="text-gray-600 text-lg">Success stories from businesses across India</p>
            </div>

            <div class="testimonial-container overflow-x-auto">
                <div class="testimonial-track flex space-x-6 min-w-full">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card flex-shrink-0 w-full md:w-1/3 px-4">
                        <div class="bg-gray-50 rounded-xl p-8 h-full shadow-sm">
                            <div class="flex items-center mb-6">
                                <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold">Rajesh Sharma</h4>
                                    <p class="text-gray-500">Delhi Electronics</p>
                                </div>
                            </div>
                            <p class="text-gray-600">"Since advertising with Justdial, our customer inquiries have
                                increased by 70%. The return on investment has been incredible, and the platform's analytics
                                help us track everything."</p>
                            <div class="flex items-center mt-6">
                                <div class="flex text-yellow-400">
                                    <!-- Stars -->
                                    <template x-for="i in 5" :key="i">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1
                                1 0 00.95.69h3.462c.969 0 1.371 1.24.588
                                1.81l-2.8 2.034a1 1 0
                                00-.364 1.118l1.07
                                3.292c.3.921-.755 1.688-1.54
                                1.118l-2.8-2.034a1 1 0
                                00-1.175 0l-2.8
                                2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0
                                00-.364-1.118L2.98
                                8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0
                                00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </template>
                                </div>
                                <span class="text-gray-500 ml-2">5.0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-card flex-shrink-0 w-full md:w-1/3 px-4">
                        <div class="bg-gray-50 rounded-xl p-8 h-full shadow-sm">
                            <div class="flex items-center mb-6">
                                <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold">Priya Patel</h4>
                                    <p class="text-gray-500">Mumbai Beauty Salon</p>
                                </div>
                            </div>
                            <p class="text-gray-600">"The best marketing decision we ever made. Being featured at the top
                                of search results has brought us so many new clients. The ROI is amazing compared to other
                                advertising channels."</p>
                            <div class="flex items-center mt-6">
                                <div class="flex text-yellow-400">
                                    <!-- Stars -->
                                    <template x-for="i in 5" :key="i">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1
                                1 0 00.95.69h3.462c.969 0 1.371 1.24.588
                                1.81l-2.8 2.034a1 1 0
                                00-.364 1.118l1.07
                                3.292c.3.921-.755 1.688-1.54
                                1.118l-2.8-2.034a1 1 0
                                00-1.175 0l-2.8
                                2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0
                                00-.364-1.118L2.98
                                8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0
                                00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </template>
                                </div>
                                <span class="text-gray-500 ml-2">5.0</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-card flex-shrink-0 w-full md:w-1/3 px-4">
                        <div class="bg-gray-50 rounded-xl p-8 h-full shadow-sm">
                            <div class="flex items-center mb-6">
                                <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold">Arun Mehta</h4>
                                    <p class="text-gray-500">Jaipur Jewellers</p>
                                </div>
                            </div>
                            <p class="text-gray-600">"Justdial has helped us expand our local reach significantly. Our
                                online presence improved drastically, and we started getting quality leads within a week of
                                registration."</p>
                            <div class="flex items-center mt-6">
                                <div class="flex text-yellow-400">
                                    <!-- Stars -->
                                    <template x-for="i in 5" :key="i">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                            viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1
                                1 0 00.95.69h3.462c.969 0 1.371 1.24.588
                                1.81l-2.8 2.034a1 1 0
                                00-.364 1.118l1.07
                                3.292c.3.921-.755 1.688-1.54
                                1.118l-2.8-2.034a1 1 0
                                00-1.175 0l-2.8
                                2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0
                                00-.364-1.118L2.98
                                8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0
                                00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </template>
                                </div>
                                <span class="text-gray-500 ml-2">5.0</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

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
