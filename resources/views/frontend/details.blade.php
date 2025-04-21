@extends('components.main')

@section('content')
<style>
    .tab-link.active-tab {
        border-color: #d97706; /* amber-600 */
        color: #d97706;         /* amber-600 */
    }
</style>


    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />

    <!-- Breadcrumb -->
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
        <ol
            class="flex flex-wrap items-center text-sm space-x-1 sm:space-x-2 overflow-x-auto whitespace-nowrap scrollbar-hide">
            @foreach (['Mumbai', 'Jewellery Showrooms in Navi Mumbai', 'Diamond Jewellery'] as $item)
                <li class="flex items-center">
                    <a href="#" class="text-amber-600 hover:underline">{{ $item }}</a>
                    <span class="mx-1 text-gray-500">/</span>
                </li>
            @endforeach
            <li class="text-gray-800 font-medium">Meghna Jewellers Pvt Ltd</li>
        </ol>
    </nav>

    <!-- Header Section -->
    <div class="max-w-7xl mx-auto bg-white p-6 shadow-sm rounded-xl mt-4 border border-gray-100">
        <div class="flex flex-col md:flex-row gap-6">
            <div class="flex-shrink-0">
                <div
                    class="w-20 h-20 rounded-lg bg-gradient-to-br from-yellow-100 to-yellow-200 flex items-center justify-center shadow-inner">
                    <span class="material-symbols-outlined text-4xl text-yellow-600">diamond</span>
                </div>
            </div>

            <div class="flex-1">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Meghna Jewellers Pvt Ltd</h1>
                        <div class="flex flex-wrap items-center gap-2 mt-2">
                            @foreach ([['star', '3.8 (88 Ratings)', 'green'], ['verified', 'Verified', 'blue'], ['', 'Diamond Jewellery Showrooms', 'gray']] as $badge)
                                <span
                                    class="inline-flex items-center bg-{{ $badge[2] }}-50 text-{{ $badge[2] }}-700 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                    @if ($badge[0])
                                        <span class="material-symbols-outlined text-sm mr-1">{{ $badge[0] }}</span>
                                    @endif
                                    {{ $badge[1] }}
                                </span>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2">
                        @foreach (['share'] as $icon)
                            <button
                                class="flex items-center gap-1 bg-white border border-gray-300 text-gray-700 px-3 py-2 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                                <span class="material-symbols-outlined text-base">{{ $icon }}</span>
                                <span class="hidden sm:inline">{{ ucfirst($icon) }}</span>
                            </button>
                        @endforeach
                    </div>
                </div>

                <div class="mt-4 flex flex-wrap items-center gap-4 text-sm text-gray-600">
                    @foreach ([['location_on', 'Nerul, Navi Mumbai', ''], ['schedule', 'Open until 9:30 pm', 'text-green-600 font-medium'], ['calendar_month', '37 Years in Business', '']] as $info)
                        <div class="flex items-center gap-1 {{ $info[2] }}">
                            <span class="material-symbols-outlined text-base">{{ $info[0] }}</span>
                            <span>{{ $info[1] }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="mt-6 flex flex-wrap gap-3">
                    @foreach ([['call', 'Call Now', 'bg-green-600 hover:bg-green-700'], ['local_offer', 'Get Best Deal', 'bg-amber-600 hover:bg-amber-700'], ['chat', 'WhatsApp', 'bg-white border border-gray-300 hover:bg-gray-50 text-gray-700', 'text-green-500']] as $btn)
                        <a href="{{ $btn[0] === 'call' ? 'tel:08105909723' : '#' }}"
                            class="flex items-center gap-2 {{ $btn[2] }} {{ $btn[0] !== 'chat' ? 'text-white' : '' }} px-4 py-2.5 rounded-lg font-medium transition-colors">
                            <span class="material-symbols-outlined text-lg {{ $btn[3] ?? '' }}">{{ $btn[0] }}</span>
                            {{ $btn[1] }}
                        </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <div class="max-w-7xl mx-auto mt-6">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-8 overflow-x-auto px-4 sm:px-6 lg:px-8" id="tabs-nav">
                @foreach (['Overview', 'Photos', 'Quick Info', 'Services', 'Reviews', 'Catalog'] as $tab)
                    <a href="javascript:void(0);" data-tab="{{ strtolower(str_replace(' ', '-', $tab)) }}"
                        class="tab-link {{ $tab === 'Overview' ? 'active-tab' : '' }} whitespace-nowrap py-4 px-1 font-medium text-sm border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300">
                        {{ $tab }}
                    </a>
                @endforeach
            </nav>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6 px-4 sm:px-6 lg:px-8 mt-6">
        <div class="lg:col-span-2 space-y-6">
            <!-- Overview Tab Content -->
            <div id="overview" class="tab-section">
                <!-- About Section -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">About Meghna Jewellers Pvt Ltd</h2>
                    <div class="prose prose-sm text-gray-600">
                        <p>Established in 1988, Meghna Jewellers has been a trusted name in the jewellery industry for over
                            three decades. We specialize in exquisite diamond and gold jewellery crafted with precision and
                            passion.</p>

                        <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            @foreach ([['Services', 'Same Day Delivery, Custom Designs, Repair Services, Delivery Available'], ['Specializations', 'Diamond Jewellery, Gold Jewellery, Bridal Sets, Antique Collections'], ['Payment Options', 'Cash, Credit/Debit Cards, EMI Options, Digital Payments'], ['Certifications', 'BIS Hallmark Certified, IGI Certified Diamonds']] as $item)
                                <div class="flex items-start gap-2">
                                    <span class="material-symbols-outlined text-amber-600 mt-0.5">check_circle</span>
                                    <div>
                                        <h4 class="font-medium text-gray-900">{{ $item[0] }}</h4>
                                        <p class="text-sm text-gray-600">{{ $item[1] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Photos Tab Content -->
            <div id="photos" class="tab-section hidden">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">Gallery</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                        @foreach (['https://i.imgur.com/ELRz65C.jpg', 'https://i.imgur.com/w1tQTfW.jpg', 'https://i.imgur.com/tYFlXlw.jpg', 'https://i.imgur.com/I0ONZ6N.jpg', 'https://i.imgur.com/zUFThhU.jpg'] as $img)
                            <div
                                class="aspect-square rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                                <img src="{{ $img }}" class="w-full h-full object-cover" alt="Jewellery">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Quick Info Tab Content -->
            <div id="quick-info" class="tab-section hidden">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">Quick Information</h2>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3 pb-3 border-b border-gray-100">
                            <span class="material-symbols-outlined text-amber-600">store</span>
                            <div>
                                <h3 class="font-medium text-gray-900">Business Type</h3>
                                <p class="text-sm text-gray-600">Diamond Jewellery Showroom, Gold Retailer</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 pb-3 border-b border-gray-100">
                            <span class="material-symbols-outlined text-amber-600">paid</span>
                            <div>
                                <h3 class="font-medium text-gray-900">Price Range</h3>
                                <p class="text-sm text-gray-600">₹15,000 - ₹15,00,000</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 pb-3 border-b border-gray-100">
                            <span class="material-symbols-outlined text-amber-600">language</span>
                            <div>
                                <h3 class="font-medium text-gray-900">Languages</h3>
                                <p class="text-sm text-gray-600">English, Hindi, Marathi, Gujarati</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-amber-600">payments</span>
                            <div>
                                <h3 class="font-medium text-gray-900">Payment Methods</h3>
                                <p class="text-sm text-gray-600">Cash, Cards, UPI, EMI Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Tab Content -->
            <div id="services" class="tab-section hidden">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">Our Services</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach ([['design', 'Custom Design', 'Get your dream jewellery designed by our experts'], ['diamond', 'Diamond Setting', 'Expert diamond setting for all types of jewellery'], ['autorenew', 'Exchange', 'Easy exchange of old jewellery for new designs'], ['build', 'Jewellery Repair', 'Professional repair and restoration services'], ['cleaning_services', 'Cleaning', 'Free cleaning for all jewellery purchased from us'], ['inventory_2', 'Valuation', 'Professional jewellery valuation for insurance']] as $service)
                            <div class="flex items-start gap-3 p-3 border border-gray-100 rounded-lg hover:bg-gray-50">
                                <span class="material-symbols-outlined text-amber-600 mt-0.5">{{ $service[0] }}</span>
                                <div>
                                    <h3 class="font-medium text-gray-900">{{ $service[1] }}</h3>
                                    <p class="text-sm text-gray-600">{{ $service[2] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Reviews Tab Content -->
            <div id="reviews" class="tab-section hidden">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h2 class="text-lg font-semibold text-gray-900 mb-4">Customer Reviews</h2>

                    <div class="flex flex-col sm:flex-row items-center gap-6 mb-6">
                        <div class="flex flex-col items-center">
                            <div
                                class="bg-gradient-to-br from-yellow-400 to-yellow-500 text-white text-4xl font-bold w-24 h-24 flex items-center justify-center rounded-full">
                                3.8</div>
                            <p class="text-sm text-gray-600 mt-2">88 Ratings</p>
                        </div>

                        <div class="flex-1 w-full">
                            <div class="space-y-2">
                                @foreach (range(5, 1) as $rating)
                                    <div class="flex items-center gap-2">
                                        <span class="text-sm font-medium w-8">{{ $rating }} Star</span>
                                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                                            <div class="h-full bg-yellow-400 rounded-full"
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
                    <div class="border-t border-gray-200 pt-4">
                        <h3 class="text-sm font-medium text-gray-900 mb-3">Share your experience</h3>
                        <div class="flex items-center gap-1 mb-3">
                            @foreach (range(1, 5) as $star)
                                <button type="button" class="text-gray-300 hover:text-yellow-400 focus:outline-none">
                                    <span class="material-symbols-outlined text-2xl">star</span>
                                </button>
                            @endforeach
                        </div>
                        <form>
                            <textarea rows="3"
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-amber-600 focus:border-amber-600"
                                placeholder="Write your review..."></textarea>
                            <div class="mt-2 flex justify-end">
                                <button type="submit"
                                    class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg font-medium">Submit
                                    Review</button>
                            </div>
                        </form>
                    </div>

                    <!-- Recent Reviews -->
                    <div class="mt-6 space-y-6">
                        @foreach ([['Rahul Sharma', 5, '2 weeks ago', 'Excellent service and quality products. The staff was very helpful in selecting my wedding ring.'], ['Priya Patel', 4, '1 month ago', 'Beautiful designs and reasonable prices. Delivery was prompt.'], ['Vikram Joshi', 3, '2 months ago', 'Good collection but could improve on customer service.']] as $review)
                            <div class="border-b border-gray-200 pb-6 last:border-0 last:pb-0">
                                <div class="flex items-center justify-between mb-2">
                                    <h4 class="font-medium text-gray-900">{{ $review[0] }}</h4>
                                    <span class="text-xs text-gray-500">{{ $review[2] }}</span>
                                </div>
                                <div class="flex items-center gap-1 mb-2">
                                    @foreach (range(1, 5) as $star)
                                        <span
                                            class="material-symbols-outlined text-sm {{ $star <= $review[1] ? 'text-yellow-400' : 'text-gray-300' }}">star</span>
                                    @endforeach
                                </div>
                                <p class="text-sm text-gray-600">{{ $review[3] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-4">
                        <a href="#"
                            class="text-sm font-medium text-amber-600 hover:text-amber-700 flex items-center gap-1 justify-center">
                            View All Reviews <span class="material-symbols-outlined text-base">chevron_right</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Catalog Tab Content -->
            <div id="catalog" class="tab-section hidden">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-lg font-semibold text-gray-900">Our Collection</h2>
                        <a href="#"
                            class="text-sm font-medium text-amber-600 hover:text-amber-700 flex items-center gap-1">
                            View All <span class="material-symbols-outlined text-base">chevron_right</span>
                        </a>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        @foreach ([['Kundan Necklace', 'Traditional gold-plated necklace', 'https://i.imgur.com/tYFlXlw.jpg', '₹25,000'], ['Diamond Ring', 'Elegant solitaire ring', 'https://i.imgur.com/zUFThhU.jpg', '₹45,000'], ['Bridal Set', 'Complete wedding jewellery set', 'https://i.imgur.com/ELRz65C.jpg', '₹1,25,000'], ['Pearl Earrings', 'Luxury south sea pearls', 'https://i.imgur.com/I0ONZ6N.jpg', '₹18,500'], ['Gold Bangle', '22K pure gold bangle', 'https://i.imgur.com/w1tQTfW.jpg', '₹32,000'], ['Antique Pendant', 'Victorian style pendant', 'https://i.imgur.com/ELRz65C.jpg', '₹28,750']] as $item)
                            <div class="group">
                                <div class="aspect-square rounded-lg overflow-hidden bg-gray-100 mb-2">
                                    <img src="{{ $item[2] }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                        alt="{{ $item[0] }}">
                                </div>
                                <h3 class="text-sm font-medium text-gray-900">{{ $item[0] }}</h3>
                                <p class="text-xs text-gray-500">{{ $item[1] }}</p>
                                <p class="text-sm font-medium text-gray-900 mt-1">{{ $item[3] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6">
                        <a href="https://yourwebsite.com/full-catalog" target="_blank"
                            class="w-full flex items-center justify-center gap-2 bg-amber-600 hover:bg-amber-700 text-white px-4 py-2.5 rounded-lg font-medium transition-colors">
                            See Our Catalogs <span class="material-symbols-outlined text-base">chevron_right</span>
                        </a>
                    </div>

                    <div class="mt-6">
                        <button
                            class="w-full flex items-center justify-center gap-2 bg-amber-600 hover:bg-amber-700 text-white px-4 py-2.5 rounded-lg font-medium transition-colors">
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
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Contact Information</h2>

                <div class="space-y-4">
                    @foreach ([['call', 'Phone Number', '081059 09723', 'tel:08105909723', ''], ['location_on', 'Address', 'Paradise Apartment, Sector 3, Nerul, Navi Mumbai - 400706 (Opposite Sies College)', '', 'text-sm'], ['schedule', 'Business Hours', 'Open today until 9:30 PM', '', 'text-sm']] as $contact)
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 mb-1">{{ $contact[1] }}</h3>
                            @if ($contact[3])
                                <a href="{{ $contact[3] }}"
                                    class="text-amber-600 hover:text-amber-700 font-medium flex items-center gap-2">
                                    <span class="material-symbols-outlined">{{ $contact[0] }}</span>
                                    {{ $contact[2] }}
                                </a>
                            @else
                                <p class="{{ $contact[4] }} text-gray-600 flex items-start gap-2">
                                    <span class="material-symbols-outlined mt-0.5">{{ $contact[0] }}</span>
                                    {{ $contact[2] }}
                                </p>
                            @endif

                            @if ($contact[1] === 'Address')
                                <div class="flex items-center gap-3 mt-2">
                                    <a href="#"
                                        class="text-sm text-amber-600 hover:text-amber-700 flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base">directions</span>
                                        Directions
                                    </a>
                                    <a href="#"
                                        class="text-sm text-gray-600 hover:text-gray-700 flex items-center gap-1">
                                        <span class="material-symbols-outlined text-base">content_copy</span>
                                        Copy
                                    </a>
                                </div>
                            @elseif($contact[1] === 'Business Hours')
                                <button class="mt-1 text-sm text-amber-600 hover:text-amber-700 flex items-center gap-1">
                                    <span class="material-symbols-outlined text-base">expand_more</span>
                                    See all hours
                                </button>
                            @endif
                        </div>
                    @endforeach

                    <div>
                        <h3 class="text-sm font-medium text-gray-500 mb-1">Send Message</h3>
                        <div class="flex flex-col gap-2">
                            @foreach ([['chat', 'WhatsApp', 'bg-green-600 hover:bg-green-700'], ['mail', 'Email', 'bg-gray-100 hover:bg-gray-200 text-gray-800']] as $msg)
                                <button
                                    class="flex items-center justify-center gap-2 {{ $msg[2] }} {{ $msg[0] === 'chat' ? 'text-white' : '' }} px-4 py-2 rounded-lg font-medium transition-colors">
                                    <span class="material-symbols-outlined">{{ $msg[0] }}</span>
                                    {{ $msg[1] }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Enquiry Form -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Quick Enquiry</h2>
                <form class="space-y-4">
                    @foreach ([['name', 'Name', 'text'], ['phone', 'Phone Number', 'tel']] as $field)
                        <div>
                            <label for="{{ $field[0] }}"
                                class="block text-sm font-medium text-gray-700 mb-1">{{ $field[1] }}</label>
                            <input type="{{ $field[2] }}" id="{{ $field[0] }}"
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-amber-600 focus:border-amber-600">
                        </div>
                    @endforeach
                    <div>
                        <label for="requirement" class="block text-sm font-medium text-gray-700 mb-1">Requirement</label>
                        <textarea id="requirement" rows="3"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-amber-600 focus:border-amber-600"
                            placeholder="Describe your jewellery requirement..."></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-amber-600 hover:bg-amber-700 text-white px-4 py-2.5 rounded-lg font-medium transition-colors">
                        Submit Enquiry
                    </button>
                </form>
            </div>

            <!-- Similar Businesses -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-lg font-semibold text-gray-900 mb-4">Similar Jewellery Stores</h2>
                <div class="space-y-4">
                    @foreach ([['Tanishq', '4.2 (120 Ratings)', 'Vashi', '1.2 km away'], ['Kalyan Jewellers', '4.0 (95 Ratings)', 'Seawoods', '2.5 km away'], ['Reliance Jewels', '3.9 (80 Ratings)', 'Belapur', '3.1 km away']] as $business)
                        <div class="flex items-start gap-3">
                            <div
                                class="w-12 h-12 rounded-lg bg-gradient-to-br from-yellow-100 to-yellow-200 flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-xl text-yellow-600">store</span>
                            </div>
                            <div>
                                <h3 class="font-medium text-gray-900">{{ $business[0] }}</h3>
                                <p class="text-xs text-gray-500 flex items-center gap-1">
                                    <span class="material-symbols-outlined text-xs">star</span>
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
                    class="mt-4 text-sm font-medium text-amber-600 hover:text-amber-700 flex items-center gap-1 justify-center">
                    View More <span class="material-symbols-outlined text-base">chevron_right</span>
                </a>
            </div>
        </div>
    </div>

    <!-- WhatsApp Floating Button -->
    <div class="fixed bottom-6 right-6 z-10">
        <a href="https://wa.me/918105909723"
            class="bg-green-500 hover:bg-green-600 text-white p-3 rounded-full shadow-lg flex items-center justify-center transition-colors">
            <span class="material-symbols-outlined text-2xl">chat</span>
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
