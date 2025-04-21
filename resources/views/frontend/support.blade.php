@extends('components.main')

@section('content')
    <section class="max-w-5xl mx-auto py-16 px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Help & Support</h1>
        <p class="text-gray-700 text-lg mb-6">
            Need assistance? Our support team is here to help you 24/7. Check our FAQs or contact us directly if you
            need further help.
        </p>

        <!-- FAQ Section -->
        <div class="space-y-8">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Frequently Asked Questions (FAQs)</h2>
                <div class="space-y-6">
                    @foreach ([['title' => 'How can I create an account?', 'desc' => 'Click on the "Sign Up" button at the top right of the page. Fill in your details and click "Submit" to register.'], ['title' => 'How do I reset my password?', 'desc' => 'Click on "Forgot Password" on the login page. Enter your email address, and follow the instructions sent to your inbox.'], ['title' => 'How can I contact customer support?', 'desc' => 'Visit our "Contact Us" page or email us at <a href="mailto:support@justdial.com" class="text-blue-500 hover:underline">support@justdial.com</a>.'], ['title' => 'What is the return policy?', 'desc' => 'You may return items within 30 days of purchase. For full details, visit our <a href="#" class="text-blue-500 hover:underline">Return Policy</a> page.']] as $faq)
                        <div class="border-t border-gray-300 pt-4">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $faq['title'] }}</h3>
                            <p class="text-gray-600 mt-2">{!! $faq['desc'] !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Contact Us Section -->
            <div class="mt-12">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Us</h2>
                <p class="text-gray-700 mb-6">
                    If you need further assistance or can't find the answer to your question, please reach out to our
                    support team directly. We are here to help!
                </p>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <span class="material-symbols-outlined text-amber-500 text-2xl">call</span>
                        <div>
                            <p class="text-gray-600 text-sm">Customer Care</p>
                            <a href="tel:+918888888888" class="text-amber-500 hover:underline text-lg font-medium">+91
                                8888888888</a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <span class="material-symbols-outlined text-amber-500 text-2xl">mail</span>
                        <div>
                            <p class="text-gray-600 text-sm">Email Support</p>
                            <a href="mailto:support@justdial.com"
                                class="text-amber-500 hover:underline text-lg font-medium">support@justdial.com</a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <span class="material-symbols-outlined text-amber-500 text-2xl">location_on</span>
                        <div>
                            <p class="text-gray-600 text-sm">Corporate Office</p>
                            <p class="text-gray-800 font-medium">Mumbai, Maharashtra, India</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
