@extends('components.main')

@section('content')
    <section class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8">
        <!-- Page Header -->
        <div class="text-center mb-20">
            <h1 class="text-5xl font-extrabold text-gray-900 mb-4 tracking-tight">Contact Us</h1>
            <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto">Have questions? We'd love to hear from you. Our
                team is ready to help!</p>
            <div class="mt-6">
                <div
                    class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-amber-600 to-amber-500 text-white rounded-full shadow-md hover:shadow-xl transition">
                    <span class="material-icons">mail</span>
                    <span class="font-medium">Reach Out to Our Team</span>
                </div>
            </div>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">
            <!-- Info Card -->
            <div class="bg-white rounded-2xl border border-gray-100 shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 px-6 py-5 border-b border-gray-200">
                    <h2 class="text-2xl font-semibold text-gray-800 flex items-center gap-2">
                        <span class="material-icons text-amber-600">contact_support</span> Contact Details
                    </h2>
                </div>
                <div class="p-8 space-y-10">
                    <!-- Phone -->
                    <div class="flex items-start gap-4">
                        <div class="bg-blue-100 p-3 rounded-xl">
                            <span class="material-icons text-amber-600">call</span>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-500">Call Us</h3>
                            <a href="tel:+918299012292"
                                class="text-lg font-medium text-gray-900 hover:text-amber-600 transition">082990 12292</a>
                            <p class="text-sm text-gray-500">Available 24/7</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start gap-4">
                        <div class="bg-green-100 p-3 rounded-xl">
                            <span class="material-icons text-green-600">email</span>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-500">Email Us</h3>
                            <a href="mailto:support@realvictorygroups.com"
                                class="text-lg font-medium text-gray-900 hover:text-green-600 transition">
                                support@realvictorygroups.com
                            </a>
                            <p class="text-sm text-gray-500">Response within 24 hours</p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="flex items-start gap-4">
                        <div class="bg-purple-100 p-3 rounded-xl">
                            <span class="material-icons text-purple-600">location_on</span>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-gray-500">Our Office</h3>
                            <p class="text-lg font-medium text-gray-900 leading-snug">
                                73 Basement, Ekta Enclave Society,<br>
                                Lakhanpur, Khyora, Kanpur,<br>
                                Uttar Pradesh 208024
                            </p>
                            <a href="https://maps.google.com/?q=73+Basement,+Ekta+Enclave+Society,+Lakhanpur,+Khyora,+Kanpur,+Uttar+Pradesh+208024"
                                class="text-sm text-amber-600 hover:underline mt-1 inline-flex items-center"
                                target="_blank">
                                <span class="material-icons text-sm mr-1">map</span>
                                View on Map
                            </a>
                        </div>
                    </div>

                    <!-- Socials -->
                    <div class="pt-8 border-t border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Connect With Us</h3>
                        <div class="flex gap-3">
                            <a href="#"
                                class="w-11 h-11 rounded-full bg-gray-100 hover:bg-blue-600 hover:text-white text-blue-600 flex items-center justify-center transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="w-11 h-11 rounded-full bg-gray-100 hover:bg-sky-500 hover:text-white text-sky-500 flex items-center justify-center transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#"
                                class="w-11 h-11 rounded-full bg-gray-100 hover:bg-pink-500 hover:text-white text-pink-500 flex items-center justify-center transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#"
                                class="w-11 h-11 rounded-full bg-gray-100 hover:bg-blue-800 hover:text-white text-blue-800 flex items-center justify-center transition duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Form Card -->
            <div class="bg-white rounded-2xl border border-gray-100 shadow-xl overflow-hidden">
                <div class="bg-gradient-to-r from-indigo-50 to-purple-50 px-6 py-5 border-b border-gray-200">
                    <h2 class="text-2xl font-semibold text-gray-800 flex items-center gap-2">
                        <span class="material-icons text-amber-600">send</span> Drop Us a Message
                    </h2>
                </div>
                <div class="p-8">
                    <form method="POST" action="#" class="space-y-6">
                        @csrf

                        <!-- Full Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <div class="relative">
                                <span class="material-icons absolute left-3 top-3.5 text-gray-400">person</span>
                                <input type="text" id="name" name="name"
                                    class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-amber-600 focus:border-amber-600"
                                    placeholder="John Doe" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <div class="relative">
                                <span class="material-icons absolute left-3 top-3.5 text-gray-400">email</span>
                                <input type="email" id="email" name="email"
                                    class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-amber-600 focus:border-amber-600"
                                    placeholder="your@email.com" required>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                            <div class="relative">
                                <span class="material-icons absolute left-3 top-3.5 text-gray-400">phone</span>
                                <input type="tel" id="phone" name="phone"
                                    class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-amber-600 focus:border-amber-600"
                                    placeholder="+91 8888888888" pattern="^\+?[0-9]{1,4}?[0-9]{7,}$" required>
                            </div>
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <div class="relative">
                                <span class="material-icons absolute left-3 top-3.5 text-gray-400">subject</span>
                                <select id="subject" name="subject"
                                    class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-amber-600 focus:border-amber-600"
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
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <div class="relative">
                                <span class="material-icons absolute top-3 left-3 text-gray-400">message</span>
                                <textarea id="message" name="message" rows="5"
                                    class="pl-10 w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-amber-600 focus:border-amber-600"
                                    placeholder="Write your message here..." required></textarea>
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="pt-2">
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-amber-600 to-amber-700 text-white py-4 px-6 rounded-lg hover:from-amber-700 hover:to-amber-800 transition-all duration-300 shadow-lg flex items-center justify-center">
                                <span class="material-icons mr-2">send</span> Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
