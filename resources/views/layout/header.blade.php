<!-- Header -->
{{-- <header class="fixed w-full bg-white shadow-md z-50">
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <h1 class="text-2xl md:text-3xl font-serif font-bold text-amber-800">
                    ELEGANCE<span class="text-amber-600">JEWELS</span>
                </h1>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden md:block">
                <ul class="flex space-x-8">
                    <li><a href="#" class="text-gray-800 hover:text-amber-600 transition duration-300">Home</a></li>
                    <li><a href="#"
                            class="text-gray-800 hover:text-amber-600 transition duration-300">Collections</a></li>
                    <li><a href="#" class="text-gray-800 hover:text-amber-600 transition duration-300">About</a>
                    </li>
                    <li><a href="#" class="text-gray-800 hover:text-amber-600 transition duration-300">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button class="text-gray-800">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Header Social Icons -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="text-gray-800 hover:text-amber-600 transition duration-300"
                    aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-gray-800 hover:text-amber-600 transition duration-300"
                    aria-label="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="#" class="text-gray-800 hover:text-amber-600 transition duration-300"
                    aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-gray-800 hover:text-amber-600 transition duration-300"
                    aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>

        </div>
    </div>
</header> --}}

<!-- Top Jeweller Profile Banner -->
<section class="relative bg-gradient-to-r from-gray-800 to-gray-700 py-16 shadow-lg overflow-hidden">
    <!-- Background Large Text -->
    <h2
        class="absolute text-gray-400 font-extrabold text-9xl opacity-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none select-none whitespace-nowrap z-0">
        ELEGANCE
    </h2>

    <div class="relative z-10 container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
            <!-- Logo and Info -->
            <div class="flex items-center gap-6">
                <div class="relative">
                    <img src="{{ asset('asset/images/bussines.jpg') }}" alt="Elegance Jewellers"
                        class="w-24 h-24 rounded-full border-4 border-yellow-300 shadow-xl object-cover transition-transform transform hover:scale-105">
                </div>
                <div>
                    <h1 class="text-white font-serif text-3xl font-semibold leading-tight">Elegance Jewellers</h1>
                    <p class="text-gray-300 text-base italic md:text-lg">Crafting Luxury Since 1985</p>
                </div>
            </div>

            <!-- CTA Button with Google Icons -->
            <div>
                <a href="https://wa.me/919876543210" 
                   target="_blank"
                   class="bg-yellow-200 hover:bg-yellow-100 text-yellow-900 font-medium text-base px-6 py-3 rounded-full shadow-lg flex items-center space-x-3 transition duration-300 ease-in-out transform hover:scale-105">
                    <span class="material-icons">calendar_today</span>
                    <span>Book Appointment</span>
                </a>
            </div>            
        </div>
    </div>
</section>

<!-- Include Google Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
