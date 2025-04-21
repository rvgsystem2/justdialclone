@extends('components.main')

@section('content')
<section class="max-w-4xl mx-auto py-16 px-4 text-gray-800">
    <!-- Header -->
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold text-amber-600 mb-4">Help & Support</h1>
        <p class="text-gray-700 text-lg max-w-2xl mx-auto">
            Need assistance? Our support team is here to help you 24/7. Check our FAQs or contact us directly if you
            need further help.
        </p>
    </div>

    <!-- FAQs -->
    <div class="mb-16">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-8">Frequently Asked Questions (FAQs)</h2>
        <div class="space-y-8">
            <!-- FAQ 1 -->
            <div class="border-t border-gray-300 pt-4">
                <h3 class="text-xl font-semibold text-gray-800">How can I create an account?</h3>
                <p class="text-gray-600 mt-2">
                    Click on the "Sign Up" button at the top right of the page. Fill in your details and click "Submit" to register.
                </p>
            </div>

            <!-- FAQ 2 -->
            <div class="border-t border-gray-300 pt-4">
                <h3 class="text-xl font-semibold text-gray-800">How do I reset my password?</h3>
                <p class="text-gray-600 mt-2">
                    Click on "Forgot Password" on the login page. Enter your email address, and follow the instructions sent to your inbox.
                </p>
            </div>

            <!-- FAQ 3 -->
            <div class="border-t border-gray-300 pt-4">
                <h3 class="text-xl font-semibold text-gray-800">How can I contact customer support?</h3>
                <p class="text-gray-600 mt-2">
                    Visit our "Contact Us" page or email us at 
                    <a href="mailto:support@justdial.com" class="text-amber-600 hover:underline">support@justdial.com</a>.
                </p>
            </div>

            <!-- FAQ 4 -->
            <div class="border-t border-gray-300 pt-4">
                <h3 class="text-xl font-semibold text-gray-800">What is the return policy?</h3>
                <p class="text-gray-600 mt-2">
                    You may return items within 30 days of purchase. For full details, visit our 
                    <a href="#" class="text-amber-600 hover:underline">Return Policy</a> page.
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div>
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Contact Us</h2>
        <p class="text-center text-gray-700 mb-10">
            If you need further assistance or can't find the answer to your question, please reach out to our
            support team directly. We are here to help!
        </p>

        <div class="space-y-6">
            <!-- Phone -->
            <div class="flex items-start space-x-4">
                <span class="material-symbols-outlined text-amber-500 text-2xl">call</span>
                <div>
                    <p class="text-gray-600 text-sm">Customer Care</p>
                    <a href="tel:+918888888888" class="text-amber-600 hover:underline text-lg font-medium">
                        +91 8888888888
                    </a>
                </div>
            </div>

            <!-- Email -->
            <div class="flex items-start space-x-4">
                <span class="material-symbols-outlined text-amber-500 text-2xl">mail</span>
                <div>
                    <p class="text-gray-600 text-sm">Email Support</p>
                    <a href="mailto:support@justdial.com" class="text-amber-600 hover:underline text-lg font-medium">
                        support@justdial.com
                    </a>
                </div>
            </div>

            <!-- Location -->
            <div class="flex items-start space-x-4">
                <span class="material-symbols-outlined text-amber-500 text-2xl">location_on</span>
                <div>
                    <p class="text-gray-600 text-sm">Corporate Office</p>
                    <p class="text-gray-800 font-medium">Mumbai, Maharashtra, India</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
