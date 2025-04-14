@extends('components.main')

@section('content')
    <section class="max-w-6xl mx-auto py-16 px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-3">Sitemap</h1>
            <p class="text-lg text-gray-600">Quick access to every important page on our platform.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- Main Pages -->
            <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-xl transition-all duration-300">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Main Pages</h2>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-blue-600 hover:text-blue-800 transition">🏠 Home</a></li>
                    <li><a href="{{ route('listing') }}" class="text-blue-600 hover:text-blue-800 transition">📄 All
                            Listings</a></li>
                    <li><a href="{{ route('listingdetails') }}" class="text-blue-600 hover:text-blue-800 transition">📌
                            Listing Details</a></li>
                    <li><a href="{{ route('jewellery') }}" class="text-blue-600 hover:text-blue-800 transition">💎
                            Jewellery</a></li>
                    <li><a href="{{ route('details') }}" class="text-blue-600 hover:text-blue-800 transition">🏢 Business
                            Details</a></li>
                    <li><a href="{{ route('advertise') }}" class="text-blue-600 hover:text-blue-800 transition">📢 Advertise
                            With Us</a></li>
                    <li><a href="{{ route('notifications') }}" class="text-blue-600 hover:text-blue-800 transition">🔔
                            Notifications</a></li>
                </ul>
            </div>

            <!-- User Pages -->
            <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-xl transition-all duration-300">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">User Pages</h2>
                <ul class="space-y-3">
                    <li><a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 transition">🔑 Login</a>
                    </li>
                    <li><a href="{{ route('signup') }}" class="text-blue-600 hover:text-blue-800 transition">📝 Signup</a>
                    </li>
                    <li><a href="{{ route('profile') }}" class="text-blue-600 hover:text-blue-800 transition">👤 User
                            Profile</a></li>
                </ul>
            </div>

            <!-- Legal & Info -->
            <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-xl transition-all duration-300">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Legal & Info</h2>
                <ul class="space-y-3">
                    <li><a href="{{ route('support') }}" class="text-blue-600 hover:text-blue-800 transition">💬 Help &
                            Support</a></li>
                    <li><a href="{{ route('careers') }}" class="text-blue-600 hover:text-blue-800 transition">📁
                            Careers</a></li>
                    <li><a href="{{ route('privacy') }}" class="text-blue-600 hover:text-blue-800 transition">🔒 Privacy
                            Policy</a></li>
                    <li><a href="{{ route('terms') }}" class="text-blue-600 hover:text-blue-800 transition">📜 Terms of
                            Service</a></li>
                    <li><a href="{{ route('cookies') }}" class="text-blue-600 hover:text-blue-800 transition">🍪 Cookie
                            Policy</a></li>
                </ul>
            </div>

            <!-- Sitemap -->
            <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-xl transition-all duration-300">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Sitemap</h2>
                <ul class="space-y-3">
                    <li><a href="{{ route('sitemap') }}" class="text-blue-600 hover:text-blue-800 transition">🗺️
                            Sitemap</a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
