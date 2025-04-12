@extends('components.main')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <!-- Breadcrumb Navigation -->
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <i class="fas fa-home mr-2"></i>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <a href="#"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">Jewellery</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <a href="#"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">Mumbai</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <i class="fas fa-chevron-right text-gray-400 mx-2"></i>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Shree Swarnam Jewellers</span>
                    </div>
                </li>
            </ol>
        </nav>

        <!-- Edit Button (only visible to business owner) -->
        <div class="flex justify-end mb-6">
            <button id="editBusinessBtn"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors flex items-center">
                <i class="fas fa-edit mr-2"></i> Edit Business
            </button>
        </div>

        <!-- Main Business Card (shown by default) -->
        <div id="businessView" class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="md:flex">
                <!-- Left Column - Images -->
                <div class="md:w-1/2 p-6">
                    <div class="relative">
                        <img src="{{ asset('asset/images/sample.jpeg') }}"
                            class="w-full rounded-lg object-cover h-64 md:h-96" alt="Shree Swarnam Jewellers storefront" />
                        <div class="absolute top-4 right-4 bg-gold-600 text-white text-xs px-2 py-1 rounded-full">
                            Trusted Seller
                        </div>
                    </div>

                    <!-- Thumbnail Gallery -->
                    <div class="flex mt-4 space-x-2 overflow-x-auto pb-2">
                        <img src="{{ asset('asset/images/sample.jpeg') }}"
                            class="w-16 h-16 rounded-md object-cover cursor-pointer border-2 border-transparent hover:border-blue-500" />
                        <img src="{{ asset('asset/images/sample.jpeg') }}"
                            class="w-16 h-16 rounded-md object-cover cursor-pointer border-2 border-transparent hover:border-blue-500" />
                        <img src="{{ asset('asset/images/sample.jpeg') }}"
                            class="w-16 h-16 rounded-md object-cover cursor-pointer border-2 border-transparent hover:border-blue-500" />
                        <img src="{{ asset('asset/images/sample.jpeg') }}"
                            class="w-16 h-16 rounded-md object-cover cursor-pointer border-2 border-transparent hover:border-blue-500" />
                    </div>
                </div>

                <!-- Right Column - Details -->
                <div class="md:w-1/2 p-6">
                    <h1 class="text-2xl font-bold text-gray-800">Shree Swarnam Jewellers</h1>

                    <div class="flex items-center mt-2">
                        <div class="bg-green-500 text-white text-xs px-2 py-0.5 rounded-full font-medium">4.8★</div>
                        <span class="text-sm text-gray-600 ml-2">1,245 ratings</span>
                        <span class="mx-2 text-gray-300">|</span>
                        <span class="text-sm text-gray-600">15 yrs in business</span>
                    </div>

                    <div class="flex items-center mt-4 text-sm">
                        <i class="fas fa-check-circle text-blue-500 mr-1"></i>
                        <span class="text-gray-700">BIS Hallmarked</span>
                        <i class="fas fa-gem text-purple-500 ml-3 mr-1"></i>
                        <span class="text-gray-700">Certified Jewellery</span>
                    </div>

                    <!-- Contact Buttons -->
                    <div class="mt-6 flex flex-wrap gap-3">
                        <button
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors flex items-center">
                            <i class="fas fa-phone-alt mr-2"></i> Call
                        </button>
                        <button
                            class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2 rounded-lg transition-colors flex items-center">
                            <i class="fas fa-star mr-2"></i> Review
                        </button>
                        <button
                            class="bg-green-100 hover:bg-green-200 text-green-800 px-4 py-2 rounded-lg transition-colors flex items-center">
                            <i class="fas fa-comment mr-2"></i> Chat
                        </button>
                        <button
                            class="bg-red-100 hover:bg-red-200 text-red-800 px-4 py-2 rounded-lg transition-colors flex items-center">
                            <i class="fas fa-heart mr-2"></i> Save
                        </button>
                    </div>

                    <!-- Business Info -->
                    <div class="mt-8">
                        <h2 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
                            <i class="fas fa-info-circle text-blue-500 mr-2"></i> Business Information
                        </h2>

                        <div class="space-y-3 text-sm">
                            <div class="flex">
                                <span class="text-gray-600 w-24">Address:</span>
                                <span class="text-gray-800">
                                    Shop No. 25, Ground Floor, Zaveri Bazaar,<br>
                                    Dhanji Street, Opp. Tribhuvandas Bhimji Zaveri,<br>
                                    Kalbadevi, Mumbai - 400004<br>
                                    Maharashtra
                                </span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-600 w-24">Hours:</span>
                                <span class="text-gray-800">
                                    <div class="mb-1">Mon-Sat: 10:30 AM - 7:30 PM</div>
                                    <div>Sun: Closed</div>
                                </span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-600 w-24">Categories:</span>
                                <span class="text-gray-800">Gold Jewellery, Diamond Jewellery, Silver Articles</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-600 w-24">Certification:</span>
                                <span class="text-gray-800">BIS Hallmark, IGI Certified Diamonds</span>
                            </div>
                            <div class="flex">
                                <span class="text-gray-600 w-24">Payment:</span>
                                <span class="text-gray-800">Cash, Cards, UPI, Bank Transfer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Business Form (hidden by default) -->
        <div id="businessEditForm" class="hidden bg-white rounded-xl shadow-lg overflow-hidden p-6 mt-6">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Preview Card (left side) -->
                <div class="flex-1">
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2 text-blue-600">
                        <i class="fas fa-eye"></i> Preview
                    </h3>
                    <div class="border rounded-lg shadow-md p-4 card-gradient">
                        <div class="relative mb-4">
                            <img src="{{ asset('asset/images/sample.jpeg') }}"
                                class="rounded-lg w-full object-cover h-48" />
                            <div class="absolute top-3 right-3 bg-gold-600 text-white text-xs px-2 py-1 rounded-full">
                                Trusted Seller
                            </div>
                        </div>
                        <h2 class="text-lg font-bold" id="previewBusinessName">Shree Swarnam Jewellers</h2>
                        <div class="flex items-center gap-2 mt-2 text-green-600">
                            <div class="bg-green-500 text-white text-xs px-2 py-0.5 rounded-full font-medium">4.8★</div>
                            <span class="text-sm">1,245 ratings</span>
                        </div>
                        <p class="text-xs text-gray-600 mt-2">15 yrs in business • BIS Hallmarked • Certified</p>
                        <div class="mt-4 space-x-2">
                            <button
                                class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-1.5 rounded-lg transition-colors">
                                <i class="fas fa-phone-alt mr-1"></i> Call
                            </button>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm px-4 py-1.5 rounded-lg transition-colors">
                                <i class="fas fa-star mr-1"></i> Review
                            </button>
                        </div>
                    </div>
                    <div class="mt-4 bg-blue-50 border border-blue-100 rounded-lg p-3 text-xs text-blue-800">
                        <div class="flex items-start gap-2">
                            <i class="fas fa-info-circle mt-0.5 text-blue-500"></i>
                            <p>This is how your business will appear to customers. Complete your profile for better
                                visibility.</p>
                        </div>
                    </div>
                </div>

                <!-- Business Details Form (right side) -->
                <div class="flex-1">
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2 text-gray-800">
                        <i class="fas fa-building"></i> Business Details
                    </h3>
                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div class="col-span-2 sm:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Business Name*</label>
                            <input type="text" id="businessName" placeholder="e.g. Shree Swarnam Jewellers"
                                value="Shree Swarnam Jewellers"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Pincode*</label>
                            <input type="text" id="pincode" placeholder="e.g. 400004" value="400004"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Plot / Bldg / Shop No.*</label>
                            <input type="text" id="shopNo" placeholder="e.g. Shop No. 25, Ground Floor"
                                value="Shop No. 25, Ground Floor"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Building / Market / Colony</label>
                            <input type="text" id="building" placeholder="e.g. Zaveri Bazaar" value="Zaveri Bazaar"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Street / Road Name*</label>
                            <input type="text" id="street" placeholder="e.g. Dhanji Street" value="Dhanji Street"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Landmark</label>
                            <input type="text" id="landmark" placeholder="e.g. Opp. Tribhuvandas Bhimji Zaveri"
                                value="Opp. Tribhuvandas Bhimji Zaveri"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2 lg:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Area*</label>
                            <input type="text" id="area" placeholder="e.g. Kalbadevi" value="Kalbadevi"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2 lg:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">City*</label>
                            <input type="text" id="city" placeholder="e.g. Mumbai" value="Mumbai"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">State*</label>
                            <select id="state"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring bg-white">
                                <option value="">Select State</option>
                                <option value="MH" selected>Maharashtra</option>
                                <option value="DL">Delhi</option>
                                <option value="KA">Karnataka</option>
                                <option value="TN">Tamil Nadu</option>
                                <option value="GJ">Gujarat</option>
                            </select>
                        </div>
                    </div>

                    <!-- Form Action Buttons -->
                    <div class="mt-6 flex flex-wrap gap-3">
                        <button id="saveBusinessBtn"
                            class="flex-1 bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-lg transition-colors duration-300 shadow-md hover:shadow-lg font-medium">
                            Save Changes <i class="fas fa-check ml-1"></i>
                        </button>
                        <button id="cancelEditBtn"
                            class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-3 rounded-lg transition-colors duration-300 font-medium">
                            Cancel <i class="fas fa-times ml-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Sections -->
        <div class="mt-8 grid md:grid-cols-3 gap-6">
            <!-- About Section -->
            <div class="bg-white rounded-xl shadow-lg p-6 md:col-span-2">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">About Shree Swarnam Jewellers</h2>
                <p class="text-gray-700 mb-4">
                    Established in 2008, Shree Swarnam Jewellers is a trusted name in Zaveri Bazaar, specializing in
                    exquisite gold and diamond jewellery. We offer BIS hallmarked gold jewellery and IGI certified
                    diamonds, ensuring purity and quality in every piece.
                </p>
                <p class="text-gray-700">
                    Our experienced artisans create traditional and contemporary designs to suit every occasion,
                    from weddings to festivals. We provide transparent pricing and certified quality for all our products.
                </p>

                <div class="mt-6">
                    <h3 class="font-medium text-gray-800 mb-2">Specialties</h3>
                    <ul class="list-disc list-inside text-gray-700 space-y-1">
                        <li>22K & 24K Gold Jewellery</li>
                        <li>Bridal Jewellery Sets</li>
                        <li>Diamond Rings & Earrings</li>
                        <li>Custom Jewelry Design</li>
                        <li>Gold Coin & Bars</li>
                        <li>Silver Pooja Items</li>
                    </ul>
                </div>
            </div>

            <!-- Map Section -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Location</h2>
                <div class="h-64 bg-gray-100 rounded-lg overflow-hidden mb-4">
                    <!-- Map placeholder -->
                    <div class="w-full h-full flex items-center justify-center text-gray-400">
                        <i class="fas fa-map-marked-alt text-4xl"></i>
                    </div>
                </div>
                <button class="w-full bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                    <i class="fas fa-directions mr-2"></i> Get Directions
                </button>
                <div class="mt-3 text-sm text-gray-600">
                    <p><strong>Landmark:</strong> Opposite Tribhuvandas Bhimji Zaveri</p>
                    <p><strong>Nearest Station:</strong> Charni Road (0.8 km)</p>
                </div>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800">Customer Reviews</h2>
                <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                    Write a Review
                </button>
            </div>

            <!-- Review Summary -->
            <div class="flex items-center mb-6">
                <div class="text-4xl font-bold mr-4">4.8</div>
                <div class="mr-6">
                    <div class="flex items-center mb-1">
                        <span class="text-sm w-8">5★</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2 mx-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                        <span class="text-sm text-gray-600">1,058</span>
                    </div>
                    <div class="flex items-center mb-1">
                        <span class="text-sm w-8">4★</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2 mx-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 10%"></div>
                        </div>
                        <span class="text-sm text-gray-600">125</span>
                    </div>
                    <div class="flex items-center mb-1">
                        <span class="text-sm w-8">3★</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2 mx-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 3%"></div>
                        </div>
                        <span class="text-sm text-gray-600">37</span>
                    </div>
                    <div class="flex items-center mb-1">
                        <span class="text-sm w-8">2★</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2 mx-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 1%"></div>
                        </div>
                        <span class="text-sm text-gray-600">12</span>
                    </div>
                    <div class="flex items-center">
                        <span class="text-sm w-8">1★</span>
                        <div class="w-32 bg-gray-200 rounded-full h-2 mx-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 1%"></div>
                        </div>
                        <span class="text-sm text-gray-600">13</span>
                    </div>
                </div>
            </div>

            <!-- Recent Reviews -->
            <div class="space-y-6">
                <div class="border-b pb-6">
                    <div class="flex justify-between mb-2">
                        <div class="font-medium">Priya Mehta</div>
                        <div class="text-sm text-gray-500">1 week ago</div>
                    </div>
                    <div class="flex items-center mb-2">
                        <div class="bg-green-500 text-white text-xs px-1.5 py-0.5 rounded-full font-medium mr-2">5★</div>
                        <div class="text-sm text-gray-600">Bridal Necklace Set</div>
                    </div>
                    <p class="text-gray-700">
                        Excellent craftsmanship! The bridal set I purchased was exactly as shown and the gold purity was
                        verified by hallmark. The staff was very patient and helped me choose the perfect design.
                    </p>
                </div>

                <div class="border-b pb-6">
                    <div class="flex justify-between mb-2">
                        <div class="font-medium">Rajesh Kumar</div>
                        <div class="text-sm text-gray-500">3 weeks ago</div>
                    </div>
                    <div class="flex items-center mb-2">
                        <div class="bg-green-500 text-white text-xs px-1.5 py-0.5 rounded-full font-medium mr-2">5★</div>
                        <div class="text-sm text-gray-600">Gold Coin Purchase</div>
                    </div>
                    <p class="text-gray-700">
                        Trusted jeweller with transparent pricing. Bought a 50gm gold coin and got proper certification.
                        Will definitely recommend to others.
                    </p>
                </div>

                <button
                    class="mt-4 w-full bg-gray-100 hover:bg-gray-200 text-gray-800 px-4 py-2 rounded-lg transition-colors">
                    See All 124 Reviews
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript to handle edit/save functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editBtn = document.getElementById('editBusinessBtn');
            const businessView = document.getElementById('businessView');
            const businessEditForm = document.getElementById('businessEditForm');
            const cancelEditBtn = document.getElementById('cancelEditBtn');
            const saveBusinessBtn = document.getElementById('saveBusinessBtn');
            const previewBusinessName = document.getElementById('previewBusinessName');
            const businessNameInput = document.getElementById('businessName');

            // Show edit form when edit button is clicked
            editBtn.addEventListener('click', function() {
                businessView.classList.add('hidden');
                businessEditForm.classList.remove('hidden');
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Cancel editing and return to view mode
            cancelEditBtn.addEventListener('click', function() {
                businessView.classList.remove('hidden');
                businessEditForm.classList.add('hidden');
            });

            // Save changes (in a real app, this would submit to server)
            saveBusinessBtn.addEventListener('click', function() {
                // Update preview with new values
                previewBusinessName.textContent = businessNameInput.value;

                // Here you would typically submit the form via AJAX
                // For demo, we'll just show a success message
                alert('Business details updated successfully!');

                // Return to view mode
                businessView.classList.remove('hidden');
                businessEditForm.classList.add('hidden');
            });

            // Update preview when inputs change
            const inputs = document.querySelectorAll('#businessEditForm input, #businessEditForm select');
            inputs.forEach(input => {
                input.addEventListener('change', function() {
                    // In a real app, you might update more preview elements
                    if (input.id === 'businessName') {
                        previewBusinessName.textContent = input.value;
                    }
                });
            });
        });
    </script>
@endsection
