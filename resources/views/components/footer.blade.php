<footer class="bg-gray-900 text-gray-300 py-16 px-6">
    <div class="max-w-7xl mx-auto">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12">

            <!-- About Section -->
            <div class="space-y-6">
                <h3 class="text-white font-bold text-2xl flex items-center">
                    <span class="text-amber-500">RVG</span><span class="text-amber-400">Groups</span>
                </h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    India's leading local search engine, connecting users with businesses across 2500+ categories
                    through multiple platforms.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-semibold text-lg mb-6 pb-2 border-b border-gray-700">Quick Links</h4>
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('advertise') }}"
                            class="text-gray-400 hover:text-amber-400 transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Advertise With Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('support') }}"
                            class="text-gray-400 hover:text-amber-400 transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Help & Support
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('careers') }}"
                            class="text-gray-400 hover:text-amber-400 transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Careers
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('privacy') }}"
                            class="text-gray-400 hover:text-amber-400 transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('terms') }}"
                            class="text-gray-400 hover:text-amber-400 transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Terms of Service
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="text-gray-400 hover:text-amber-400 transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="text-gray-400 hover:text-amber-400 transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-white font-semibold text-lg mb-6 pb-2 border-b border-gray-700">Contact Us</h4>
                <ul class="space-y-6">
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-amber-500 mr-3 mt-0.5">call</span>
                        <div>
                            <p class="text-gray-400 text-sm">Customer Care</p>
                            <a href="tel:+918888888888" class="text-white hover:text-amber-300">+91 82990 12292</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-amber-500 mr-3 mt-0.5">mail</span>
                        <div>
                            <p class="text-gray-400 text-sm">Email Support</p>
                            <a href="mailto:support@rvggroups.com"
                                class="text-white hover:text-amber-300">support@rvggroups.com</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-amber-500 mr-3 mt-0.5">location_on</span>
                        <div>
                            <p class="text-gray-400 text-sm">Corporate Office</p>
                            <p class="text-white">73 Basement, Ekta Enclave Society, Lakhanpur, Khyora, Kanpur, Uttar
                                Pradesh 208024</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Social & Newsletter -->
            <div>
                <h4 class="text-white font-semibold text-lg mb-6 pb-2 border-b border-gray-700">Stay Connected</h4>

                <!-- Social Media -->
                <div class="mb-8">
                    <p class="text-gray-400 text-sm mb-4">Follow us on social media</p>
                    <div class="flex space-x-3 sm:space-x-4">
                        <!-- Facebook -->
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-gray-800 hover:bg-amber-600 flex items-center justify-center transition duration-300 ease-in-out shadow-md">
                            <i class="fab fa-facebook-f text-white text-base"></i>
                        </a>
                        <!-- Twitter -->
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-gray-800 hover:bg-amber-500 flex items-center justify-center transition duration-300 ease-in-out shadow-md">
                            <i class="fab fa-twitter text-white text-base"></i>
                        </a>
                        <!-- Instagram -->
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-gray-800 hover:bg-amber-600 flex items-center justify-center transition duration-300 ease-in-out shadow-md">
                            <i class="fab fa-instagram text-white text-base"></i>
                        </a>
                        <!-- LinkedIn -->
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-gray-800 hover:bg-amber-500 flex items-center justify-center transition duration-300 ease-in-out shadow-md">
                            <i class="fab fa-linkedin-in text-white text-base"></i>
                        </a>
                        <!-- YouTube -->
                        <a href="#"
                            class="h-10 w-10 rounded-full bg-gray-800 hover:bg-amber-600 flex items-center justify-center transition duration-300 ease-in-out shadow-md">
                            <i class="fab fa-youtube text-white text-base"></i>
                        </a>
                    </div>
                </div>

                <!-- Newsletter -->
                <div>
                    <p class="text-gray-400 text-sm mb-4">Subscribe to our newsletter</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email"
                            class="bg-gray-800 text-white px-4 py-3 rounded-l-md focus:outline-none focus:ring-2 focus:ring-amber-500 w-full">
                        <button
                            class="bg-amber-600 hover:bg-amber-700 text-white px-6 py-3 rounded-r-md transition-colors">
                            <span class="material-symbols-outlined">send</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-16 pt-8 border-t border-gray-800">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm mb-6 sm:mb-0">
                    © 2025 RVG Groups Ltd. All rights reserved.
                </p>
                <div class="flex flex-wrap justify-center gap-x-8 gap-y-2">
                    <a href="{{ route('privacy') }}"
                        class="text-gray-500 hover:text-amber-400 text-sm transition-colors">Privacy Policy</a>
                    <a href="{{ route('terms') }}"
                        class="text-gray-500 hover:text-amber-400 text-sm transition-colors">Terms of Use</a>
                    <a href="{{ route('cookies') }}"
                        class="text-gray-500 hover:text-amber-400 text-sm transition-colors">Cookie Policy</a>
                    <a href="{{ route('sitemap') }}"
                        class="text-gray-500 hover:text-amber-400 text-sm transition-colors">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>
