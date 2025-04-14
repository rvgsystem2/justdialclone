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
                        <img src="{{ asset('asset/images/sample.jpeg') }}" id="mainDisplayImage"
                            class="w-full rounded-lg object-cover h-64 md:h-96" alt="Shree Swarnam Jewellers storefront" />
                        <div class="absolute top-4 right-4 bg-gold-600 text-white text-xs px-2 py-1 rounded-full">
                            Trusted Seller
                        </div>
                    </div>

                    <!-- Thumbnail Gallery -->
                    <div class="flex mt-4 space-x-2 overflow-x-auto pb-2" id="thumbnailGallery">
                        <img src="{{ asset('asset/images/sample.jpeg') }}" data-src="{{ asset('asset/images/sample.jpeg') }}"
                            class="w-16 h-16 rounded-md object-cover cursor-pointer border-2 border-blue-500 gallery-thumbnail" />
                        <img src="{{ asset('asset/images/sample.jpeg') }}" data-src="{{ asset('asset/images/sample.jpeg') }}"
                            class="w-16 h-16 rounded-md object-cover cursor-pointer border-2 border-transparent gallery-thumbnail" />
                        <img src="{{ asset('asset/images/sample.jpeg') }}" data-src="{{ asset('asset/images/sample.jpeg') }}"
                            class="w-16 h-16 rounded-md object-cover cursor-pointer border-2 border-transparent gallery-thumbnail" />
                        <img src="{{ asset('asset/images/sample.jpeg') }}" data-src="{{ asset('asset/images/sample.jpeg') }}"
                            class="w-16 h-16 rounded-md object-cover cursor-pointer border-2 border-transparent gallery-thumbnail" />
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
            <!-- Tab Navigation -->
            <div class="mb-6 border-b">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center">
                    <li class="mr-2">
                        <a href="#basicInfo" class="edit-tab inline-block p-4 border-b-2 border-blue-600 rounded-t-lg text-blue-600 active">
                            <i class="fas fa-building mr-2"></i>Basic Info
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="#businessImages" class="edit-tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fas fa-images mr-2"></i>Images
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="#productCatalog" class="edit-tab inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300">
                            <i class="fas fa-tags mr-2"></i>Catalog
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Tab Content -->
            <div class="tab-content">
                <!-- Basic Info Tab -->
                <div id="basicInfo" class="tab-pane active">
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
                        </div>
                    </div>
                </div>

                <!-- Images Tab -->
                <div id="businessImages" class="tab-pane hidden">
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2 text-gray-800">
                        <i class="fas fa-images"></i> Business Images
                    </h3>
                    
                    <!-- Cover Image Upload -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Cover Image</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
                            <div class="space-y-2">
                                <div class="mx-auto w-full max-w-lg relative">
                                    <img id="coverImagePreview" src="{{ asset('asset/images/sample.jpeg') }}" class="mx-auto h-48 w-full object-cover rounded-lg" />
                                    <button type="button" class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 hover:bg-red-600">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                                <div class="flex items-center justify-center">
                                    <label for="coverImageUpload" class="cursor-pointer bg-white border border-gray-300 rounded-md py-2 px-3 text-sm leading-4 text-gray-700 hover:bg-gray-50">
                                        <span>Change Cover Image</span>
                                        <input id="coverImageUpload" type="file" class="sr-only" accept="image/*">
                                    </label>
                                </div>
                                <p class="text-xs text-gray-500">Recommended: 1200 x 800 pixels, JPG or PNG, max 5MB</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery Images -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Gallery Images</label>
                        <p class="text-xs text-gray-500 mb-3">Add up to 10 images showcasing your store, products, and services</p>
                        
                        <!-- Gallery Preview -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4" id="galleryPreview">
                            <div class="relative group">
                                <img src="{{ asset('asset/images/sample.jpeg') }}" class="w-full h-24 object-cover rounded-lg" />
                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 rounded-lg transition-all flex items-center justify-center">
                                    <button class="opacity-0 group-hover:opacity-100 bg-red-500 text-white p-1 rounded-full hover:bg-red-600">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <div class="absolute top-0 left-0 bg-blue-500 text-white text-xs px-2 py-1 rounded-tr-lg rounded-bl-lg">
                                    Main
                                </div>
                            </div>
                            <div class="relative group">
                                <img src="{{ asset('asset/images/sample.jpeg') }}" class="w-full h-24 object-cover rounded-lg" />
                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 rounded-lg transition-all flex items-center justify-center">
                                    <button class="opacity-0 group-hover:opacity-100 bg-red-500 text-white p-1 rounded-full hover:bg-red-600">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <button class="absolute top-0 right-0 bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-tl-lg rounded-br-lg">
                                    Set as Main
                                </button>
                            </div>
                            <div class="relative group">
                                <img src="{{ asset('asset/images/sample.jpeg') }}" class="w-full h-24 object-cover rounded-lg" />
                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 rounded-lg transition-all flex items-center justify-center">
                                    <button class="opacity-0 group-hover:opacity-100 bg-red-500 text-white p-1 rounded-full hover:bg-red-600">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <button class="absolute top-0 right-0 bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-tl-lg rounded-br-lg">
                                    Set as Main
                                </button>
                            </div>
                            <div class="relative group">
                                <img src="{{ asset('asset/images/sample.jpeg') }}" class="w-full h-24 object-cover rounded-lg" />
                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 rounded-lg transition-all flex items-center justify-center">
                                    <button class="opacity-0 group-hover:opacity-100 bg-red-500 text-white p-1 rounded-full hover:bg-red-600">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <button class="absolute top-0 right-0 bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-tl-lg rounded-br-lg">
                                    Set as Main
                                </button>
                            </div>
                            
                            <!-- Add More Images -->
                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 flex flex-col items-center justify-center h-24 cursor-pointer hover:bg-gray-50">
                                <label for="galleryImageUpload" class="cursor-pointer flex flex-col items-center">
                                    <i class="fas fa-plus text-gray-400 text-xl mb-1"></i>
                                    <span class="text-xs text-gray-500">Add Image</span>
                                    <input id="galleryImageUpload" type="file" class="sr-only" accept="image/*" multiple>
                                </label>
                            </div>
                        </div>
                        
                        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mt-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-lightbulb text-yellow-400"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-yellow-700">
                                        High-quality images help customers trust your business. Include photos of your store exterior, 
                                        interior, products, and any certificates or awards.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catalog Tab -->
                <div id="productCatalog" class="tab-pane hidden">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold flex items-center gap-2 text-gray-800">
                            <i class="fas fa-tags"></i> Product Catalog
                        </h3>
                        <button id="addProductBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1.5 rounded-lg transition-colors text-sm">
                            <i class="fas fa-plus mr-1"></i> Add Product
                        </button>
                    </div>
                    
                    <p class="text-sm text-gray-600 mb-4">Showcase your best products with images, descriptions, and price ranges</p>
                    
                    <!-- Product List -->
                    <div class="space-y-4">
                        <!-- Product Item -->
                        <div class="border rounded-lg p-4 bg-white">
                            <div class="md:flex">
                                <div class="md:w-1/4 mb-4 md:mb-0">
                                    <img src="{{ asset('asset/images/sample.jpeg') }}" class="w-full h-32 object-cover rounded-lg" />
                                </div>
                                <div class="md:w-3/4 md:pl-4">
                                    <div class="flex justify-between items-start">
                                        <h4 class="font-medium text-gray-800">22K Gold Bridal Necklace Set</h4>
                                        <div class="flex space-x-2">
                                            <button class="text-blue-600 hover:text-blue-800">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-800">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-sm text-gray-500 mt-1">Category: Bridal Jewellery</div>
                                    <div class="flex items-center mt-2">
                                        <span class="text-gray-800 font-medium">₹1,50,000 - ₹2,00,000</span>
                                        <span class="mx-2 text-gray-300">|</span>
                                        <span class="text-green-600 text-sm">Available</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2">
                                        Exquisite bridal necklace set featuring intricate craftsmanship with matching earrings and maang tikka.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product Item -->
                        <div class="border rounded-lg p-4 bg-white">
                            <div class="md:flex">
                                <div class="md:w-1/4 mb-4 md:mb-0">
                                    <img src="{{ asset('asset/images/sample.jpeg') }}" class="w-full h-32 object-cover rounded-lg" />
                                </div>
                                <div class="md:w-3/4 md:pl-4">
                                    <div class="flex justify-between items-start">
                                        <h4 class="font-medium text-gray-800">Diamond Engagement Ring</h4>
                                        <div class="flex space-x-2">
                                            <button class="text-blue-600 hover:text-blue-800">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-800">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-sm text-gray-500 mt-1">Category: Diamond Jewellery</div>
                                    <div class="flex items-center mt-2">
                                        <span class="text-gray-800 font-medium">₹40,000 - ₹80,000</span>
                                        <span class="mx-2 text-gray-300">|</span>
                                        <span class="text-green-600 text-sm">Available</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2">
                                        IGI certified solitaire diamond ring with 18K gold band. Customizable designs available.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Product Item -->
                        <div class="border rounded-lg p-4 bg-white">
                            <div class="md:flex">
                                <div class="md:w-1/4 mb-4 md:mb-0">
                                    <img src="{{ asset('asset/images/sample.jpeg') }}" class="w-full h-32 object-cover rounded-lg" />
                                </div>
                                <div class="md:w-3/4 md:pl-4">
                                    <div class="flex justify-between items-start">
                                        <h4 class="font-medium text-gray-800">Gold Coins (24K)</h4>
                                        <div class="flex space-x-2">
                                            <button class="text-blue-600 hover:text-blue-800">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="text-red-600 hover:text-red-800">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="text-sm text-gray-500 mt-1">Category: Gold Coins</div>
                                    <div class="flex items-center mt-2">
                                        <span class="text-gray-800 font-medium">₹5,000 - ₹50,000</span>
                                        <span class="mx-2 text-gray-300">|</span>
                                        <span class="text-green-600 text-sm">Available</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2">
                                        Pure 24K gold coins in various weights (1g to 10g). BIS hallmarked with certification.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Form Modal (hidden by default) -->
                    <div id="productFormModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
                        <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full max-h-screen overflow-y-auto">
                            <div class="border-b px-6 py-3 flex justify-between items-center">
                                <h3 class="text-lg font-medium">Add New Product</h3>
                                <button id="closeProductModal" class="text-gray-400 hover:text-gray-500">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            
                            <div class="p-6">
                                <form id="productForm">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <!-- Product Name -->
                                        <div class="col-span-2">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Product Name*</label>
                                            <input type="text" id="productName" placeholder="e.g. Gold Bangles Set" 
                                                class="w-full border border-gray-300 px-3 py-2 rounded-lg focus-ring">
                                        </div>
                                        
                                        <!-- Category -->
                                        <div class="md:col-span-1">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Category*</label>
                                            <select id="productCategory" class="w-full border border-gray-300 px-3 py-2 rounded-lg focus-ring bg-white">
                                                <option value="">Select Category</option>
                                                <option value="gold">Gold Jewellery</option>
                                                <option value="diamond">Diamond Jewellery</option>
                                                <option value="bridal">Bridal Jewellery</option>
                                                <option value="silver">Silver Jewellery</option>
                                                <option value="coins">Gold Coins</option>
                                            </select>
                                        </div>
                                        
                                        <!-- Availability -->
                                        <div class="md:col-span-1">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Availability*</label>
                                            <select id="productAvailability" class="w-full border border-gray-300 px-3 py-2 rounded-lg focus-ring bg-white">
                                                <option value="available">Available</option>
                                                <option value="limited">Limited Stock</option>
                                                <option value="out-of-stock">Out of Stock</option>
                                                <option value="pre-order">Pre-Order</option>
                                            </select>
                                        </div>
                                        
                                        <!-- Price Range -->
                                        <div class="md:col-span-1">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Min Price (₹)*</label>
                                            <input type="text" id="minPrice" placeholder="e.g. 10000" 
                                                class="w-full border border-gray-300 px-3 py-2 rounded-lg focus-ring">
                                        </div>
                                        
                                        <div class="md:col-span-1">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Max Price (₹)</label>
                                            <input type="text" id="maxPrice" placeholder="e.g. 20000" 
                                                class="w-full border border-gray-300 px-3 py-2 rounded-lg focus-ring">
                                        </div>
                                        
                                        <!-- Description -->
                                        <div class="col-span-2">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Description*</label>
                                            <textarea id="productDescription" rows="3" placeholder="Describe your product with details like material, design, specifications, etc." 
                                                class="w-full border border-gray-300 px-3 py-2 rounded-lg focus-ring"></textarea>
                                        </div>
                                        
                                        <!-- Product Images -->
                                        <div class="col-span-2">
                                            <label class="block text-sm font-medium text-gray-700 mb-1">Product Images*</label>
                                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4">
                                                <div class="grid grid-cols-3 gap-4 mb-3" id="productImagePreviews">
                                                    <!-- Image previews will be added here -->
                                                    <div class="border-2 border-dashed border-gray-300 rounded-lg flex flex-col items-center justify-center p-4 h-24 cursor-pointer hover:bg-gray-50">
                                                        <label for="productImageUpload" class="cursor-pointer flex flex-col items-center">
                                                            <i class="fas fa-plus text-gray-400"></i>
                                                            <span class="text-xs text-gray-500 mt-1">Add Images</span>
                                                            <input id="productImageUpload" type="file" class="sr-only" accept="image/*" multiple>
                                                        </label>
                                                    </div>
                                                </div>
                                                <p class="text-xs text-gray-500">Upload up to 5 images. JPG or PNG, max 2MB each.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-6 flex justify-end space-x-3">
                                        <button type="button" id="cancelProductBtn" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-4 py-2 rounded-lg transition-colors">
                                            Cancel
                                        </button>
                                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                                            Add Product
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form Action Buttons -->
            <div class="mt-6 flex flex-wrap gap-3 border-t pt-6">
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

        <!-- Featured Products Section -->
        <div class="mt-8 bg-white rounded-xl shadow-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800">Featured Products</h2>
                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View All Products <i class="fas fa-arrow-right ml-1"></i></a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Product Card -->
                <div class="border rounded-lg overflow-hidden bg-white hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('asset/images/sample.jpeg') }}" class="w-full h-40 object-cover" />
                        <div class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full">
                            Best Seller
                        </div>
                    </div>
                    <div class="p-3">
                        <h3 class="font-medium text-sm mb-1 truncate">Bridal Necklace Set</h3>
                        <div class="text-xs text-gray-500 mb-2">Gold Jewellery</div>
                        <div class="flex justify-between items-center">
                            <span class="text-xs font-medium">₹1,50,000+</span>
                            <button class="text-blue-600 hover:text-blue-800 text-xs">
                                Details <i class="fas fa-chevron-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card -->
                <div class="border rounded-lg overflow-hidden bg-white hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('asset/images/sample.jpeg') }}" class="w-full h-40 object-cover" />
                    </div>
                    <div class="p-3">
                        <h3 class="font-medium text-sm mb-1 truncate">Diamond Engagement Ring</h3>
                        <div class="text-xs text-gray-500 mb-2">Diamond Jewellery</div>
                        <div class="flex justify-between items-center">
                            <span class="text-xs font-medium">₹40,000+</span>
                            <button class="text-blue-600 hover:text-blue-800 text-xs">
                                Details <i class="fas fa-chevron-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card -->
                <div class="border rounded-lg overflow-hidden bg-white hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('asset/images/sample.jpeg') }}" class="w-full h-40 object-cover" />
                        <div class="absolute top-2 right-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">
                            New Arrival
                        </div>
                    </div>
                    <div class="p-3">
                        <h3 class="font-medium text-sm mb-1 truncate">Traditional Bangles Set</h3>
                        <div class="text-xs text-gray-500 mb-2">Gold Jewellery</div>
                        <div class="flex justify-between items-center">
                            <span class="text-xs font-medium">₹80,000+</span>
                            <button class="text-blue-600 hover:text-blue-800 text-xs">
                                Details <i class="fas fa-chevron-right ml-1"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card -->
                <div class="border rounded-lg overflow-hidden bg-white hover:shadow-md transition-shadow">
                    <div class="relative">
                        <img src="{{ asset('asset/images/sample.jpeg') }}" class="w-full h-40 object-cover" />
                    </div>
                    <div class="p-3">
                        <h3 class="font-medium text-sm mb-1 truncate">Silver Pooja Thali Set</h3>
                        <div class="text-xs text-gray-500 mb-2">Silver Articles</div>
                        <div class="flex justify-between items-center">
                            <span class="text-xs font-medium">₹15,000+</span>
                            <button class="text-blue-600 hover:text-blue-800 text-xs">
                                Details <i class="fas fa-chevron-right ml-1"></i>
                            </button>
                        </div>
                    </div>
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
            // Basic Elements
            const editBtn = document.getElementById('editBusinessBtn');
            const businessView = document.getElementById('businessView');
            const businessEditForm = document.getElementById('businessEditForm');
            const cancelEditBtn = document.getElementById('cancelEditBtn');
            const saveBusinessBtn = document.getElementById('saveBusinessBtn');
            const previewBusinessName = document.getElementById('previewBusinessName');
            const businessNameInput = document.getElementById('businessName');
            
            // Tab Navigation
            const tabLinks = document.querySelectorAll('.edit-tab');
            const tabPanes = document.querySelectorAll('.tab-pane');
            
            // Product Form Elements
            const addProductBtn = document.getElementById('addProductBtn');
            const productFormModal = document.getElementById('productFormModal');
            const closeProductModal = document.getElementById('closeProductModal');
            const cancelProductBtn = document.getElementById('cancelProductBtn');
            const productForm = document.getElementById('productForm');
            const productImageUpload = document.getElementById('productImageUpload');
            const productImagePreviews = document.getElementById('productImagePreviews');
            
            // Gallery Image Elements
            const galleryImageUpload = document.getElementById('galleryImageUpload');
            const galleryPreview = document.getElementById('galleryPreview');
            const coverImageUpload = document.getElementById('coverImageUpload');
            const coverImagePreview = document.getElementById('coverImagePreview');
            
            // Main Display Gallery
            const mainDisplayImage = document.getElementById('mainDisplayImage');
            const thumbnailGallery = document.getElementById('thumbnailGallery');
            const galleryThumbnails = document.querySelectorAll('.gallery-thumbnail');

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
            
            // Tab functionality
            tabLinks.forEach(tab => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all tabs
                    tabLinks.forEach(link => {
                        link.classList.remove('border-blue-600', 'text-blue-600');
                        link.classList.add('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300');
                    });
                    
                    // Add active class to current tab
                    this.classList.add('border-blue-600', 'text-blue-600');
                    this.classList.remove('border-transparent', 'hover:text-gray-600', 'hover:border-gray-300');
                    
                    // Hide all tab panes
                    tabPanes.forEach(pane => {
                        pane.classList.add('hidden');
                    });
                    
                    // Show current tab pane
                    const targetId = this.getAttribute('href').substring(1);
                    document.getElementById(targetId).classList.remove('hidden');
                });
            });
            
            // Product modal functionality
            addProductBtn.addEventListener('click', function() {
                productFormModal.classList.remove('hidden');
            });
            
            closeProductModal.addEventListener('click', function() {
                productFormModal.classList.add('hidden');
            });
            
            cancelProductBtn.addEventListener('click', function() {
                productFormModal.classList.add('hidden');
            });
            
            // Close modal when clicking outside
            productFormModal.addEventListener('click', function(e) {
                if (e.target === productFormModal) {
                    productFormModal.classList.add('hidden');
                }
            });
            
            // Handle product form submission
            productForm.addEventListener('submit', function(e) {
                e.preventDefault();
                // In a real app, you would submit the form data to the server
                // For demo, just hide the modal and show success message
                productFormModal.classList.add('hidden');
                alert('Product added successfully!');
            });
            
            // Handle product image upload
            productImageUpload.addEventListener('change', function() {
                handleImageUpload(this.files, productImagePreviews);
            });
            
            // Handle gallery image upload
            galleryImageUpload.addEventListener('change', function() {
                handleImageUpload(this.files, galleryPreview);
            });
            
            // Handle cover image upload
            coverImageUpload.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        coverImagePreview.src = e.target.result;
                    };
                    reader.readAsDataURL(this.files[0]);
                }
            });
            
            // Gallery thumbnail functionality
            galleryThumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function() {
                    // Remove active border from all thumbnails
                    galleryThumbnails.forEach(thumb => {
                        thumb.classList.remove('border-blue-500');
                        thumb.classList.add('border-transparent');
                    });
                    
                    // Add active border to clicked thumbnail
                    this.classList.add('border-blue-500');
                    this.classList.remove('border-transparent');
                    
                    // Update main display image
                    mainDisplayImage.src = this.getAttribute('data-src');
                });
            });
            
            // Helper function to handle image uploads
            function handleImageUpload(files, previewContainer) {
                if (!files) return;
                
                for (let i = 0; i < files.length; i++) {
                    if (i >= 5) break; // Limit to 5 images
                    
                    const file = files[i];
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        // Create image preview element
                        const imgContainer = document.createElement('div');
                        imgContainer.className = 'relative group';
                        
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'w-full h-24 object-cover rounded-lg';
                        
                        const overlay = document.createElement('div');
                        overlay.className = 'absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 rounded-lg transition-all flex items-center justify-center';
                        
                        const deleteBtn = document.createElement('button');
                        deleteBtn.className = 'opacity-0 group-hover:opacity-100 bg-red-500 text-white p-1 rounded-full hover:bg-red-600';
                        deleteBtn.innerHTML = '<i class="fas fa-trash"></i>';
                        deleteBtn.onclick = function() {
                            imgContainer.remove();
                        };
                        
                        overlay.appendChild(deleteBtn);
                        imgContainer.appendChild(img);
                        imgContainer.appendChild(overlay);
                        
                        // Add "Set as Main" button for gallery images
                        if (previewContainer.id === 'galleryPreview') {
                            const mainBtn = document.createElement('button');
                            mainBtn.className = 'absolute top-0 right-0 bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-tl-lg rounded-br-lg';
                            mainBtn.textContent = 'Set as Main';
                            imgContainer.appendChild(mainBtn);
                        }
                        
                        // Insert before "Add Image" button for gallery preview
                        if (previewContainer.id === 'galleryPreview' || previewContainer.id === 'productImagePreviews') {
                            previewContainer.insertBefore(imgContainer, previewContainer.lastElementChild);
                        } else {
                            previewContainer.appendChild(imgContainer);
                        }
                    };
                    
                    reader.readAsDataURL(file);
                }
            }
        });
    </script>
@endsection