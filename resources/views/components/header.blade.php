<!-- Add this to your <head> -->
<link
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<header class="bg-white shadow-md py-4 px-6 sticky top-0 z-50 border-b border-gray-100">
    <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between gap-4">
        <!-- Logo & Mobile Menu Toggle -->
        <div class="flex items-center justify-between w-full md:w-auto">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2">
                <span class="text-2xl font-bold text-gray-900 font-[Montserrat]">
                    <span class="text-amber-700">RVG</span><span class="text-amber-500">Groups</span>
                    <span class="text-xs text-gray-500 block -mt-1 font-normal tracking-wider">EXCELLENCE
                        DELIVERED</span>
                </span>
            </a>

            <!-- Mobile Menu Toggle -->
            <button id="menuToggle"
                class="md:hidden text-gray-600 hover:text-gray-900 focus:outline-none transition-colors">
                <span class="material-symbols-outlined text-3xl">menu</span>
            </button>
        </div>

        <!-- Search Section (Desktop) -->
        <div class="hidden md:flex items-center flex-1 max-w-2xl mx-4">
            <div class="relative flex-1 flex items-center">
                <!-- Location Dropdown -->
                <div class="relative">
                    <div class="flex items-center bg-gray-50 border border-gray-200 rounded-l-lg px-3 h-12 w-48 min-w-[12rem] hover:border-amber-400 transition-colors cursor-pointer shadow-sm"
                        onclick="toggleDesktopLocationDropdown()">
                        <span class="material-symbols-outlined text-amber-600 text-lg mr-2">location_on</span>
                        <input type="text" id="desktopLocationInput" value="Mumbai" readonly
                            class="bg-transparent outline-none text-sm w-full text-gray-800 font-medium placeholder-gray-500 truncate cursor-pointer"
                            placeholder="Select Location" />
                        <span
                            class="material-symbols-outlined text-gray-400 text-lg ml-1 pointer-events-none">expand_more</span>
                    </div>

                    <!-- Dropdown Menu -->
                    <ul id="desktopLocationDropdown"
                        class="absolute z-10 hidden bg-white border border-gray-200 rounded-lg shadow-lg mt-1 w-full max-h-60 overflow-y-auto">
                        <li class="px-4 py-2.5 hover:bg-amber-50 cursor-pointer text-sm text-gray-700 border-l-2 border-transparent hover:border-amber-500"
                            onclick="selectDesktopLocation('Mumbai')">Mumbai</li>
                        <li class="px-4 py-2.5 hover:bg-amber-50 cursor-pointer text-sm text-gray-700 border-l-2 border-transparent hover:border-amber-500"
                            onclick="selectDesktopLocation('Delhi')">Delhi</li>
                        <li class="px-4 py-2.5 hover:bg-amber-50 cursor-pointer text-sm text-gray-700 border-l-2 border-transparent hover:border-amber-500"
                            onclick="selectDesktopLocation('Bangalore')">Bangalore</li>
                        <li class="px-4 py-2.5 hover:bg-amber-50 cursor-pointer text-sm text-gray-700 border-l-2 border-transparent hover:border-amber-500"
                            onclick="selectDesktopLocation('Hyderabad')">Hyderabad</li>
                        <li class="px-4 py-2.5 hover:bg-amber-50 cursor-pointer text-sm text-gray-700 border-l-2 border-transparent hover:border-amber-500"
                            onclick="selectDesktopLocation('Pune')">Pune</li>
                    </ul>
                </div>

                <!-- Search Input -->
                <div
                    class="relative flex-1 flex items-center bg-gray-50 border border-gray-200 border-l-0 rounded-r-lg px-4 h-12 hover:border-amber-400 transition-colors shadow-sm">
                    <input type="text" placeholder="Search for businesses, services or products..."
                        class="bg-transparent outline-none text-xs w-full text-gray-800 placeholder-gray-500" />
                    <button
                        class="text-white bg-gradient-to-r from-amber-500 to-amber-600 h-9 px-2 rounded-md flex items-center justify-center ml-2 transition-all hover:shadow-md">
                        <span class="material-symbols-outlined text-lg mr-1">search</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Right Navigation (Desktop) -->
        <nav class="hidden md:flex items-center space-x-5">
            <!-- Services Dropdown -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex items-center space-x-1 text-gray-600 hover:text-amber-600 transition-colors px-2 py-1">
                    <span class="text-sm font-medium">Services</span>
                    <span class="material-symbols-outlined text-gray-500 text-sm">expand_more</span>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-100">
                    <a href=""
                        class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-amber-50 border-l-2 border-transparent hover:border-amber-500">
                        <span class="material-symbols-outlined text-amber-500 mr-3 text-lg">business</span>
                        <span>Business Services</span>
                    </a>
                    <a href=""
                        class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-amber-50 border-l-2 border-transparent hover:border-amber-500">
                        <span class="material-symbols-outlined text-amber-500 mr-3 text-lg">groups</span>
                        <span>Consulting</span>
                    </a>
                    <a href=""
                        class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-amber-50 border-l-2 border-transparent hover:border-amber-500">
                        <span class="material-symbols-outlined text-amber-500 mr-3 text-lg">lightbulb</span>
                        <span>Enterprise Solutions</span>
                    </a>
                </div>
            </div>

            <!-- About Us Link -->
            <a href="{{ route('about') }}"
                class="flex items-center space-x-1 text-gray-600 hover:text-amber-600 transition-colors px-2 py-1">
                <span class="text-sm font-medium">About Us</span>
            </a>

            <!-- Contact -->
            <a href="{{ route('contact') }}"
                class="flex items-center space-x-1 text-gray-600 hover:text-amber-600 transition-colors px-2 py-1">
                <span class="text-sm font-medium">Contact</span>
            </a>

            <!-- Free Listing -->
            <a href="{{ route('listing') }}" class="relative group">
                <div
                    class="flex items-center space-x-1.5 px-3 py-1.5 bg-amber-50 border border-amber-200 rounded-full hover:bg-amber-100 transition-colors">
                    <span class="material-symbols-outlined text-amber-600 text-sm">add_business</span>
                    <span class="text-amber-800 text-sm font-medium whitespace-nowrap">Free Listing</span>
                </div>
            </a>

            <!-- Notification -->
            <a href="{{ route('notifications') }}"
                class="relative text-gray-600 hover:text-amber-600 transition-colors p-1">
                <span class="material-symbols-outlined text-xl">notifications</span>
                <span
                    class="absolute -top-1 -right-1 bg-amber-500 text-white text-xs h-4 w-4 flex items-center justify-center rounded-full">
                    3
                </span>
            </a>

            <!-- User Dropdown -->
            <div class="relative" x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex items-center space-x-1 text-gray-600 hover:text-amber-600 transition-colors">
                    <div
                        class="h-9 w-9 rounded-full bg-gray-100 flex items-center justify-center overflow-hidden border border-gray-200 hover:border-amber-300 transition-colors">
                        <span class="material-symbols-outlined text-gray-500">person</span>
                    </div>
                    <span class="material-symbols-outlined text-gray-500 text-lg">expand_more</span>
                </button>

                <!-- Dropdown Menu -->
                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-100">
                    <div class="px-4 py-3 border-b border-gray-100">
                        <p class="text-xs font-medium text-gray-400">WELCOME</p>
                        <p class="text-sm font-medium text-gray-700 mt-0.5">Guest User</p>
                    </div>
                    <a href="{{ route('login') }}"
                        class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-amber-50 border-l-2 border-transparent hover:border-amber-500">
                        <span class="material-symbols-outlined text-amber-500 mr-3 text-lg">login</span>
                        <span>Login</span>
                    </a>
                    <a href="{{ route('signup') }}"
                        class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-amber-50 border-l-2 border-transparent hover:border-amber-500">
                        <span class="material-symbols-outlined text-amber-500 mr-3 text-lg">person_add</span>
                        <span>Sign Up</span>
                    </a>
                    <a href="{{ route('profile') }}"
                        class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-amber-50 border-l-2 border-transparent hover:border-amber-500">
                        <span class="material-symbols-outlined text-amber-500 mr-3 text-lg">account_circle</span>
                        <span>My Profile</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobileMenu" class="hidden w-full md:hidden pt-4">
            <div class="space-y-4 border-t border-gray-200 pt-4">
                <!-- Mobile Search Section -->
                <div class="space-y-3">
                    <!-- Location Input with Dropdown -->
                    <div class="relative w-full">
                        <div onclick="toggleMobileLocationDropdown()"
                            class="flex items-center bg-gray-50 border border-gray-200 rounded-lg px-3 h-12 w-full hover:border-amber-400 transition-colors cursor-pointer shadow-sm">
                            <span class="material-symbols-outlined text-amber-600 text-lg mr-2">location_on</span>
                            <input type="text" id="mobileLocationInput" value="Mumbai" readonly
                                class="bg-transparent outline-none text-sm w-full text-gray-800 font-medium placeholder-gray-500 cursor-pointer"
                                placeholder="Select Location" />
                            <span class="material-symbols-outlined text-gray-400 text-lg ml-1">expand_more</span>
                        </div>

                        <ul id="mobileLocationDropdown"
                            class="absolute z-10 hidden bg-white border border-gray-200 rounded-lg shadow-md mt-1 w-full max-h-60 overflow-y-auto">
                            <li class="px-4 py-2.5 hover:bg-amber-50 cursor-pointer text-sm text-gray-700 border-l-2 border-transparent hover:border-amber-500"
                                onclick="selectMobileLocation('Mumbai')">Mumbai</li>
                            <li class="px-4 py-2.5 hover:bg-amber-50 cursor-pointer text-sm text-gray-700 border-l-2 border-transparent hover:border-amber-500"
                                onclick="selectMobileLocation('Delhi')">Delhi</li>
                            <li class="px-4 py-2.5 hover:bg-amber-50 cursor-pointer text-sm text-gray-700 border-l-2 border-transparent hover:border-amber-500"
                                onclick="selectMobileLocation('Bangalore')">Bangalore</li>
                            <li class="px-4 py-2.5 hover:bg-amber-50 cursor-pointer text-sm text-gray-700 border-l-2 border-transparent hover:border-amber-500"
                                onclick="selectMobileLocation('Hyderabad')">Hyderabad</li>
                            <li class="px-4 py-2.5 hover:bg-amber-50 cursor-pointer text-sm text-gray-700 border-l-2 border-transparent hover:border-amber-500"
                                onclick="selectMobileLocation('Pune')">Pune</li>
                        </ul>
                    </div>
                    <!-- Search Input -->
                    <div
                        class="flex items-center bg-gray-50 border border-gray-200 rounded-lg px-3 h-12 w-full hover:border-amber-400 transition-colors shadow-sm">
                        <input type="text" placeholder="Search for businesses, services..."
                            class="bg-transparent outline-none text-sm w-full text-gray-800 placeholder-gray-500" />
                        <button
                            class="text-white bg-gradient-to-r from-amber-500 to-amber-600 h-9 px-3 rounded-md flex items-center justify-center ml-2 transition-all hover:shadow-md">
                            <span class="material-symbols-outlined text-lg">search</span>
                        </button>
                    </div>
                </div>

                <!-- Mobile Navigation Links -->
                <div class="space-y-1">
                    <!-- Services Dropdown -->
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open"
                            class="flex items-center justify-between text-gray-700 hover:text-amber-600 hover:bg-amber-50 p-3 rounded-lg transition-colors w-full">
                            <div class="flex items-center space-x-3">
                                <span class="material-symbols-outlined text-amber-500">category</span>
                                <span class="font-medium">Services</span>
                            </div>
                            <span class="material-symbols-outlined text-gray-500 transform transition-transform"
                                :class="{ 'rotate-180': open }">expand_more</span>
                        </button>

                        <div x-show="open" class="pl-12 space-y-1 mt-1">
                            <a href=""
                                class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700 rounded-lg">
                                <span class="material-symbols-outlined text-amber-500 mr-3 text-lg">business</span>
                                Business Services
                            </a>
                            <a href=""
                                class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700 rounded-lg">
                                <span class="material-symbols-outlined text-amber-500 mr-3 text-lg">groups</span>
                                Consulting
                            </a>
                            <a href=""
                                class="flex items-center px-3 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700 rounded-lg">
                                <span class="material-symbols-outlined text-amber-500 mr-3 text-lg">lightbulb</span>
                                Enterprise Solutions
                            </a>
                        </div>
                    </div>

                    <a href="{{ route('about') }}"
                        class="flex items-center space-x-3 text-gray-700 hover:text-amber-600 hover:bg-amber-50 p-3 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-amber-500">info</span>
                        <span class="font-medium">About Us</span>
                    </a>

                    <a href="{{ route('contact') }}"
                        class="flex items-center space-x-3 text-gray-700 hover:text-amber-600 hover:bg-amber-50 p-3 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-amber-500">mail</span>
                        <span class="font-medium">Contact</span>
                    </a>

                    <a href="{{ route('listing') }}"
                        class="flex items-center space-x-3 text-gray-700 hover:text-amber-600 hover:bg-amber-50 p-3 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-amber-500">add_business</span>
                        <span class="font-medium">Free Listing</span>
                        <span
                            class="bg-amber-100 text-amber-800 text-xs px-2 py-0.5 rounded font-bold ml-auto">BUSINESS</span>
                    </a>

                    <a href="{{ route('notifications') }}"
                        class="flex items-center space-x-3 text-gray-700 hover:text-amber-600 hover:bg-amber-50 p-3 rounded-lg transition-colors">
                        <span class="material-symbols-outlined text-amber-500">notifications</span>
                        <span class="font-medium">Notifications</span>
                        <span
                            class="bg-amber-500 text-white text-xs h-5 w-5 flex items-center justify-center rounded-full ml-auto">3</span>
                    </a>

                    <!-- Mobile User Menu -->
                    <div class="pt-2 border-t border-gray-200 mt-2">
                        <div x-data="{ open: false }" class="relative">
                            <button @click="open = !open"
                                class="flex items-center justify-between text-gray-700 hover:text-amber-600 hover:bg-amber-50 p-3 rounded-lg transition-colors w-full">
                                <div class="flex items-center space-x-3">
                                    <span class="material-symbols-outlined text-amber-500">person</span>
                                    <span class="font-medium">Account</span>
                                </div>
                                <span class="material-symbols-outlined text-gray-500 transform transition-transform"
                                    :class="{ 'rotate-180': open }">expand_more</span>
                            </button>

                            <div x-show="open" class="space-y-1 mt-1">
                                <a href="{{ route('login') }}"
                                    class="flex items-center px-10 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700 rounded-lg">
                                    <span class="material-symbols-outlined text-amber-500 mr-3 text-lg">login</span>
                                    Login
                                </a>
                                <a href="{{ route('signup') }}"
                                    class="flex items-center px-10 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700 rounded-lg">
                                    <span
                                        class="material-symbols-outlined text-amber-500 mr-3 text-lg">person_add</span>
                                    Sign Up
                                </a>
                                <a href="{{ route('profile') }}"
                                    class="flex items-center px-10 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700 rounded-lg">
                                    <span
                                        class="material-symbols-outlined text-amber-500 mr-3 text-lg">account_circle</span>
                                    My Profile
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Auth Buttons -->
                <div class="flex flex-col space-y-2 pt-3 border-t border-gray-200">
                    <a href="{{ route('login') }}"
                        class="bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white px-4 py-3 rounded-lg font-medium text-center transition-colors shadow-sm">
                        Login
                    </a>
                    <a href="{{ route('signup') }}"
                        class="bg-white hover:bg-gray-50 text-gray-800 border border-gray-300 px-4 py-3 rounded-lg font-medium text-center transition-colors shadow-sm">
                        Create Account
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Include Alpine.js for dropdown functionality -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<!-- Custom JS for Location Dropdowns -->
<script>
    // Desktop Dropdown
    function toggleDesktopLocationDropdown() {
        const dropdown = document.getElementById('desktopLocationDropdown');
        dropdown.classList.toggle('hidden');
    }

    function selectDesktopLocation(city) {
        document.getElementById('desktopLocationInput').value = city;
        document.getElementById('desktopLocationDropdown').classList.add('hidden');
    }

    // Mobile Dropdown
    function toggleMobileLocationDropdown() {
        const dropdown = document.getElementById('mobileLocationDropdown');
        dropdown.classList.toggle('hidden');
    }

    function selectMobileLocation(city) {
        document.getElementById('mobileLocationInput').value = city;
        document.getElementById('mobileLocationDropdown').classList.add('hidden');
    }

    // Hide dropdown if clicked outside
    document.addEventListener('click', function(e) {
        const desktopTrigger = document.getElementById('desktopLocationInput');
        const mobileTrigger = document.getElementById('mobileLocationInput');

        if (!e.target.closest('#desktopLocationDropdown') && !e.target.closest(
                '[onclick*="toggleDesktopLocationDropdown"]')) {
            document.getElementById('desktopLocationDropdown').classList.add('hidden');
        }

        if (!e.target.closest('#mobileLocationDropdown') && !e.target.closest(
                '[onclick*="toggleMobileLocationDropdown"]')) {
            document.getElementById('mobileLocationDropdown').classList.add('hidden');
        }
    });
</script>

<!-- JavaScript for Mobile Menu -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.getElementById("menuToggle");
        const mobileMenu = document.getElementById("mobileMenu");

        menuToggle.addEventListener("click", () => {
            // Toggle mobile menu
            mobileMenu.classList.toggle("hidden");

            // Toggle menu icon
            const icon = menuToggle.querySelector("span");
            if (mobileMenu.classList.contains("hidden")) {
                icon.textContent = "menu";
            } else {
                icon.textContent = "close";
            }
        });

        // Close mobile menu when clicking outside
        document.addEventListener("click", (e) => {
            if (!mobileMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                mobileMenu.classList.add("hidden");
                menuToggle.querySelector("span").textContent = "menu";
            }
        });

        // Prevent propagation for clicks inside mobile menu
        mobileMenu.addEventListener("click", (e) => {
            e.stopPropagation();
        });
    });
</script>
