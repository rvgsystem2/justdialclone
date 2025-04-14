@extends('components.main')

@section('content')
    <section class="max-w-5xl mx-auto py-16 px-4">
        <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
        <p class="text-gray-700 mb-8">We'd love to hear from you! Whether you have a question, need support, or want to give feedback, our team is here to assist you.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Information -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Our Contact Information</h2>
                <p class="text-gray-700 mb-6">Reach out to us through the following methods:</p>
                <ul class="space-y-4 text-gray-700">
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-400 mr-3">call</span>
                        <div>
                            <p class="text-gray-700 text-sm">Customer Support</p>
                            <a href="tel:+918888888888" class="text-blue-600 hover:underline">+91 8888888888</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-400 mr-3">mail</span>
                        <div>
                            <p class="text-gray-700 text-sm">Email Support</p>
                            <a href="mailto:support@justdial.com" class="text-blue-600 hover:underline">support@justdial.com</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <span class="material-symbols-outlined text-blue-400 mr-3">location_on</span>
                        <div>
                            <p class="text-gray-700 text-sm">Corporate Office</p>
                            <p class="text-blue-600">Mumbai, Maharashtra, India</p>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-900 mb-4">Send Us a Message</h2>
                <form action="#" method="POST" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-4 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500" required></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition-colors">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
