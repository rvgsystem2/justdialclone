 @extends('components.main')

 @section('content')
     @include('components.popup')

     <!-- Main Content -->
     <main class="px-4 py-10">

         <!-- Main Carousel/Banner Section -->
         <div class="relative overflow-hidden bg-gradient-to-r from-[#fef9f3] to-[#f9f7f2]">
             <div class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide w-full">
                 <!-- Slide -->
                 <div class="snap-start w-full flex-shrink-0">
                     <div class="flex flex-col md:flex-row p-6 gap-4 items-center">
                         <!-- Left Content -->
                         <div class="relative w-full md:w-2/5 space-y-3">
                             <!-- Dots pattern -->
                             <div class="absolute top-0 left-0 opacity-30 -z-10">
                                 <div class="grid grid-cols-6 gap-1">
                                     <template x-for="i in 36">
                                         <div class="w-1 h-1 bg-[#d3a15c] rounded-full"></div>
                                     </template>
                                 </div>
                             </div>

                             <!-- Logo -->
                             <div class="bg-[#f7d59f] rounded-full w-14 h-14 flex items-center justify-center">
                                 <span class="text-[#c88d4d] font-bold text-sm">Jewels</span>
                             </div>

                             <!-- Texts -->
                             <h2 class="text-xl font-semibold text-[#9e7a4f]">Exclusive Diamond Collection</h2>
                             <p class="text-sm text-[#8b6a43] leading-relaxed">
                                 Discover timeless elegance with our diamond jewelry, starting from
                                 <span class="text-[#d4a35c] font-bold text-base">₹49,717</span>
                             </p>
                             <p class="text-sm text-[#8b6a43]">Curated by expert jewelers</p>

                             <!-- Button -->
                             <button
                                 class="bg-[#c88d4d] hover:bg-[#a77d4b] text-white px-5 py-1.5 rounded mt-1.5 text-sm flex items-center transition">
                                 Shop Now
                                 <i class="fa fa-arrow-right ml-2 text-xs"></i>
                             </button>
                         </div>

                         <!-- Right Cards Section -->
                         <div
                             class="w-full md:w-3/5 flex gap-4 overflow-x-auto snap-x snap-mandatory scrollbar-hide pt-4 md:pt-0">
                             <!-- Category Cards -->
                             <div
                                 class="snap-start w-48 flex-shrink-0 bg-[#d5a35c] text-white rounded-lg p-3 space-y-1.5 flex flex-col">
                                 <h3 class="font-semibold text-lg">Gold Jewelry</h3>
                                 <p class="text-xs">Handcrafted Rings</p>
                                 <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Gold Jewelry"
                                     class="object-cover rounded h-40 w-full" />
                             </div>

                             <div
                                 class="snap-start w-48 flex-shrink-0 bg-[#9e7a4f] text-white rounded-lg p-3 space-y-1.5 flex flex-col">
                                 <h3 class="font-semibold text-lg">Diamond Jewelry</h3>
                                 <p class="text-xs">Engagement Rings</p>
                                 <img src="{{ asset('asset/landingimg/sample (2).jpg') }}" alt="Diamond Jewelry"
                                     class="object-cover rounded h-40 w-full" />
                             </div>

                             <div
                                 class="snap-start w-48 flex-shrink-0 bg-[#c88d4d] text-white rounded-lg p-3 space-y-1.5 flex flex-col">
                                 <h3 class="font-semibold text-lg">Pearl Collection</h3>
                                 <p class="text-xs">Necklaces & Earrings</p>
                                 <img src="{{ asset('asset/landingimg/sample (3).jpg') }}" alt="Pearl Collection"
                                     class="object-cover rounded h-40 w-full" />
                             </div>

                             <div
                                 class="snap-start w-48 flex-shrink-0 bg-[#a77d4b] text-white rounded-lg p-3 space-y-1.5 flex flex-col">
                                 <h3 class="font-semibold text-lg">Silver Collection</h3>
                                 <p class="text-xs">Exquisite Bracelets</p>
                                 <img src="{{ asset('asset/landingimg/sample (4).jpg') }}" alt="Silver Collection"
                                     class="object-cover rounded h-40 w-full" />
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Category Icons Section -->
         <div class="container mx-auto my-10 px-4">
             <!-- Responsive Heading -->
             <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold mb-6 text-gray-800 text-center sm:text-left">
                 Explore Our Exclusive Jewelry Categories
             </h2>

             <!-- Responsive Icon Grid -->
             <div class="grid grid-cols-3 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">

                 <!-- Category Card Template -->
                 <div class="flex flex-col items-center">
                     <div
                         class="w-16 h-16 rounded-full border-2 border-[#c88d4d] flex items-center justify-center mb-2 bg-[#f7d59f]">
                         <i class="fas fa-ring text-[#c88d4d] text-2xl"></i>
                     </div>
                     <span class="text-sm text-center text-[#9e7a4f]">Gold Jewelry</span>
                 </div>

                 <div class="flex flex-col items-center">
                     <div
                         class="w-16 h-16 rounded-full border-2 border-[#9e7a4f] flex items-center justify-center mb-2 bg-[#f1e0b3]">
                         <i class="fas fa-gem text-[#9e7a4f] text-2xl"></i>
                     </div>
                     <span class="text-sm text-center text-[#9e7a4f]">Diamond Jewelry</span>
                 </div>

                 <div class="flex flex-col items-center">
                     <div
                         class="w-16 h-16 rounded-full border-2 border-[#9e7a4f] flex items-center justify-center mb-2 bg-[#e0cda9]">
                         <i class="fas fa-ring text-[#9e7a4f] text-2xl"></i>
                     </div>
                     <span class="text-sm text-center text-[#9e7a4f]">Silver Jewelry</span>
                 </div>

                 <div class="flex flex-col items-center">
                     <div
                         class="w-16 h-16 rounded-full border-2 border-[#d5a35c] flex items-center justify-center mb-2 bg-[#f7d59f]">
                         <i class="fas fa-heart text-[#d5a35c] text-2xl"></i>
                     </div>
                     <span class="text-sm text-center text-[#9e7a4f]">Bridal Jewelry</span>
                 </div>

                 <!-- Add more jewelry categories if necessary -->
                 <!-- Example for another category -->
                 <div class="flex flex-col items-center">
                     <div
                         class="w-16 h-16 rounded-full border-2 border-[#c88d4d] flex items-center justify-center mb-2 bg-[#f1e0b3]">
                         <i class="fas fa-crown text-[#c88d4d] text-2xl"></i>
                     </div>
                     <span class="text-sm text-center text-[#9e7a4f]">Vintage Jewelry</span>
                 </div>

             </div>
         </div>

         <!-- Jewelry Product Website Templates Slider -->
         <section class="w-full px-4 sm:px-6 lg:px-12 py-12 bg-[#fefaf5]">
             <div class="bg-white border border-[#f3e8da] rounded-2xl shadow-lg p-6">
                 <!-- Heading -->
                 <div class="mb-6 text-center">
                     <h2 class="text-2xl font-semibold text-[#4b3621]">Jewelry Product Templates</h2>
                     <p class="text-sm text-gray-500 mt-1">Select from elegant layouts to showcase your jewelry collection
                     </p>
                 </div>

                 <!-- Scrollable Templates Slider -->
                 <div class="flex gap-4 overflow-x-auto scrollbar-hide scroll-smooth snap-x snap-mandatory pb-4">

                     <!-- Template 1 -->
                     <a href="{{ route('page.landing') }}" target="_blank"
                         class="min-w-[230px] sm:min-w-[250px] bg-amber-50 rounded-xl shadow hover:shadow-md transition transform group hover:scale-105 p-6 flex flex-col items-center text-center snap-start">
                         <span
                             class="material-symbols-outlined text-5xl text-amber-700 mb-3 group-hover:rotate-6 transition">
                             collections
                         </span>
                         <h3 class="text-lg font-semibold text-amber-800">Template-1</h3>
                     </a>

                     <!-- Template 2 -->
                     <a href="{{ route('page.landing2') }}" target="_blank"
                         class="min-w-[230px] sm:min-w-[250px] bg-amber-50 rounded-xl shadow hover:shadow-md transition transform group hover:scale-105 p-6 flex flex-col items-center text-center snap-start">
                         <span
                             class="material-symbols-outlined text-5xl text-amber-700 mb-3 group-hover:rotate-6 transition">
                             collections
                         </span>
                         <h3 class="text-lg font-semibold text-amber-800">Template-2</h3>
                     </a>

                     <!-- Template 3 -->
                     <a href="{{ route('page.landing3') }}" target="_blank"
                         class="min-w-[230px] sm:min-w-[250px] bg-amber-50 rounded-xl shadow hover:shadow-md transition transform group hover:scale-105 p-6 flex flex-col items-center text-center snap-start">
                         <span
                             class="material-symbols-outlined text-5xl text-amber-700 mb-3 group-hover:rotate-6 transition">
                             collections
                         </span>
                         <h3 class="text-lg font-semibold text-amber-800">Template-3</h3>
                     </a>

                     <!-- Template 4 -->
                     <a href="{{ route('page.landing4') }}" target="_blank"
                         class="min-w-[230px] sm:min-w-[250px] bg-amber-50 rounded-xl shadow hover:shadow-md transition transform group hover:scale-105 p-6 flex flex-col items-center text-center snap-start">
                         <span
                             class="material-symbols-outlined text-5xl text-amber-700 mb-3 group-hover:rotate-6 transition">
                             collections
                         </span>
                         <h3 class="text-lg font-semibold text-amber-800">Template-4</h3>
                     </a>

                     <!-- Template 5 -->
                     <a href="{{ route('page.landing5') }}" target="_blank"
                         class="min-w-[230px] sm:min-w-[250px] bg-amber-50 rounded-xl shadow hover:shadow-md transition transform group hover:scale-105 p-6 flex flex-col items-center text-center snap-start">
                         <span
                             class="material-symbols-outlined text-5xl text-amber-700 mb-3 group-hover:rotate-6 transition">
                             collections
                         </span>
                         <h3 class="text-lg font-semibold text-amber-800">Template-5</h3>
                     </a>

                     <!-- Template 6 -->
                     <a href="{{ route('page.landing6') }}" target="_blank"
                         class="min-w-[230px] sm:min-w-[250px] bg-amber-50 rounded-xl shadow hover:shadow-md transition transform group hover:scale-105 p-6 flex flex-col items-center text-center snap-start">
                         <span
                             class="material-symbols-outlined text-5xl text-amber-700 mb-3 group-hover:rotate-6 transition">
                             collections
                         </span>
                         <h3 class="text-lg font-semibold text-amber-800">Template-6</h3>
                     </a>

                 </div>
             </div>
         </section>

         <!-- Search Section for Jewellers -->
         <section class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-white py-10 sm:py-14">
             <div class="container mx-auto px-4">
                 <div class="text-center">
                     <!-- Heading -->
                     <h1 class="text-2xl sm:text-4xl font-bold leading-tight mb-3">
                         Discover Top Jewellery Showrooms Near You
                     </h1>
                     <!-- Subtext -->
                     <p class="text-base sm:text-lg mb-6 sm:mb-8">
                         Explore trusted jewellers, compare designs, and read verified customer reviews
                     </p>

                     <!-- Search Form -->
                     <div
                         class="bg-white rounded-xl px-3 py-2 sm:px-4 sm:py-3 shadow-lg flex flex-col sm:flex-row gap-2 sm:gap-4 items-stretch sm:items-center">

                         <!-- City Dropdown -->
                         <select
                             class="w-full sm:w-1/3 px-4 py-2 rounded-full border border-gray-300 text-gray-700 focus:outline-none">
                             <option>Select City</option>
                             <option>Mumbai</option>
                             <option>Delhi</option>
                             <option>Bangalore</option>
                             <option>Chennai</option>
                             <option>Hyderabad</option>
                         </select>

                         <!-- Text Input for Jeweller Name or Type -->
                         <input type="text" placeholder="Enter jeweller's name or service..."
                             class="w-full sm:flex-1 px-4 py-2 rounded-full border border-gray-300 text-gray-700 focus:outline-none">

                         <!-- Search Button -->
                         <a href="{{ route('jewellery') }}"
                             class="w-full sm:w-auto bg-yellow-500 hover:bg-yellow-600 text-white font-medium px-6 py-2 rounded-full transition inline-block text-center">
                             Search
                         </a>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Popular Search -->
         <section class="w-full px-4 sm:px-6 lg:px-12 py-14 bg-[#f8f7f4]">
             <!-- Section Heading -->
             <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 mb-10 text-center">
                 Popular Search
             </h2>

             <!-- Scrollable Cards -->
             <div class="relative">
                 <div class="flex gap-6 overflow-x-auto pb-4 scrollbar-hide snap-x snap-mandatory scroll-smooth">

                     <!-- Jeweller Card 1 -->
                     <div
                         class="min-w-[250px] sm:min-w-[270px] bg-white rounded-3xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-200 snap-start">
                         <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Jeweller"
                             class="w-full h-[170px] object-cover" />
                         <div class="bg-[#fff7ec] text-gray-800 text-center px-5 py-6">
                             <p class="text-lg font-semibold leading-snug mb-3">Tanishq Jewellery</p>
                             <button
                                 class="bg-gradient-to-r from-[#c9a063] to-[#a88542] text-white font-semibold px-6 py-2 text-sm rounded-full hover:brightness-110 transition shadow-md">
                                 Enquire Now
                             </button>
                         </div>
                     </div>

                     <!-- Jeweller Card 2 -->
                     <div
                         class="min-w-[250px] sm:min-w-[270px] bg-white rounded-3xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-200 snap-start">
                         <img src="{{ asset('asset/landingimg/sample (2).jpg') }}" alt="Jeweller"
                             class="w-full h-[170px] object-cover" />
                         <div class="bg-[#fff7ec] text-gray-800 text-center px-5 py-6">
                             <p class="text-lg font-semibold leading-snug mb-3">Kalyan Jewellers</p>
                             <button
                                 class="bg-gradient-to-r from-[#c9a063] to-[#a88542] text-white font-semibold px-6 py-2 text-sm rounded-full hover:brightness-110 transition shadow-md">
                                 Enquire Now
                             </button>
                         </div>
                     </div>

                     <!-- Jeweller Card 3 -->
                     <div
                         class="min-w-[250px] sm:min-w-[270px] bg-white rounded-3xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-200 snap-start">
                         <img src="{{ asset('asset/landingimg/sample (3).jpg') }}" alt="Jeweller"
                             class="w-full h-[170px] object-cover" />
                         <div class="bg-[#fff7ec] text-gray-800 text-center px-5 py-6">
                             <p class="text-lg font-semibold leading-snug mb-3">Malabar Gold & Diamonds</p>
                             <button
                                 class="bg-gradient-to-r from-[#c9a063] to-[#a88542] text-white font-semibold px-6 py-2 text-sm rounded-full hover:brightness-110 transition shadow-md">
                                 Enquire Now
                             </button>
                         </div>
                     </div>

                     <!-- Jeweller Card 4 -->
                     <div
                         class="min-w-[250px] sm:min-w-[270px] bg-white rounded-3xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-200 snap-start">
                         <img src="{{ asset('asset/landingimg/sample (4).jpg') }}" alt="Jeweller"
                             class="w-full h-[170px] object-cover" />
                         <div class="bg-[#fff7ec] text-gray-800 text-center px-5 py-6">
                             <p class="text-lg font-semibold leading-snug mb-3">PNG Jewellers</p>
                             <button
                                 class="bg-gradient-to-r from-[#c9a063] to-[#a88542] text-white font-semibold px-6 py-2 text-sm rounded-full hover:brightness-110 transition shadow-md">
                                 Enquire Now
                             </button>
                         </div>
                     </div>

                     <!-- Jeweller Card 5 -->
                     <div
                         class="min-w-[250px] sm:min-w-[270px] bg-white rounded-3xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-200 snap-start">
                         <img src="{{ asset('asset/landingimg/sample (5).jpg') }}" alt="Jeweller"
                             class="w-full h-[170px] object-cover" />
                         <div class="bg-[#fff7ec] text-gray-800 text-center px-5 py-6">
                             <p class="text-lg font-semibold leading-snug mb-3">Tribhovandas Bhimji Zaveri</p>
                             <button
                                 class="bg-gradient-to-r from-[#c9a063] to-[#a88542] text-white font-semibold px-6 py-2 text-sm rounded-full hover:brightness-110 transition shadow-md">
                                 Enquire Now
                             </button>
                         </div>
                     </div>

                 </div>
             </div>
         </section>

         <!-- Related Articles - Jewellers -->
         <section class="w-full px-4 sm:px-6 lg:px-12 py-14 bg-[#fefcf8]">
             <div class="flex justify-between items-center mb-6">
                 <h2 class="text-2xl font-bold text-[#3e2d18]">Related Articles</h2>
                 <a href="#" class="text-[#b28c52] font-medium text-sm hover:underline">Explore more &rarr;</a>
             </div>

             <div class="relative">
                 <!-- Scrollable Cards -->
                 <div class="flex space-x-6 overflow-x-auto snap-x snap-mandatory scrollbar-hide scroll-smooth pb-3">

                     <!-- Article Card 1 -->
                     <div
                         class="min-w-[280px] max-w-sm bg-white rounded-2xl shadow-lg border border-[#f1e9dc] snap-start overflow-hidden">
                         <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Jewellery Trends"
                             class="w-full h-[180px] object-cover" />
                         <div class="p-4">
                             <h3 class="text-sm font-semibold text-[#3e2d18] mb-2 leading-snug">
                                 Top Jewellery Trends of the Year Every Bride Must Know
                             </h3>
                             <a href="#" class="text-[#b28c52] text-sm font-medium hover:underline">Explore</a>
                         </div>
                     </div>

                     <!-- Article Card 2 -->
                     <div
                         class="min-w-[280px] max-w-sm bg-white rounded-2xl shadow-lg border border-[#f1e9dc] snap-start overflow-hidden">
                         <img src="{{ asset('asset/landingimg/sample (2).jpg') }}" alt="Gold Care"
                             class="w-full h-[180px] object-cover" />
                         <div class="p-4">
                             <h3 class="text-sm font-semibold text-[#3e2d18] mb-2 leading-snug">
                                 How to Take Care of Your Gold Jewellery: Expert Tips
                             </h3>
                             <a href="#" class="text-[#b28c52] text-sm font-medium hover:underline">Explore</a>
                         </div>
                     </div>

                     <!-- Article Card 3 -->
                     <div
                         class="min-w-[280px] max-w-sm bg-white rounded-2xl shadow-lg border border-[#f1e9dc] snap-start overflow-hidden">
                         <img src="{{ asset('asset/landingimg/sample (3).jpg') }}" alt="Diamond Guide"
                             class="w-full h-[180px] object-cover" />
                         <div class="p-4">
                             <h3 class="text-sm font-semibold text-[#3e2d18] mb-2 leading-snug">
                                 A Complete Guide to Choosing the Perfect Diamond Ring
                             </h3>
                             <a href="#" class="text-[#b28c52] text-sm font-medium hover:underline">Explore</a>
                         </div>
                     </div>

                     <!-- Article Card 4 -->
                     <div
                         class="min-w-[280px] max-w-sm bg-white rounded-2xl shadow-lg border border-[#f1e9dc] snap-start overflow-hidden">
                         <img src="{{ asset('asset/landingimg/sample (4).jpg') }}" alt="Custom Design"
                             class="w-full h-[180px] object-cover" />
                         <div class="p-4">
                             <h3 class="text-sm font-semibold text-[#3e2d18] mb-2 leading-snug">
                                 The Art of Custom Jewellery Design: Why It’s Worth It
                             </h3>
                             <a href="#" class="text-[#b28c52] text-sm font-medium hover:underline">Explore</a>
                         </div>
                     </div>

                 </div>
             </div>
         </section>

         <!-- Jewellery Essentials Collection -->
         <section class="w-full px-4 sm:px-6 lg:px-12 py-12 bg-[#fffdf9]">
             <div class="bg-white border border-[#f3e8da] rounded-2xl shadow p-6">

                 <!-- Header -->
                 <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-6 space-y-2 sm:space-y-0">
                     <div class="flex items-center space-x-3">
                         <h2 class="text-2xl font-semibold text-[#4b3621]">Jewellery Essentials Collection</h2>
                         <span class="text-xs font-semibold bg-yellow-500 text-white px-2 py-1 rounded-md">SEASONAL</span>
                     </div>
                     <p class="text-sm text-gray-500">Explore our exclusive seasonal jewellery range</p>
                 </div>

                 <!-- Responsive Grid -->
                 <div class="grid gap-5 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

                     <!-- Jewellery Card -->
                     <div class="bg-white border rounded-xl shadow hover:shadow-md transition-all duration-300">
                         <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Diamond Ring"
                             class="w-full h-32 object-cover rounded-t-xl">
                         <div class="p-4 space-y-1">
                             <span class="text-xs text-gray-400 uppercase">Rings</span>
                             <h3 class="font-semibold text-[#4b3621] text-base">Diamond Solitaire Ring</h3>
                             <a href="#" class="text-yellow-600 text-sm font-medium hover:underline">Explore
                                 &rarr;</a>
                         </div>
                     </div>

                     <!-- Jewellery Card -->
                     <div class="bg-white border rounded-xl shadow hover:shadow-md transition-all duration-300">
                         <img src="{{ asset('asset/landingimg/sample (2).jpg') }}" alt="Gold Necklace"
                             class="w-full h-32 object-cover rounded-t-xl">
                         <div class="p-4 space-y-1">
                             <span class="text-xs text-gray-400 uppercase">Necklaces</span>
                             <h3 class="font-semibold text-[#4b3621] text-base">Gold Plated Necklace</h3>
                             <a href="#" class="text-yellow-600 text-sm font-medium hover:underline">Explore
                                 &rarr;</a>
                         </div>
                     </div>

                     <!-- Jewellery Card -->
                     <div class="bg-white border rounded-xl shadow hover:shadow-md transition-all duration-300">
                         <img src="{{ asset('asset/landingimg/sample (4).jpg') }}" alt="Emerald Earrings"
                             class="w-full h-32 object-cover rounded-t-xl">
                         <div class="p-4 space-y-1">
                             <span class="text-xs text-gray-400 uppercase">Earrings</span>
                             <h3 class="font-semibold text-[#4b3621] text-base">Emerald Drop Earrings</h3>
                             <a href="#" class="text-yellow-600 text-sm font-medium hover:underline">Explore
                                 &rarr;</a>
                         </div>
                     </div>

                     <!-- Jewellery Card -->
                     <div class="bg-white border rounded-xl shadow hover:shadow-md transition-all duration-300">
                         <img src="{{ asset('asset/landingimg/sample (3).jpg') }}" alt="Silver Bracelet"
                             class="w-full h-32 object-cover rounded-t-xl">
                         <div class="p-4 space-y-1">
                             <span class="text-xs text-gray-400 uppercase">Bracelets</span>
                             <h3 class="font-semibold text-[#4b3621] text-base">Silver Chain Bracelet</h3>
                             <a href="#" class="text-yellow-600 text-sm font-medium hover:underline">Explore
                                 &rarr;</a>
                         </div>
                     </div>

                 </div>
             </div>
         </section>

         <!-- Latest Jewellery & Ratings -->
         <section class="w-full px-4 sm:px-6 lg:px-12 py-12 bg-[#fffdf9]">
             <div class="bg-white border border-[#f3e8da] rounded-2xl shadow p-6">

                 <!-- Heading -->
                 <div class="mb-6">
                     <h2 class="text-2xl font-semibold text-[#4b3621]">Latest Jewellery Pieces & Customer Ratings</h2>
                 </div>

                 <!-- Grid Layout -->
                 <div class="grid gap-6 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">

                     <!-- Jewellery Card -->
                     @php
                         $items = [
                             ['title' => 'Rose Gold Diamond Ring', 'rating' => '96%'],
                             ['title' => 'Kundan Bridal Necklace', 'rating' => '89%'],
                             ['title' => 'Emerald Drop Earrings', 'rating' => '91%'],
                             ['title' => 'Platinum Chain Bracelet', 'rating' => '88%'],
                             ['title' => 'Traditional Mangalsutra', 'rating' => '94%'],
                             ['title' => 'Minimalist Diamond Pendant', 'rating' => '99%'],
                         ];
                     @endphp

                     @foreach ($items as $index => $item)
                         <div
                             class="relative bg-white rounded-xl overflow-hidden shadow hover:shadow-md transition-all duration-300">
                             <img src="{{ asset('asset/landingimg/sample (' . ($index + 1) . ').jpg') }}"
                                 alt="{{ $item['title'] }}" class="w-full h-48 object-cover">
                             <div
                                 class="absolute top-2 right-2 bg-white text-yellow-600 text-xs px-2 py-1 rounded-full shadow">
                                 <i class="fa fa-star mr-1"></i> {{ $item['rating'] }}
                             </div>
                             <div class="p-3">
                                 <h3 class="font-semibold text-sm text-[#4b3621] leading-snug">{{ $item['title'] }}</h3>
                                 <p class="text-xs text-gray-500 mb-2">Jewellery Collection</p>
                                 <button
                                     class="w-full bg-yellow-100 text-yellow-700 text-sm font-medium py-1 rounded hover:bg-yellow-200 transition">View
                                     Details</button>
                             </div>
                         </div>
                     @endforeach

                 </div>
             </div>
         </section>

         <!-- Top Rated Jeweller Services -->
         <section class="container mx-auto px-4 py-12 bg-[#fefcf8]">
             <div class="flex justify-between items-center mb-6">
                 <h2 class="text-2xl font-bold text-[#3e2d18]">Top Rated Jewellers</h2>
                 <a href="#" class="text-[#b28c52] hover:text-[#a97c38] font-medium text-sm">View All</a>
             </div>

             <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                 <!-- Jeweller Card 1 -->
                 <div
                     class="bg-white shadow-lg border border-[#f1e9dc] rounded-2xl overflow-hidden hover:shadow-xl transition">
                     <img src="{{ asset('asset/landingimg/sample (1).jpg') }}" alt="Jeweller"
                         class="w-full h-48 object-cover">
                     <div class="p-5">
                         <div class="flex justify-between items-start mb-2">
                             <h3 class="font-semibold text-lg text-[#3e2d18]">Rajasthan Gold Palace</h3>
                             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded">4.9 ★</span>
                         </div>
                         <p class="text-[#6b4e2d] text-sm mb-2">Gold, Bridal, Antique Jewellery</p>
                         <p class="text-[#9b8c78] text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i> Zaveri Bazaar,
                             Mumbai</p>
                         <div class="flex justify-between">
                             <span class="text-sm text-[#9b8c78]"><i class="far fa-clock mr-1"></i> Open Now</span>
                             <button class="text-[#b28c52] hover:text-[#a97c38]"><i class="fas fa-phone-alt mr-1"></i>
                                 Call
                                 Now</button>
                         </div>
                     </div>
                 </div>

                 <!-- Jeweller Card 2 -->
                 <div
                     class="bg-white shadow-lg border border-[#f1e9dc] rounded-2xl overflow-hidden hover:shadow-xl transition">
                     <img src="{{ asset('asset/landingimg/sample (2).jpg') }}" alt="Jeweller"
                         class="w-full h-48 object-cover">
                     <div class="p-5">
                         <div class="flex justify-between items-start mb-2">
                             <h3 class="font-semibold text-lg text-[#3e2d18]">Kalyan Jewellers</h3>
                             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded">4.8 ★</span>
                         </div>
                         <p class="text-[#6b4e2d] text-sm mb-2">Diamond, Platinum, Daily Wear</p>
                         <p class="text-[#9b8c78] text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i> MG Road,
                             Bangalore</p>
                         <div class="flex justify-between">
                             <span class="text-sm text-[#9b8c78]"><i class="far fa-clock mr-1"></i> Open Now</span>
                             <button class="text-[#b28c52] hover:text-[#a97c38]"><i class="fas fa-phone-alt mr-1"></i>
                                 Call
                                 Now</button>
                         </div>
                     </div>
                 </div>

                 <!-- Jeweller Card 3 -->
                 <div
                     class="bg-white shadow-lg border border-[#f1e9dc] rounded-2xl overflow-hidden hover:shadow-xl transition">
                     <img src="{{ asset('asset/landingimg/sample (3).jpg') }}" alt="Jeweller"
                         class="w-full h-48 object-cover">
                     <div class="p-5">
                         <div class="flex justify-between items-start mb-2">
                             <h3 class="font-semibold text-lg text-[#3e2d18]">Mehta Diamond Gallery</h3>
                             <span class="bg-green-100 text-green-800 text-xs font-semibold px-2 py-1 rounded">5.0 ★</span>
                         </div>
                         <p class="text-[#6b4e2d] text-sm mb-2">Custom Diamond Rings & Earrings</p>
                         <p class="text-[#9b8c78] text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i> Charni Road,
                             Mumbai</p>
                         <div class="flex justify-between">
                             <span class="text-sm text-[#9b8c78]"><i class="far fa-clock mr-1"></i> Closes at 8PM</span>
                             <button class="text-[#b28c52] hover:text-[#a97c38]"><i class="fas fa-phone-alt mr-1"></i>
                                 Call
                                 Now</button>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

         <!-- Popular Jewellery Locations -->
         <section class="container mx-auto px-4 py-12 bg-[#fefcf8]">
             <h2 class="text-2xl font-bold mb-6 text-[#3e2d18]">Popular Jewellery Hubs</h2>
             <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                 @foreach (['Zaveri Bazaar', 'T Nagar', 'Karol Bagh', 'MG Road', 'Charni Road', 'Banjara Hills', 'Park Street', 'C G Road', 'Brigade Road', 'Abids', 'Gariahat', 'Commercial Street'] as $location)
                     <div
                         class="bg-white border border-[#f1e9dc] shadow-sm rounded-xl p-5 text-center hover:bg-[#fffaf2] transition-all">
                         <h3 class="font-medium text-[#6b4e2d] tracking-wide">{{ $location }}</h3>
                     </div>
                 @endforeach
             </div>
         </section>

         <!-- Testimonials -->
         <section class="container mx-auto px-4 py-10">
             <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Our Customers Love Our Jewelry</h2>
             <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                 <div class="bg-white shadow-md rounded-lg p-6 border-b-2 border-amber-500">
                     <div class="flex items-center mb-4">
                         <img src="/api/placeholder/60/60" alt="User" class="w-12 h-12 rounded-full">
                         <div class="ml-4">
                             <h4 class="font-semibold">Priyanka Sharma</h4>
                             <div class="text-amber-500">★★★★★</div>
                         </div>
                     </div>
                     <p class="text-gray-600">"The diamond necklace I purchased from RVG Jewelry exceeded my expectations.
                         The craftsmanship is exquisite and their customer service was outstanding. Will definitely shop
                         here
                         again!"</p>
                 </div>
                 <div class="bg-white shadow-md rounded-lg p-6 border-b-2 border-amber-500">
                     <div class="flex items-center mb-4">
                         <img src="/api/placeholder/60/60" alt="User" class="w-12 h-12 rounded-full">
                         <div class="ml-4">
                             <h4 class="font-semibold">Vikram Patel</h4>
                             <div class="text-amber-500">★★★★★</div>
                         </div>
                     </div>
                     <p class="text-gray-600">"I found the perfect engagement ring through RVG Jewelry's curated
                         collection.
                         The quality of the gold and gemstones is premium, and my fiancée absolutely loves it!"</p>
                 </div>
                 <div class="bg-white shadow-md rounded-lg p-6 border-b-2 border-amber-500">
                     <div class="flex items-center mb-4">
                         <img src="/api/placeholder/60/60" alt="User" class="w-12 h-12 rounded-full">
                         <div class="ml-4">
                             <h4 class="font-semibold">Meera Agarwal</h4>
                             <div class="text-amber-500">★★★★☆</div>
                         </div>
                     </div>
                     <p class="text-gray-600">"RVG Jewelry's custom design service helped me create a unique piece for my
                         mother's 60th birthday. The artisans translated my vision perfectly and delivered ahead of
                         schedule."</p>
                 </div>
             </div>
         </section>

     </main>
 @endsection
