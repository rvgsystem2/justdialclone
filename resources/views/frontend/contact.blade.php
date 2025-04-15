@extends('components.main')

@section('content')
    <section class="max-w-5xl mx-auto py-16 px-4">
        <h1 class="text-4xl font-extrabold text-center text-gray-900 mb-6">Contact Us</h1>
        <p class="text-lg text-center text-gray-700 mb-10">We'd love to hear from you! Whether you have a question, need support, or want to give feedback, our team is here to assist you.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Information -->
            <div class="bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-3xl font-semibold text-gray-900 mb-6">Our Contact Information</h2>
                <p class="text-gray-700 mb-8">Reach out to us through the following methods:</p>
                <ul class="space-y-6 text-gray-700">
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-400 text-xl mr-4">call</span>
                        <div>
                            <p class="text-sm text-gray-700">Customer Support</p>
                            <a href="tel:+918888888888" class="text-blue-600 hover:underline text-lg">+91 8888888888</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-400 text-xl mr-4">mail</span>
                        <div>
                            <p class="text-sm text-gray-700">Email Support</p>
                            <a href="mailto:support@justdial.com" class="text-blue-600 hover:underline text-lg">support@justdial.com</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-400 text-xl mr-4">location_on</span>
                        <div>
                            <p class="text-sm text-gray-700">Corporate Office</p>
                            <p class="text-blue-600">Mumbai, Maharashtra, India</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div class="bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-3xl font-semibold text-gray-900 mb-6">Send Us a Message</h2>
                <form action="#" method="POST" class="space-y-8">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" pattern="^\+?[0-9]{1,4}?[0-9]{7,}$" placeholder="+91 8888888888" required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-4 py-3 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" required></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-md hover:bg-blue-700 transition-colors duration-200">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
