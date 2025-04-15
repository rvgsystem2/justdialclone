@extends('components.main')

@section('content')
    <section class="max-w-6xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-4 tracking-tight">Get in Touch</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">We're here to help and answer any questions you might have. We
                look forward to hearing from you.</p>
            <div class="mt-6">
                <div
                    class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full shadow-lg">
                    <span class="material-icons text-white mr-2">mail</span>
                    <span class="font-medium text-white">Contact Our Team</span>
                </div>
            </div>
        </div>

        <!-- Contact Content -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Information Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 border-b border-gray-200">
                    <h2 class="text-2xl font-semibold text-gray-800 flex items-center">
                        <span class="material-icons text-blue-500 mr-3">contact_support</span>
                        Contact Information
                    </h2>
                </div>
                <div class="p-8">
                    <ul class="space-y-8">
                        <!-- Phone -->
                        <li class="flex items-start">
                            <div class="bg-blue-100 p-3 rounded-lg mr-4">
                                <span class="material-icons text-blue-600">call</span>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Phone Support</h3>
                                <a href="tel:+918888888888"
                                    class="text-xl font-medium text-gray-900 hover:text-blue-600 transition">+91
                                    8888888888</a>
                                <p class="text-sm text-gray-500 mt-1">Monday-Friday, 9am-6pm IST</p>
                            </div>
                        </li>

                        <!-- Email -->
                        <li class="flex items-start">
                            <div class="bg-green-100 p-3 rounded-lg mr-4">
                                <span class="material-icons text-green-600">email</span>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Email Support</h3>
                                <a href="mailto:support@justdial.com"
                                    class="text-xl font-medium text-gray-900 hover:text-green-600 transition">support@justdial.com</a>
                                <p class="text-sm text-gray-500 mt-1">Typically responds within 24 hours</p>
                            </div>
                        </li>

                        <!-- Address -->
                        <li class="flex items-start">
                            <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                <span class="material-icons text-purple-600">location_on</span>
                            </div>
                            <div>
                                <h3 class="text-sm font-medium text-gray-500">Corporate Office</h3>
                                <p class="text-xl font-medium text-gray-900">Mumbai, Maharashtra, India</p>
                                <a href="#"
                                    class="text-sm text-blue-600 hover:underline mt-1 inline-flex items-center">
                                    <span class="material-icons text-sm mr-1">map</span>
                                    View on map
                                </a>
                            </div>
                        </li>
                    </ul>
    

                    <!-- Social Media Section -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Connect With Us</h3>
                        <div class="flex space-x-4">
                            <!-- Facebook -->
                            <a href="#"
                                class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 hover:bg-blue-600 hover:text-white flex items-center justify-center transition-all duration-300">
                                <i class="fab fa-facebook-f text-lg"></i>
                            </a>
                            <!-- Twitter -->
                            <a href="#"
                                class="w-12 h-12 rounded-full bg-sky-100 text-sky-600 hover:bg-sky-600 hover:text-white flex items-center justify-center transition-all duration-300">
                                <i class="fab fa-twitter text-lg"></i>
                            </a>
                            <!-- Instagram -->
                            <a href="#"
                                class="w-12 h-12 rounded-full bg-pink-100 text-pink-600 hover:bg-pink-600 hover:text-white flex items-center justify-center transition-all duration-300">
                                <i class="fab fa-instagram text-lg"></i>
                            </a>
                            <!-- LinkedIn -->
                            <a href="#"
                                class="w-12 h-12 rounded-full bg-blue-100 text-blue-800 hover:bg-blue-800 hover:text-white flex items-center justify-center transition-all duration-300">
                                <i class="fab fa-linkedin-in text-lg"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Contact Form Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                <div class="bg-gradient-to-r from-indigo-50 to-purple-50 p-6 border-b border-gray-200">
                    <h2 class="text-2xl font-semibold text-gray-800 flex items-center">
                        <span class="material-icons text-indigo-500 mr-3">send</span>
                        Send Us a Message
                    </h2>
                </div>
                <div class="p-8">
                    <form action="#" method="POST" class="space-y-6">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="material-icons text-gray-400">person</span>
                                </div>
                                <input type="text" id="name" name="name"
                                    class="pl-10 block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="John Doe" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="material-icons text-gray-400">email</span>
                                </div>
                                <input type="email" id="email" name="email"
                                    class="pl-10 block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="your@email.com" required>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="material-icons text-gray-400">phone</span>
                                </div>
                                <input type="tel" id="phone" name="phone"
                                    class="pl-10 block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    pattern="^\+?[0-9]{1,4}?[0-9]{7,}$" placeholder="+91 8888888888" required>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="material-icons text-gray-400">subject</span>
                                </div>
                                <select id="subject" name="subject"
                                    class="pl-10 block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    required>
                                    <option value="" disabled selected>Select a subject</option>
                                    <option value="support">Support</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="business">Business Inquiry</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Your
                                Message</label>
                            <div class="relative">
                                <div class="absolute top-3 left-3">
                                    <span class="material-icons text-gray-400">message</span>
                                </div>
                                <textarea id="message" name="message" rows="5"
                                    class="pl-10 block w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                                    placeholder="How can we help you?" required></textarea>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-4 px-6 rounded-lg hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 shadow-md hover:shadow-lg flex items-center justify-center">
                                <span class="material-icons mr-2">send</span>
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
