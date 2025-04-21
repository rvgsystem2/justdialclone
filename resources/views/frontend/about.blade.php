@extends('components.main')

@section('content')
    <section class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="text-center mb-20">
            <h1 class="text-5xl font-bold text-gray-900 mb-6 leading-tight">About Us</h1>
            <h2 class="text-5xl font-bold text-gray-900 mb-6 leading-tight">Connecting Businesses <br> & Communities</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">At [Company Name], we're revolutionizing how local businesses
                thrive in the digital world while helping customers discover the best services around them.</p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="{{ route('signup') }}"
                    class="bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition-all flex items-center shadow-md hover:shadow-lg">
                    <span class="material-icons mr-2">person_add</span>
                    Join Our Community
                </a>
                <a href="{{ route('contact') }}"
                    class="border border-amber-600 text-amber-600 px-6 py-3 rounded-lg hover:bg-blue-50 transition-all flex items-center">
                    <span class="material-icons mr-2">chat</span>
                    Contact Us
                </a>
            </div>
        </div>

        <!-- About Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-24">
            <!-- Company Story -->
            <div class="relative">
                <div class="absolute -left-8 -top-8 w-24 h-24 bg-blue-100 rounded-full opacity-30"></div>
                <div class="relative bg-white p-8 rounded-xl shadow-sm border border-gray-100">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="material-icons text-blue-500 mr-3 text-4xl">history_edu</span>
                        Our Story
                    </h2>
                    <p class="text-lg text-gray-700 mb-6">Founded with a vision to bridge the gap between local businesses
                        and their communities, we've grown from a simple idea to a platform empowering thousands of
                        businesses across the country.</p>
                    <p class="text-lg text-gray-700 mb-8">What started as a mission to help small businesses get discovered
                        has evolved into a comprehensive ecosystem where businesses can thrive digitally while customers
                        enjoy seamless discovery of trusted services.</p>

                    <!-- Key Points -->
                    <ul class="space-y-6">
                        <li class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-lg mr-4">
                                <span class="material-icons text-amber-600">groups</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg text-gray-900 mb-1">Dedicated Team</h4>
                                <p class="text-gray-600">100+ professionals committed to digital transformation for local
                                    businesses</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-green-100 p-2 rounded-lg mr-4">
                                <span class="material-icons text-green-600">location_city</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg text-gray-900 mb-1">Headquarters</h4>
                                <p class="text-gray-600">Mumbai, Maharashtra, with teams across India</p>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <div class="bg-purple-100 p-2 rounded-lg mr-4">
                                <span class="material-icons text-purple-600">rocket_launch</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-lg text-gray-900 mb-1">Growth</h4>
                                <p class="text-gray-600">Helping 50,000+ businesses connect with millions of customers
                                    monthly</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Mission & Vision -->
            <div class="space-y-12">
                <!-- Mission -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex items-start mb-6">
                        <span class="material-icons text-amber-600 text-4xl mr-4">flag</span>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Our Mission</h2>
                        </div>
                    </div>
                    <p class="text-lg text-gray-700 mb-6">To democratize digital access for local businesses, providing them
                        with the tools and visibility needed to compete in today's digital economy while making it
                        effortless for customers to discover quality services.</p>
                    <div class="bg-white p-4 rounded-lg border border-gray-200">
                        <p class="text-gray-800 font-medium italic">"Empowering local commerce through technology and
                            innovation."</p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="bg-gradient-to-br from-purple-50 to-blue-50 p-8 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex items-start mb-6">
                        <span class="material-icons text-purple-600 text-4xl mr-4">visibility</span>
                        <div>
                            <h2 class="text-3xl font-bold text-gray-900">Our Vision</h2>
                        </div>
                    </div>
                    <p class="text-lg text-gray-700">To become the most trusted platform where every local business can
                        thrive digitally and every customer can effortlessly find the best services in their community.</p>
                </div>
            </div>
        </div>

        <!-- Values Section -->
        <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Core Values</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">These principles guide everything we do at [Company Name]
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 text-center">
                    <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="material-icons text-amber-600 text-3xl">shield</span>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Integrity</h3>
                    <p class="text-gray-600">We build trust through transparency, honesty, and ethical business practices in
                        all our relationships.</p>
                </div>

                <!-- Value 2 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 text-center">
                    <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="material-icons text-green-600 text-3xl">auto_awesome</span>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Innovation</h3>
                    <p class="text-gray-600">We constantly push boundaries to develop solutions that transform local
                        business experiences.</p>
                </div>

                <!-- Value 3 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition-all border border-gray-100 text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="material-icons text-purple-600 text-3xl">diversity_3</span>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-3">Community</h3>
                    <p class="text-gray-600">We foster meaningful connections that help businesses and customers grow
                        together.</p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="mb-24">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Meet Our Leadership</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">The passionate team driving our vision forward</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-gray-100 text-center">
                    <div class="h-48 bg-gradient-to-r from-blue-100 to-indigo-100 flex items-center justify-center">
                        <span class="material-icons text-blue-400 text-6xl">person</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">John Doe</h3>
                        <p class="text-amber-600 font-medium mb-4">Founder & CEO</p>
                        <p class="text-gray-600 text-sm">Visionary leader with 15+ years in digital transformation</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-gray-100 text-center">
                    <div class="h-48 bg-gradient-to-r from-green-100 to-teal-100 flex items-center justify-center">
                        <span class="material-icons text-green-400 text-6xl">person</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Jane Smith</h3>
                        <p class="text-amber-600 font-medium mb-4">Chief Technology Officer</p>
                        <p class="text-gray-600 text-sm">Tech innovator building scalable solutions</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-gray-100 text-center">
                    <div class="h-48 bg-gradient-to-r from-purple-100 to-pink-100 flex items-center justify-center">
                        <span class="material-icons text-purple-400 text-6xl">person</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Robert Johnson</h3>
                        <p class="text-amber-600 font-medium mb-4">Head of Product</p>
                        <p class="text-gray-600 text-sm">Customer-centric product strategist</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div
                    class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-gray-100 text-center">
                    <div class="h-48 bg-gradient-to-r from-amber-100 to-orange-100 flex items-center justify-center">
                        <span class="material-icons text-amber-400 text-6xl">person</span>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Sarah Williams</h3>
                        <p class="text-amber-600 font-medium mb-4">Marketing Director</p>
                        <p class="text-gray-600 text-sm">Growth hacker and brand builder</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-amber-600 to-indigo-700 rounded-2xl p-12 text-center text-white shadow-xl">
            <h2 class="text-3xl font-bold mb-4">Ready to Grow With Us?</h2>
            <p class="text-xl opacity-90 mb-8 max-w-2xl mx-auto">Join thousands of businesses already thriving on our
                platform and discover new opportunities today.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="{{ route('signup') }}"
                    class="bg-white text-amber-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-all flex items-center justify-center">
                    <span class="material-icons mr-2">storefront</span>
                    List Your Business
                </a>
                <a href="{{ route('contact') }}"
                    class="border-2 border-white text-white hover:text-amber-600 px-8 py-4 rounded-lg font-semibold hover:bg-white hover:bg-opacity-10 transition-all flex items-center justify-center">
                    <span class="material-icons mr-2">forum</span>
                    Contact Our Team
                </a>
            </div>
        </div>
    </section>
@endsection
