@extends('components.main')

@section('content')
    <section class="max-w-5xl mx-auto py-16 px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Help & Support</h1>
        <p class="text-gray-700 text-lg mb-6">
            Need assistance? Our support team is here to help you 24/7. Check our FAQs or contact us directly if you
            need further help.
        </p>

        <div class="space-y-8">
            <!-- FAQ Section -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Frequently Asked Questions (FAQs)</h2>
                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="border-t border-gray-300 pt-4">
                        <h3 class="text-xl font-semibold text-gray-800">How can I create an account?</h3>
                        <p class="text-gray-600 mt-2">
                            To create an account, click on the "Sign Up" button at the top right of the page. Fill in your
                            details and click "Submit" to complete the registration process.
                        </p>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="border-t border-gray-300 pt-4">
                        <h3 class="text-xl font-semibold text-gray-800">How do I reset my password?</h3>
                        <p class="text-gray-600 mt-2">
                            To reset your password, click on the "Forgot Password" link on the login page. Enter your
                            email address, and we'll send you instructions to reset your password.
                        </p>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="border-t border-gray-300 pt-4">
                        <h3 class="text-xl font-semibold text-gray-800">How can I contact customer support?</h3>
                        <p class="text-gray-600 mt-2">
                            You can contact customer support by visiting our "Contact Us" page. Alternatively, you can
                            email us at <a href="mailto:support@justdial.com"
                                class="text-blue-500 hover:underline">support@justdial.com</a>.
                        </p>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="border-t border-gray-300 pt-4">
                        <h3 class="text-xl font-semibold text-gray-800">What is the return policy?</h3>
                        <p class="text-gray-600 mt-2">
                            Our return policy allows you to return items within 30 days of purchase. For more details,
                            please refer to our <a href="" class="text-blue-500 hover:underline">Return Policy</a>
                            page.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Us Section -->
            <div class="mt-12">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Us</h2>
                <p class="text-gray-700 mb-6">
                    If you need further assistance or can't find the answer to your question, please reach out to our
                    support team directly. We are here to help!
                </p>

                <div class="space-y-4">
                    <!-- Contact Option 1: Phone -->
                    <div class="flex items-start space-x-4">
                        <span class="material-symbols-outlined text-blue-400 mt-0.5">call</span>
                        <div>
                            <p class="text-gray-600 text-sm">Customer Care</p>
                            <a href="tel:+918888888888" class="text-blue-500 hover:underline text-lg">+91 8888888888</a>
                        </div>
                    </div>

                    <!-- Contact Option 2: Email -->
                    <div class="flex items-start space-x-4">
                        <span class="material-symbols-outlined text-blue-400 mt-0.5">mail</span>
                        <div>
                            <p class="text-gray-600 text-sm">Email Support</p>
                            <a href="mailto:support@justdial.com"
                                class="text-blue-500 hover:underline text-lg">support@justdial.com</a>
                        </div>
                    </div>

                    <!-- Contact Option 3: Office Address -->
                    <div class="flex items-start space-x-4">
                        <span class="material-symbols-outlined text-blue-400 mt-0.5">location_on</span>
                        <div>
                            <p class="text-gray-600 text-sm">Corporate Office</p>
                            <p class="text-gray-800">Mumbai, Maharashtra, India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
