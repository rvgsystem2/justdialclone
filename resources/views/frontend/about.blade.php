@extends('components.main')

@section('content')
    <section class="max-w-6xl mx-auto py-16 px-6">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-8">About Us</h1>
        <p class="text-lg text-gray-700 mb-12">At [Company Name], we're committed to providing seamless and impactful
            experiences that connect businesses and users in a digital-first world. We aim to be the most trusted platform
            where local businesses thrive and customers find the best products and services nearby.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Company Information -->
            <div>
                <h2 class="text-3xl font-semibold text-gray-900 mb-6">Who We Are</h2>
                <p class="text-lg text-gray-700 mb-8">We are a passionate team that believes in the power of digital
                    transformation. Our platform connects people to local businesses, facilitating discovery and growth. Our
                    goal is simple: make it easier for businesses to get noticed, and for customers to make informed
                    decisions.</p>
                <ul class="space-y-6 text-gray-700">
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-500 mr-4 text-xl">people</span>
                        <div>
                            <h4 class="font-medium text-gray-900">Our Team</h4>
                            <p class="text-sm text-gray-700">We are a dedicated group of professionals committed to making
                                digital connections easier for both businesses and customers.</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-500 mr-4 text-xl">location_on</span>
                        <div>
                            <h4 class="font-medium text-gray-900">Our Location</h4>
                            <p class="text-sm text-gray-700">Mumbai, Maharashtra, India</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-500 mr-4 text-xl">business</span>
                        <div>
                            <h4 class="font-medium text-gray-900">Our Services</h4>
                            <p class="text-sm text-gray-700">Connecting local businesses with customers through innovative
                                digital solutions.</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Mission Statement -->
            <div>
                <h2 class="text-3xl font-semibold text-gray-900 mb-6">Our Mission</h2>
                <p class="text-lg text-gray-700 mb-6">Our mission is simple: empower local businesses to succeed online
                    while helping customers discover the best businesses near them. We believe that by providing businesses
                    with the right tools, they can thrive in today’s digital age.</p>
                <p class="text-lg text-gray-700 mb-8">Our platform is constantly evolving, enhancing the way businesses
                    engage with their audience. We're committed to making a positive impact and creating an ecosystem where
                    both businesses and users are empowered to succeed.</p>
            </div>
        </div>

        <!-- Our Values Section -->
        <div class="my-16">
            <h2 class="text-3xl font-semibold text-gray-900 mb-6">Our Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-blue-600 text-4xl mb-4">thumb_up</span>
                    <h4 class="font-medium text-xl text-gray-900 mb-2">Trust & Integrity</h4>
                    <p class="text-gray-700">We believe in building strong, trustworthy relationships with our users and
                        businesses, maintaining integrity in everything we do.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-blue-600 text-4xl mb-4">innovation</span>
                    <h4 class="font-medium text-xl text-gray-900 mb-2">Innovation</h4>
                    <p class="text-gray-700">We are constantly innovating to provide better solutions and enhance the
                        experience for both businesses and users alike.</p>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="material-symbols-outlined text-blue-600 text-4xl mb-4">connect</span>
                    <h4 class="font-medium text-xl text-gray-900 mb-2">Connection</h4>
                    <p class="text-gray-700">Our platform connects businesses to their ideal customers, enabling better
                        discovery and seamless interaction.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="bg-blue-50 p-8 rounded-lg shadow-md text-center">
            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Join Us in Making a Difference</h3>
            <p class="text-lg text-gray-700 mb-6">Whether you're a business looking to grow or a customer discovering new
                opportunities, we invite you to be part of our ever-growing community.</p>
            <a href="{{ route('signup') }}"
                class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">Sign Up Now</a>
        </div>
    </section>
@endsection
