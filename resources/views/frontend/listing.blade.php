@extends('components.main')

@section('content')
    <style>
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-pulse-slow {
            animation: pulseSlow 3s infinite;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulseSlow {

            0%,
            100% {
                box-shadow: 0 10px 25px rgba(59, 130, 246, 0.1);
            }

            50% {
                box-shadow: 0 15px 30px rgba(59, 130, 246, 0.2);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .card-gradient {
            background: linear-gradient(135deg, #ffffff 0%, #f0f7ff 100%);
        }

        .focus-ring {
            transition: all 0.2s ease;
        }

        .focus-ring:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
            border-color: #3b82f6;
        }
    </style>

    <section class="w-full bg-white py-14 px-6 lg:px-20">
        <div class="max-w-7xl mx-auto flex flex-col-reverse lg:flex-row items-center gap-8 lg:gap-16">
            <!-- Left Content -->
            <div class="flex-1 w-full">
                <nav class="text-sm text-gray-500 mb-4">
                    <a href="/" class="hover:underline transition-colors">Home</a>
                    <span class="mx-1 text-gray-400">›</span>
                    <span class="text-gray-700">Free Business Listing</span>
                </nav>

                <div class="relative inline-block mb-2">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-blue-400 rounded-lg blur opacity-25">
                    </div>
                    <h1 class="relative text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        List Your Business <span class="text-blue-600">for FREE</span>
                    </h1>
                </div>
                <p class="text-gray-700 text-base md:text-lg mb-8">with India's No. 1 Local Search Engine</p>

                <!-- Input Row -->
                <div class="flex flex-col sm:flex-row items-stretch gap-3 max-w-md w-full mb-8">
                    <div class="flex items-center border rounded-lg px-3 py-2.5 bg-gray-100 text-sm font-medium">
                        <span class="mr-1">🇮🇳</span> +91
                    </div>
                    <input type="tel" placeholder="Enter Mobile No"
                        class="flex-1 border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus-ring" />
                    <button id="openModalBtn"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-2.5 rounded-lg transition-all duration-300 flex items-center gap-2 shadow-md hover:shadow-lg group">
                        Start Now
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </div>

                <!-- Checkpoints -->
                <ul class="space-y-5 mb-10 text-sm md:text-base text-gray-800">
                    <li class="flex items-center gap-3">
                        <div class="bg-green-100 text-green-600 rounded-full p-1 flex-shrink-0">
                            <i class="fas fa-check text-sm"></i>
                        </div>
                        <span>Get Discovered & Create Your Online Business</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="bg-green-100 text-green-600 rounded-full p-1 flex-shrink-0">
                            <i class="fas fa-check text-sm"></i>
                        </div>
                        <span>Respond to Customer Reviews & Questions</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="bg-green-100 text-green-600 rounded-full p-1 flex-shrink-0">
                            <i class="fas fa-check text-sm"></i>
                        </div>
                        <span>Showcase Your Product & Service Offerings</span>
                    </li>
                </ul>

                <!-- Stats -->
                <div class="flex flex-wrap gap-8 mb-10">
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-blue-600">2.5 Cr+</span>
                        <span class="text-xs text-gray-600">Businesses Listed</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-blue-600">8.3 Cr+</span>
                        <span class="text-xs text-gray-600">Monthly Users</span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-2xl font-bold text-blue-600">90%</span>
                        <span class="text-xs text-gray-600">Customer Satisfaction</span>
                    </div>
                </div>

                <!-- Legal Note -->
                <p class="text-xs text-gray-500 leading-relaxed">
                    By continuing, you agree to our
                    <a href="#" class="underline hover:text-blue-600 transition-colors">Terms of Use</a>,
                    <a href="#" class="underline hover:text-blue-600 transition-colors">Privacy</a> &
                    <a href="#" class="underline hover:text-blue-600 transition-colors">Infringement Policy</a>.
                </p>
            </div>

            <!-- Right Side Image / Listing Card -->
            <div class="flex-1 relative w-full h-64 sm:h-72 md:h-96 lg:h-auto">
                <!-- Main Image -->
                <div class="relative w-full max-w-md mx-auto">
                    <img src="{{ asset('asset/images/sample.jpeg') }}" alt="Business Dashboard"
                        class="w-full h-auto rounded-lg shadow-xl animate-float" />

                    <!-- Floating Card 1 -->
                    <div
                        class="absolute left-6 -bottom-6 bg-white border shadow-2xl rounded-xl p-5 w-72 animate-fade-in-up animate-pulse-slow card-gradient">
                        <div class="flex items-center gap-2 mb-3 flex-wrap">
                            <span class="text-xs bg-blue-100 text-blue-600 px-2 py-0.5 rounded-full font-medium">✓
                                Verified</span>
                            <span class="text-xs bg-yellow-100 text-yellow-600 px-2 py-0.5 rounded-full font-medium">★
                                Trusted</span>
                            <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded-full font-medium">24h
                                Responsive</span>
                        </div>
                        <h4 class="font-semibold text-gray-800 text-sm mb-1">My Business Name</h4>
                        <div class="flex items-center text-xs text-green-600 font-medium mb-2">
                            <div class="flex items-center gap-0.5 text-yellow-500 mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-green-600">4.8</span>
                            <span class="ml-2 text-gray-500">777 Ratings</span>
                        </div>
                        <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                            <div class="w-4/5 h-full bg-green-500 rounded-full"></div>
                        </div>
                    </div>

                    <!-- Floating Notification -->
                    <div class="absolute top-6 right-0 bg-white border shadow-lg rounded-l-lg p-3 animate-fade-in-up"
                        style="animation-delay: 0.5s;">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                            <span class="text-xs font-medium">New Customer Inquiry</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="businessModal" class="fixed inset-0 z-50 bg-black/60 hidden items-center justify-center p-4">
        <div
            class="bg-white rounded-xl shadow-2xl w-full max-w-4xl mx-auto relative p-4 animate-fade-in-up max-h-[90vh] overflow-y-auto">
            <!-- Close Button -->
            <button id="closeModalBtn" class="absolute top-4 right-4 text-gray-400 hover:text-red-600 transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Left Preview Card -->
                <div class="flex-1">
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2 text-blue-600">
                        <i class="fas fa-eye"></i> Preview
                    </h3>
                    <div class="border rounded-lg shadow-md p-4 card-gradient">
                        <div class="relative mb-4">
                            <img src="{{ asset('asset/images/sample.jpeg') }}"
                                class="rounded-lg w-full object-cover h-48" />
                            <div class="absolute top-3 right-3 bg-blue-600 text-white text-xs px-2 py-1 rounded-full">
                                Premium
                            </div>
                        </div>
                        <h2 class="text-lg font-bold">Nevada H&B Salon</h2>
                        <div class="flex items-center gap-2 mt-2 text-green-600">
                            <div class="bg-green-500 text-white text-xs px-2 py-0.5 rounded-full font-medium">4.5★</div>
                            <span class="text-sm">3,532 ratings</span>
                        </div>
                        <p class="text-xs text-gray-600 mt-2">8 yrs in business • Verified • Top Rated</p>
                        <div class="mt-4 space-x-2">
                            <button
                                class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-1.5 rounded-lg transition-colors">
                                <i class="fas fa-phone-alt mr-1"></i> Call
                            </button>
                            <button
                                class="bg-gray-100 hover:bg-gray-200 text-gray-800 text-sm px-4 py-1.5 rounded-lg transition-colors">
                                <i class="fas fa-star mr-1"></i> Review
                            </button>
                            <button
                                class="bg-green-100 hover:bg-green-200 text-green-800 text-sm px-4 py-1.5 rounded-lg transition-colors">
                                <i class="fas fa-comment mr-1"></i> Chat
                            </button>
                        </div>
                    </div>
                    <div class="mt-4 bg-blue-50 border border-blue-100 rounded-lg p-3 text-xs text-blue-800">
                        <div class="flex items-start gap-2">
                            <i class="fas fa-info-circle mt-0.5 text-blue-500"></i>
                            <p>This is how your business will appear to customers on our platform. Complete your profile for
                                better visibility.</p>
                        </div>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="flex-1">
                    <h3 class="text-lg font-semibold mb-4 flex items-center gap-2 text-gray-800">
                        <i class="fas fa-building"></i> Enter Your Business Details
                    </h3>
                    <div class="grid grid-cols-2 gap-4 text-sm">
                        <div class="col-span-2 sm:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Business Name*</label>
                            <input type="text" placeholder="e.g. Shree Swarn Mandir Jewellers"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Pincode*</label>
                            <input type="text" placeholder="e.g. 400004"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Plot / Bldg / Shop No.*</label>
                            <input type="text" placeholder="Shop No. 5, Ground Floor"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Building / Market / Colony</label>
                            <input type="text" placeholder="Zaveri Bazaar Complex"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Street / Road Name*</label>
                            <input type="text" placeholder="Kalbadevi Road"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Landmark</label>
                            <input type="text" placeholder="Near Crawford Market"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2 lg:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Area*</label>
                            <input type="text" placeholder="Zaveri Bazaar"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2 lg:col-span-1">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">City*</label>
                            <input type="text" placeholder="Mumbai"
                                class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring" />
                        </div>

                        <div class="col-span-2">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">State*</label>
                            <select class="w-full border border-gray-300 px-3 py-2.5 rounded-lg focus-ring bg-white">
                                <option value="">Select State</option>
                                <option value="MH">Maharashtra</option>
                                <option value="DL">Delhi</option>
                                <option value="KA">Karnataka</option>
                                <option value="TN">Tamil Nadu</option>
                                <option value="GJ">Gujarat</option>
                            </select>
                        </div>

                        <!-- Image Upload -->
                        <div class="col-span-2 mt-4">
                            <label class="block text-xs text-gray-600 mb-1 ml-1">Upload Business Photo</label>
                            <div class="flex items-center gap-4">
                                <label
                                    class="flex items-center justify-center w-32 h-32 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-blue-400 transition">
                                    <input type="file" accept="image/*" class="hidden" id="businessImage" />
                                    <span class="text-gray-400 text-sm text-center px-2">Click to Upload</span>
                                </label>
                                <div class="w-32 h-32 rounded-lg overflow-hidden border border-gray-200">
                                    <img id="previewImage" src="{{ asset('asset/images/sample.jpeg') }}" alt="Preview"
                                        class="object-cover w-full h-full" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{route('listingdetails')}}"
                        class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-lg transition-colors duration-300 shadow-md hover:shadow-lg font-medium inline-block text-center">
                        Save and Continue <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Upload Preview Script -->
    <script>
        const businessImageInput = document.getElementById('businessImage');
        const previewImage = document.getElementById('previewImage');

        businessImageInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.setAttribute('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

    <!-- Modal JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const startBtn = document.getElementById("openModalBtn");
            const modal = document.getElementById("businessModal");
            const closeBtn = document.getElementById("closeModalBtn");

            if (startBtn && modal && closeBtn) {
                startBtn.addEventListener("click", function(e) {
                    e.preventDefault();
                    modal.classList.remove("hidden");
                    modal.classList.add("flex");
                    document.body.style.overflow = "hidden";
                });

                closeBtn.addEventListener("click", function() {
                    closeModal();
                });

                modal.addEventListener("click", function(e) {
                    if (e.target === modal) {
                        closeModal();
                    }
                });

                function closeModal() {
                    modal.classList.add("hidden");
                    modal.classList.remove("flex");
                    document.body.style.overflow = "";
                }

                // Escape key to close modal
                document.addEventListener("keydown", function(e) {
                    if (e.key === "Escape" && !modal.classList.contains("hidden")) {
                        closeModal();
                    }
                });
            }
        });
    </script>
@endsection
