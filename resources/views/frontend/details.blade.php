@extends('components.main')

@section('content')
    <style>
        .tab-link {
            transition: all 0.3s ease;
            position: relative;
        }

        .tab-link.active-tab {
            color: #b45309;
            /* amber-800 */
            border-color: #b45309;
        }

        .tab-link:not(.active-tab):hover {
            color: #92400e;
            /* amber-900 */
        }

        .tab-link.active-tab::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #b45309;
        }

        .shadow-soft {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .gradient-gold {
            background: linear-gradient(135deg, #fef3c7 0%, #fcd34d 100%);
        }

        .hover-scale {
            transition: transform 0.3s ease;
        }

        .hover-scale:hover {
            transform: scale(1.03);
        }

        .rating-badge {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }

        .verified-badge {
            background: linear-gradient(135deg, #93c5fd 0%, #3b82f6 100%);
        }

        .category-badge {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
        }
    </style>

    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />

    <!-- Breadcrumb -->
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
        <ol
            class="flex flex-wrap items-center text-sm space-x-1 sm:space-x-2 overflow-x-auto whitespace-nowrap scrollbar-hide">
            @foreach (['Mumbai', 'Jewellery Showrooms in Navi Mumbai', 'Diamond Jewellery'] as $item)
                <li class="flex items-center">
                    <a href="#"
                        class="text-amber-700 hover:text-amber-800 hover:underline transition-colors">{{ $item }}</a>
                    <span class="mx-1 text-gray-400">/</span>
                </li>
            @endforeach
            <li class="text-gray-900 font-medium">Meghna Jewellers Pvt Ltd</li>
        </ol>
    </nav>

    <!-- Header Section -->
    <div class="max-w-7xl mx-auto bg-white p-6 shadow-soft rounded-xl mt-4 border border-gray-100">
        <div class="flex flex-col md:flex-row gap-6">
            <div class="flex-shrink-0">
                <div class="w-20 h-20 rounded-lg gradient-gold flex items-center justify-center shadow-inner hover-scale">
                    <span class="material-symbols-outlined text-4xl text-amber-800">diamond</span>
                </div>
            </div>

            <div class="flex-1">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Meghna Jewellers Pvt Ltd</h1>
                        <div class="flex flex-wrap items-center gap-2 mt-2">
                            <span
                                class="inline-flex items-center rating-badge text-white text-xs font-medium px-2.5 py-0.5 rounded-full">
                                <span class="material-symbols-outlined text-sm mr-1">star</span>
                                3.8 (88 Ratings)
                            </span>
                            <span
                                class="inline-flex items-center verified-badge text-white text-xs font-medium px-2.5 py-0.5 rounded-full">
                                <span class="material-symbols-outlined text-sm mr-1">verified</span>
                                Verified
                            </span>
                            <span
                                class="inline-flex items-center category-badge text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                Diamond Jewellery Showrooms
                            </span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2">
                        <button
                            class="flex items-center gap-1 bg-white border border-gray-200 text-gray-700 px-3 py-2 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors shadow-xs">
                            <span class="material-symbols-outlined text-base">share</span>
                            <span class="hidden sm:inline">Share</span>
                        </button>
                        <button
                            class="flex items-center gap-1 bg-white border border-gray-200 text-gray-700 px-3 py-2 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors shadow-xs">
                            <span class="material-symbols-outlined text-base">bookmark</span>
                            <span class="hidden sm:inline">Save</span>
                        </button>
                    </div>
                </div>

                <div class="mt-4 flex flex-wrap items-center gap-4 text-sm text-gray-600">
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-base text-amber-700">location_on</span>
                        <span>Nerul, Navi Mumbai</span>
                    </div>
                    <div class="flex items-center gap-1 text-green-700 font-medium">
                        <span class="material-symbols-outlined text-base">schedule</span>
                        <span>Open until 9:30 pm</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-base text-amber-700">calendar_month</span>
                        <span>37 Years in Business</span>
                    </div>
                </div>

                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="tel:08105909723"
                        class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-4 py-2.5 rounded-lg font-medium transition-colors shadow-md hover-scale">
                        <span class="material-symbols-outlined text-lg">call</span>
                        Call Now
                    </a>
                    <a href="#"
                        class="flex items-center gap-2 bg-amber-700 hover:bg-amber-800 text-white px-4 py-2.5 rounded-lg font-medium transition-colors shadow-md hover-scale">
                        <span class="material-symbols-outlined text-lg">local_offer</span>
                        Get Best Deal
                    </a>
                    <a href="#"
                        class="flex items-center gap-2 bg-white border border-gray-200 hover:bg-gray-50 text-gray-700 px-4 py-2.5 rounded-lg font-medium transition-colors shadow-xs hover-scale">
                        <span class="material-symbols-outlined text-lg text-green-600">chat</span>
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <div class="max-w-7xl mx-auto mt-8">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-8 overflow-x-auto px-4 sm:px-6 lg:px-8" id="tabs-nav">
                @foreach (['Overview', 'Photos', 'Quick Info', 'Services', 'Reviews', 'Catalog'] as $tab)
                    <a href="javascript:void(0);" data-tab="{{ strtolower(str_replace(' ', '-', $tab)) }}"
                        class="tab-link {{ $tab === 'Overview' ? 'active-tab' : '' }} whitespace-nowrap py-4 px-1 font-medium text-sm border-b-2 border-transparent text-gray-500">
                        {{ $tab }}
                    </a>
                @endforeach
            </nav>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8 px-4 sm:px-6 lg:px-8 mt-8">
        <div class="lg:col-span-2 space-y-6">
            <!-- Overview Tab Content -->
            <div id="overview" class="tab-section">
                <!-- About Section -->
                <div class="bg-white p-6 rounded-xl shadow-soft border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">About Meghna Jewellers Pvt Ltd</h2>
                    <div class="prose prose-sm text-gray-600">
                        <p class="text-gray-700">Established in 1988, Meghna Jewellers has been a trusted name in the
                            jewellery industry for over three decades. We specialize in exquisite diamond and gold jewellery
                            crafted with precision and passion.</p>

                        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-6">
                            @foreach ([['Services', 'Same Day Delivery, Custom Designs, Repair Services, Delivery Available'], ['Specializations', 'Diamond Jewellery, Gold Jewellery, Bridal Sets, Antique Collections'], ['Payment Options', 'Cash, Credit/Debit Cards, EMI Options, Digital Payments'], ['Certifications', 'BIS Hallmark Certified, IGI Certified Diamonds']] as $item)
                                <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-lg">
                                    <span class="material-symbols-outlined text-amber-700 mt-0.5">check_circle</span>
                                    <div>
                                        <h4 class="font-medium text-gray-900">{{ $item[0] }}</h4>
                                        <p class="text-sm text-gray-600 mt-1">{{ $item[1] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photos Tab Content -->
            <div id="photos" class="tab-section hidden">
                <div class="bg-white p-6 rounded-xl shadow-soft border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold text-gray-900">Gallery</h2>
                        <a href="#"
                            class="text-sm font-medium text-amber-700 hover:text-amber-800 flex items-center gap-1">
                            View All <span class="material-symbols-outlined text-base">chevron_right</span>
                        </a>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach (['https://i.imgur.com/ELRz65C.jpg', 'https://i.imgur.com/w1tQTfW.jpg', 'https://i.imgur.com/tYFlXlw.jpg', 'https://i.imgur.com/I0ONZ6N.jpg', 'https://i.imgur.com/zUFThhU.jpg'] as $img)
                            <div
                                class="aspect-square rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow hover-scale">
                                <img src="{{ $img }}" class="w-full h-full object-cover" alt="Jewellery"
                                    loading="lazy">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Quick Info Tab Content -->
            <div id="quick-info" class="tab-section hidden">
                <div class="bg-white p-6 rounded-xl shadow-soft border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Quick Information</h2>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-3 bg-gray-50 rounded-lg">
                            <span
                                class="material-symbols-outlined text-amber-700 p-2 bg-amber-100 rounded-full">store</span>
                            <div>
                                <h3 class="font-medium text-gray-900">Business Type</h3>
                                <p class="text-sm text-gray-600 mt-1">Diamond Jewellery Showroom, Gold Retailer</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-3 bg-gray-50 rounded-lg">
                            <span class="material-symbols-outlined text-amber-700 p-2 bg-amber-100 rounded-full">paid</span>
                            <div>
                                <h3 class="font-medium text-gray-900">Price Range</h3>
                                <p class="text-sm text-gray-600 mt-1">₹15,000 - ₹15,00,000</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-3 bg-gray-50 rounded-lg">
                            <span
                                class="material-symbols-outlined text-amber-700 p-2 bg-amber-100 rounded-full">language</span>
                            <div>
                                <h3 class="font-medium text-gray-900">Languages</h3>
                                <p class="text-sm text-gray-600 mt-1">English, Hindi, Marathi, Gujarati</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-3 bg-gray-50 rounded-lg">
                            <span
                                class="material-symbols-outlined text-amber-700 p-2 bg-amber-100 rounded-full">payments</span>
                            <div>
                                <h3 class="font-medium text-gray-900">Payment Methods</h3>
                                <p class="text-sm text-gray-600 mt-1">Cash, Cards, UPI, EMI Available</p>
                            </div>
                        </div>

                        <!-- Add the Embedded Map Section here -->
                        <div class="p-3 bg-gray-50 rounded-lg">
                            <h3 class="font-medium text-gray-900">Location</h3>
                            <div class="mt-2">
                                <!-- Google Maps Embedded iframe -->
                                <iframe
                                    src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=Diamond+Jewellery+Showroom, +Mumbai, +India"
                                    width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                                    aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Tab Content -->
            <div id="services" class="tab-section hidden">
                <div class="bg-white p-6 rounded-xl shadow-soft border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-900 mb-4">Our Services</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach ([['design', 'Custom Design', 'Get your dream jewellery designed by our experts'], ['diamond', 'Diamond Setting', 'Expert diamond setting for all types of jewellery'], ['autorenew', 'Exchange', 'Easy exchange of old jewellery for new designs'], ['build', 'Jewellery Repair', 'Professional repair and restoration services'], ['cleaning_services', 'Cleaning', 'Free cleaning for all jewellery purchased from us'], ['inventory_2', 'Valuation', 'Professional jewellery valuation for insurance']] as $service)
                            <div
                                class="flex items-start gap-4 p-4 border border-gray-100 rounded-lg hover:bg-gray-50 transition-colors hover-scale">
                                <span
                                    class="material-symbols-outlined text-amber-700 p-2 bg-amber-100 rounded-full">{{ $service[0] }}</span>
                                <div>
                                    <h3 class="font-medium text-gray-900">{{ $service[1] }}</h3>
                                    <p class="text-sm text-gray-600 mt-1">{{ $service[2] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Reviews Tab Content -->
            <div id="reviews" class="tab-section hidden">
                <div class="bg-white p-6 rounded-xl shadow-soft border border-gray-100">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Customer Reviews</h2>

                    <div class="flex flex-col sm:flex-row items-center gap-8 mb-8">
                        <div class="flex flex-col items-center">
                            <div
                                class="rating-badge text-white text-4xl font-bold w-24 h-24 flex items-center justify-center rounded-full shadow-inner">
                                3.8</div>
                            <p class="text-sm text-gray-600 mt-2">88 Ratings</p>
                        </div>

                        <div class="flex-1 w-full">
                            <div class="space-y-3">
                                @foreach (range(5, 1) as $rating)
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm font-medium w-10">{{ $rating }} Star</span>
                                        <div class="flex-1 h-2.5 bg-gray-200 rounded-full overflow-hidden">
                                            <div class="h-full bg-gradient-to-r from-amber-400 to-amber-600 rounded-full"
                                                style="width: {{ rand(30, 100) }}%">
                                            </div>
                                        </div>
                                        <span class="text-xs text-gray-500 w-8 text-right">{{ rand(5, 30) }}%</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Review Form -->
                    <div class="border-t border-gray-200 pt-6">
                        <h3 class="text-md font-medium text-gray-900 mb-4">Share your experience</h3>
                        <div class="flex items-center gap-1 mb-4">
                            @foreach (range(1, 5) as $star)
                                <button type="button" class="text-gray-300 hover:text-amber-500 focus:outline-none">
                                    <span class="material-symbols-outlined text-3xl">star</span>
                                </button>
                            @endforeach
                        </div>
                        <form>
                            <textarea rows="4"
                                class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-amber-600 focus:border-amber-600"
                                placeholder="Write your review..."></textarea>
                            <div class="mt-4 flex justify-end">
                                <button type="submit"
                                    class="bg-amber-700 hover:bg-amber-800 text-white px-6 py-2.5 rounded-lg font-medium shadow-md hover-scale">
                                    Submit Review
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Recent Reviews -->
                    <div class="mt-8 space-y-8">
                        @foreach ([['Rahul Sharma', 5, '2 weeks ago', 'Excellent service and quality products. The staff was very helpful in selecting my wedding ring.'], ['Priya Patel', 4, '1 month ago', 'Beautiful designs and reasonable prices. Delivery was prompt.'], ['Vikram Joshi', 3, '2 months ago', 'Good collection but could improve on customer service.']] as $review)
                            <div class="border-b border-gray-200 pb-6 last:border-0 last:pb-0">
                                <div class="flex items-center justify-between mb-3">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-600">
                                            {{ substr($review[0], 0, 1) }}
                                        </div>
                                        <h4 class="font-medium text-gray-900">{{ $review[0] }}</h4>
                                    </div>
                                    <span class="text-xs text-gray-500">{{ $review[2] }}</span>
                                </div>
                                <div class="flex items-center gap-1 mb-3">
                                    @foreach (range(1, 5) as $star)
                                        <span
                                            class="material-symbols-outlined text-xl {{ $star <= $review[1] ? 'text-amber-500' : 'text-gray-300' }}">star</span>
                                    @endforeach
                                </div>
                                <p class="text-gray-700">{{ $review[3] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6">
                        <a href="#"
                            class="text-sm font-medium text-amber-700 hover:text-amber-800 flex items-center gap-1 justify-center">
                            View All Reviews <span class="material-symbols-outlined text-base">chevron_right</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Catalog Tab Content -->
            <div id="catalog" class="tab-section hidden">
                <div class="bg-white p-6 rounded-xl shadow-soft border border-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-semibold text-gray-900">Our Collection</h2>
                        <a href="#"
                            class="text-sm font-medium text-amber-700 hover:text-amber-800 flex items-center gap-1">
                            View All <span class="material-symbols-outlined text-base">chevron_right</span>
                        </a>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-6">
                        @foreach ([['Kundan Necklace', 'Traditional gold-plated necklace', 'https://i.imgur.com/tYFlXlw.jpg', '₹25,000'], ['Diamond Ring', 'Elegant solitaire ring', 'https://i.imgur.com/zUFThhU.jpg', '₹45,000'], ['Bridal Set', 'Complete wedding jewellery set', 'https://i.imgur.com/ELRz65C.jpg', '₹1,25,000'], ['Pearl Earrings', 'Luxury south sea pearls', 'https://i.imgur.com/I0ONZ6N.jpg', '₹18,500'], ['Gold Bangle', '22K pure gold bangle', 'https://i.imgur.com/w1tQTfW.jpg', '₹32,000'], ['Antique Pendant', 'Victorian style pendant', 'https://i.imgur.com/ELRz65C.jpg', '₹28,750']] as $item)
                            <div class="group">
                                <div class="aspect-square rounded-lg overflow-hidden bg-gray-100 mb-3 shadow-sm">
                                    <img src="{{ $item[2] }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        alt="{{ $item[0] }}" loading="lazy">
                                </div>
                                <h3 class="text-md font-medium text-gray-900">{{ $item[0] }}</h3>
                                <p class="text-xs text-gray-500 mt-1">{{ $item[1] }}</p>
                                <p class="text-md font-semibold text-amber-700 mt-2">{{ $item[3] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-8 space-y-4">
                        <a href="https://yourwebsite.com/full-catalog" target="_blank"
                            class="w-full flex items-center justify-center gap-2 bg-amber-700 hover:bg-amber-800 text-white px-4 py-3 rounded-lg font-medium transition-colors shadow-md hover-scale">
                            See Our Catalogs <span class="material-symbols-outlined text-base">chevron_right</span>
                        </a>
                        <button
                            class="w-full flex items-center justify-center gap-2 bg-white border border-amber-700 text-amber-700 hover:bg-amber-50 px-4 py-3 rounded-lg font-medium transition-colors shadow-xs hover-scale">
                            <span class="material-symbols-outlined text-lg">download</span>
                            Download Full Catalog
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-6">
            <!-- Contact Card -->
            <div class="bg-white p-6 rounded-xl shadow-soft border border-gray-100">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Contact Information</h2>

                <div class="space-y-6">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Phone Number</h3>
                        <a href="tel:08105909723"
                            class="text-amber-700 hover:text-amber-800 font-medium flex items-center gap-3">
                            <span
                                class="material-symbols-outlined text-amber-700 p-2 bg-amber-100 rounded-full">call</span>
                            <span>081059 09723</span>
                        </a>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Address</h3>
                        <p class="text-sm text-gray-600 flex items-start gap-3">
                            <span
                                class="material-symbols-outlined text-amber-700 p-2 bg-amber-100 rounded-full mt-0.5">location_on</span>
                            <span>Paradise Apartment, Sector 3, Nerul, Navi Mumbai - 400706 (Opposite Sies College)</span>
                        </p>
                        <div class="flex items-center gap-4 mt-3 ml-12">
                            <a href="#" class="text-sm text-amber-700 hover:text-amber-800 flex items-center gap-1">
                                <span class="material-symbols-outlined text-base">directions</span>
                                Directions
                            </a>
                            <a href="#" class="text-sm text-gray-600 hover:text-gray-700 flex items-center gap-1">
                                <span class="material-symbols-outlined text-base">content_copy</span>
                                Copy
                            </a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-2">Business Hours</h3>
                        <p class="text-sm text-gray-600 flex items-start gap-3">
                            <span
                                class="material-symbols-outlined text-amber-700 p-2 bg-amber-100 rounded-full mt-0.5">schedule</span>
                            <span>Open today until 9:30 PM</span>
                        </p>
                        <button class="mt-2 text-sm text-amber-700 hover:text-amber-800 flex items-center gap-1 ml-12">
                            <span class="material-symbols-outlined text-base">expand_more</span>
                            See all hours
                        </button>
                    </div>

                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-3">Send Message</h3>
                        <div class="flex flex-col gap-3">
                            <button
                                class="flex items-center justify-center gap-2 bg-green-600 hover:bg-green-700 text-white px-4 py-2.5 rounded-lg font-medium transition-colors shadow-md hover-scale">
                                <span class="material-symbols-outlined">chat</span>
                                WhatsApp
                            </button>
                            <button
                                class="flex items-center justify-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2.5 rounded-lg font-medium transition-colors shadow-xs hover-scale">
                                <span class="material-symbols-outlined">mail</span>
                                Email
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Enquiry Form -->
            <div class="bg-white p-6 rounded-xl shadow-soft border border-gray-100">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Quick Enquiry</h2>
                <form class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                        <input type="text" id="name"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-amber-600 focus:border-amber-600">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" id="phone"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-amber-600 focus:border-amber-600">
                    </div>
                    <div>
                        <label for="requirement" class="block text-sm font-medium text-gray-700 mb-2">Requirement</label>
                        <textarea id="requirement" rows="4"
                            class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:ring-2 focus:ring-amber-600 focus:border-amber-600"
                            placeholder="Describe your jewellery requirement..."></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-amber-700 hover:bg-amber-800 text-white px-4 py-3 rounded-lg font-medium transition-colors shadow-md hover-scale mt-2">
                        Submit Enquiry
                    </button>
                </form>
            </div>

            <!-- Similar Businesses -->
            <div class="bg-white p-6 rounded-xl shadow-soft border border-gray-100">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Similar Jewellery Stores</h2>
                <div class="space-y-5">
                    @foreach ([['Tanishq', '4.2 (120 Ratings)', 'Vashi', '1.2 km away'], ['Kalyan Jewellers', '4.0 (95 Ratings)', 'Seawoods', '2.5 km away'], ['Reliance Jewels', '3.9 (80 Ratings)', 'Belapur', '3.1 km away']] as $business)
                        <div
                            class="flex items-start gap-4 p-3 hover:bg-gray-50 rounded-lg transition-colors cursor-pointer">
                            <div
                                class="w-12 h-12 rounded-lg gradient-gold flex items-center justify-center flex-shrink-0 shadow-sm">
                                <span class="material-symbols-outlined text-xl text-amber-800">store</span>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-900">{{ $business[0] }}</h3>
                                <p class="text-xs text-gray-500 flex items-center gap-1 mt-1">
                                    <span class="material-symbols-outlined text-xs text-amber-500">star</span>
                                    {{ $business[1] }}
                                </p>
                                <p class="text-xs text-gray-500 flex items-center gap-1 mt-1">
                                    <span class="material-symbols-outlined text-xs">location_on</span>
                                    {{ $business[2] }} • {{ $business[3] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="#"
                    class="mt-6 text-sm font-medium text-amber-700 hover:text-amber-800 flex items-center gap-1 justify-center">
                    View More <span class="material-symbols-outlined text-base">chevron_right</span>
                </a>
            </div>
        </div>
    </div>

    <!-- WhatsApp Floating Button -->
    <div class="fixed bottom-6 right-6 z-10">
        <a href="https://wa.me/918105909723"
            class="bg-green-500 hover:bg-green-600 text-white w-16 h-16 rounded-full shadow-lg flex items-center justify-center transition-colors hover:scale-105 animate-bounce">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get all tabs and tab content sections
            const tabs = document.querySelectorAll(".tab-link");
            const tabSections = document.querySelectorAll(".tab-section");

            // Function to show a specific tab
            function showTab(tabId) {
                // Hide all tab sections
                tabSections.forEach(section => {
                    section.classList.add("hidden");
                });

                // Remove active class from all tabs
                tabs.forEach(tab => {
                    tab.classList.remove("active-tab");
                });

                // Show the selected tab section
                const targetSection = document.getElementById(tabId);
                if (targetSection) {
                    targetSection.classList.remove("hidden");
                }

                // Add active class to the clicked tab
                const activeTab = document.querySelector(`[data-tab="${tabId}"]`);
                if (activeTab) {
                    activeTab.classList.add("active-tab");
                }

                // Smooth scroll to the top of the content
                window.scrollTo({
                    top: targetSection.offsetTop - 120,
                    behavior: 'smooth'
                });
            }

            // Add click event listeners to all tabs
            tabs.forEach(tab => {
                tab.addEventListener("click", function() {
                    const tabId = this.getAttribute("data-tab");
                    showTab(tabId);
                });
            });

            // Show the default tab (overview) on page load
            showTab("overview");
        });
    </script>
@endsection
