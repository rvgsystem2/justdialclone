@extends('components.main')

@section('content')
<section class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
    <!-- Hero Section -->
    <div class="text-center mb-20">
        <h1 class="text-5xl font-bold text-gray-900 mb-4 leading-tight">About Us</h1>
        <h2 class="text-5xl font-bold text-amber-600 mb-6 leading-tight">Crafting Elegance, <br> Connecting Hearts</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">At <span class="font-semibold text-gray-900">Real Victory Groups</span>, we believe every jewel tells a story. We empower local jewelry showrooms with digital excellence while helping customers discover timeless elegance with ease.</p>
        <div class="mt-10 flex justify-center space-x-4">
            <a href="{{ route('signup') }}"
                class="bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition-all flex items-center shadow-md hover:shadow-lg">
                <span class="material-icons mr-2">person_add</span>
                Join Our Platform
            </a>
            <a href="{{ route('contact') }}"
                class="border border-amber-600 text-amber-600 px-6 py-3 rounded-lg hover:bg-amber-50 transition-all flex items-center">
                <span class="material-icons mr-2">chat</span>
                Get In Touch
            </a>
        </div>
    </div>

    <!-- About Content -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-24">
        <!-- Company Story -->
        <div class="relative">
            <div class="absolute -left-8 -top-8 w-24 h-24 bg-amber-100 rounded-full opacity-30"></div>
            <div class="relative bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                    <span class="material-icons text-amber-600 mr-3 text-4xl">history_edu</span>
                    Our Journey
                </h2>
                <p class="text-lg text-gray-700 mb-6">Born from a passion to blend heritage with innovation, <span class="font-medium">Real Victory Groups</span> began as a vision to digitally empower jewelry businesses across India.</p>
                <p class="text-lg text-gray-700 mb-8">We help local jewelers shine online — turning neighborhood names into trusted digital brands. From solitaire to silver, every business gets its spotlight.</p>

                <ul class="space-y-6">
                    <li class="flex items-start">
                        <div class="bg-amber-100 p-2 rounded-lg mr-4">
                            <span class="material-icons text-amber-600">groups</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-900 mb-1">Expert Team</h4>
                            <p class="text-gray-600">Jewelry-focused experts with a commitment to excellence and transformation</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-green-100 p-2 rounded-lg mr-4">
                            <span class="material-icons text-green-600">location_city</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-900 mb-1">Pan-India Reach</h4>
                            <p class="text-gray-600">Based in Mumbai, we serve jewelers from every corner of the country</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div class="bg-purple-100 p-2 rounded-lg mr-4">
                            <span class="material-icons text-purple-600">rocket_launch</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-900 mb-1">Trusted Growth</h4>
                            <p class="text-gray-600">Over 50,000 jewelry showrooms empowered and growing online visibility</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Mission & Vision -->
        <div class="space-y-12">
            <div class="bg-gradient-to-br from-amber-50 to-rose-50 p-8 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-start mb-6">
                    <span class="material-icons text-amber-600 text-4xl mr-4">flag</span>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Our Mission</h2>
                    </div>
                </div>
                <p class="text-lg text-gray-700 mb-6">To illuminate every jewelry business with digital brilliance, ensuring they shine in a competitive online market while making it seamless for customers to discover them.</p>
                <div class="bg-white p-4 rounded-lg border border-gray-200">
                    <p class="text-gray-800 font-medium italic">"Bridging tradition with technology — one jewel at a time."</p>
                </div>
            </div>

            <div class="bg-gradient-to-br from-pink-50 to-purple-50 p-8 rounded-xl shadow-sm border border-gray-100">
                <div class="flex items-start mb-6">
                    <span class="material-icons text-purple-600 text-4xl mr-4">visibility</span>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900">Our Vision</h2>
                    </div>
                </div>
                <p class="text-lg text-gray-700">To be the go-to platform where every jewelry showroom — big or small — can sparkle online and connect with loyal customers effortlessly.</p>
            </div>
        </div>
    </div>

    <!-- Core Values -->
    <div class="mb-24">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Core Values</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Timeless values behind every timeless piece</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all border text-center">
                <div class="bg-amber-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="material-icons text-amber-600 text-3xl">diamond</span>
                </div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-3">Authenticity</h3>
                <p class="text-gray-600">Our commitment to genuine relationships and real transformation reflects the brilliance of pure gems.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all border text-center">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="material-icons text-green-600 text-3xl">auto_awesome</span>
                </div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-3">Innovation</h3>
                <p class="text-gray-600">We blend tradition with modern tools to redefine how jewelers connect and grow.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all border text-center">
                <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="material-icons text-purple-600 text-3xl">diversity_3</span>
                </div>
                <h3 class="text-2xl font-semibold text-gray-900 mb-3">Trust</h3>
                <p class="text-gray-600">We create a transparent ecosystem where jewelers and customers build lasting bonds.</p>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="mb-24">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Meet Our Gems</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">The passionate visionaries behind our brilliance</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border text-center">
                <div class="h-48 bg-gradient-to-r from-blue-100 to-blue-200 flex items-center justify-center">
                    <span class="material-icons text-blue-400 text-6xl">person</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Aarav Kapoor</h3>
                    <p class="text-amber-600 font-medium mb-4">Founder & CEO</p>
                    <p class="text-gray-600 text-sm">Visionary in digital jewelry transformation</p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border text-center">
                <div class="h-48 bg-gradient-to-r from-green-100 to-green-200 flex items-center justify-center">
                    <span class="material-icons text-green-400 text-6xl">person</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Meera Jain</h3>
                    <p class="text-amber-600 font-medium mb-4">Chief Technology Officer</p>
                    <p class="text-gray-600 text-sm">Bringing high-tech to high karat</p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border text-center">
                <div class="h-48 bg-gradient-to-r from-purple-100 to-purple-200 flex items-center justify-center">
                    <span class="material-icons text-purple-400 text-6xl">person</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Rohit Sharma</h3>
                    <p class="text-amber-600 font-medium mb-4">Head of Design</p>
                    <p class="text-gray-600 text-sm">Luxury UI with timeless aesthetics</p>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border text-center">
                <div class="h-48 bg-gradient-to-r from-amber-100 to-amber-200 flex items-center justify-center">
                    <span class="material-icons text-amber-400 text-6xl">person</span>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-1">Priya Desai</h3>
                    <p class="text-amber-600 font-medium mb-4">Marketing Director</p>
                    <p class="text-gray-600 text-sm">Crafting stories that sparkle</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-amber-600 to-yellow-600 rounded-2xl p-12 text-center text-white shadow-xl">
        <h2 class="text-3xl font-bold mb-4">Let Your Business Shine</h2>
        <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">Join thousands of jewelry showrooms and elevate your digital presence with <span class="font-semibold">Real Victory Groups</span>.</p>
        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
            <a href="{{ route('signup') }}"
                class="bg-white text-amber-700 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all flex items-center justify-center">
                <span class="material-icons mr-2">storefront</span>
                Get Listed
            </a>
            <a href="{{ route('contact') }}"
                class="border-2 border-white text-white hover:text-amber-600 px-8 py-4 rounded-lg font-semibold hover:bg-white hover:bg-opacity-10 transition-all flex items-center justify-center">
                <span class="material-icons mr-2">forum</span>
                Talk to Our Team
            </a>
        </div>
    </div>
</section>
@endsection
