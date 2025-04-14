<footer class="bg-gray-900 text-gray-300 py-12 px-4">
    <div class="max-w-7xl mx-auto">
        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            <!-- About Section -->
            <div class="space-y-4">
                <h3 class="text-white font-bold text-xl flex items-center">
                    <span class="text-blue-400">Just</span><span class="text-orange-400">Dial</span>
                </h3>
                <p class="text-gray-400 text-sm leading-relaxed">
                    India's leading local search engine, connecting users with businesses across 2500+ categories
                    through multiple platforms.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-white font-semibold text-lg mb-5 pb-2 border-b border-gray-700">Quick Links</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('advertise') }}"
                            class="text-gray-400 hover:text-white transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Advertise With Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('support') }}"
                            class="text-gray-400 hover:text-white transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Help & Support
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('careers') }}"
                            class="text-gray-400 hover:text-white transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Careers
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('privacy') }}"
                            class="text-gray-400 hover:text-white transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('terms') }}"
                            class="text-gray-400 hover:text-white transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Terms of Service
                        </a>
                    </li>
                    <li><a href="{{ route('about') }}"
                            class="text-gray-400 hover:text-white transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            About Us
                        </a></li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="text-gray-400 hover:text-white transition-colors flex items-center">
                            <span class="material-symbols-outlined text-base mr-2">arrow_forward_ios</span>
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>


            <!-- Contact Info -->
            <div>
                <h4 class="text-white font-semibold text-lg mb-5 pb-2 border-b border-gray-700">Contact Us</h4>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-400 mr-3 mt-0.5">call</span>
                        <div>
                            <p class="text-gray-400 text-sm">Customer Care</p>
                            <a href="tel:+918888888888" class="text-white hover:underline">+91 8888888888</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-400 mr-3 mt-0.5">mail</span>
                        <div>
                            <p class="text-gray-400 text-sm">Email Support</p>
                            <a href="mailto:support@justdial.com"
                                class="text-white hover:underline">support@justdial.com</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-400 mr-3 mt-0.5">location_on</span>
                        <div>
                            <p class="text-gray-400 text-sm">Corporate Office</p>
                            <p class="text-white">Mumbai, Maharashtra, India</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Social & Newsletter -->
            <div>
                <h4 class="text-white font-semibold text-lg mb-5 pb-2 border-b border-gray-700">Stay Connected</h4>

                <!-- Social Media -->
                <div class="mb-6">
                    <p class="text-gray-400 text-sm mb-3">Follow us on social media</p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="bg-gray-800 hover:bg-blue-600 h-10 w-10 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#"
                            class="bg-gray-800 hover:bg-sky-400 h-10 w-10 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-twitter text-white"></i>
                        </a>
                        <a href="#"
                            class="bg-gray-800 hover:bg-pink-600 h-10 w-10 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="#"
                            class="bg-gray-800 hover:bg-blue-500 h-10 w-10 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                        <a href="#"
                            class="bg-gray-800 hover:bg-red-600 h-10 w-10 rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-youtube text-white"></i>
                        </a>
                    </div>
                </div>

                <!-- Newsletter -->
                <div>
                    <p class="text-gray-400 text-sm mb-3">Subscribe to our newsletter</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email"
                            class="bg-gray-800 text-white px-4 py-2 rounded-l-md focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-r-md transition-colors">
                            <span class="material-symbols-outlined">send</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 pt-6 border-t border-gray-800">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-500 text-sm mb-4 md:mb-0">
                    © 2025 Justdial Ltd. All rights reserved.
                </p>
                <div class="flex flex-wrap justify-center gap-x-6 gap-y-2">
                    <a href="{{ route('privacy') }}"
                        class="text-gray-500 hover:text-white text-sm transition-colors">Privacy Policy</a>
                    <a href="{{ route('terms') }}"
                        class="text-gray-500 hover:text-white text-sm transition-colors">Terms of Use</a>
                    <a href="{{ route('cookies') }}"
                        class="text-gray-500 hover:text-white text-sm transition-colors">Cookie Policy</a>
                    <a href="{{ route('sitemap') }}"
                        class="text-gray-500 hover:text-white text-sm transition-colors">Sitemap</a>
                </div>
            </div>
        </div>
    </div>
</footer>
