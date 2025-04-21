@extends('components.main')

@section('content')
    <section class="max-w-5xl mx-auto py-16 px-6 lg:px-0 text-gray-800">
        <!-- Header -->
        <div class="mb-12 text-center">
            <h1 class="text-4xl font-bold mb-4 text-amber-600">Terms of Service</h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Please read our terms and conditions carefully before using the platform. By accessing our services, you
                agree to abide by them.
            </p>
        </div>

        <!-- Terms Content -->
        <div class="space-y-10 text-base leading-relaxed">
            <!-- Term 1 -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-2">1. Acceptance of Terms</h2>
                <p class="text-gray-700">
                    By accessing and using this platform, you agree to be bound by these Terms of Service. If you do not
                    agree to these terms, please do not use the platform.
                </p>
            </div>

            <!-- Term 2 -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-2">2. Use of Services</h2>
                <p class="text-gray-700">
                    You agree to use our services only for lawful purposes. You are responsible for all content you upload
                    and for any actions taken on the platform.
                </p>
            </div>

            <!-- Term 3 -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-2">3. Account Responsibility</h2>
                <p class="text-gray-700">
                    You are responsible for maintaining the confidentiality of your account and any activities that occur
                    under your account.
                </p>
            </div>

            <!-- Term 4 -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-2">4. Prohibited Conduct</h2>
                <ul class="list-disc pl-6 text-gray-700 space-y-2">
                    <li>Engaging in fraudulent activities or using the platform for illegal purposes.</li>
                    <li>Disrupting the services or transmitting harmful software or malware.</li>
                    <li>Impersonating any individual or entity or providing false information.</li>
                </ul>
            </div>

            <!-- Term 5 -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-2">5. Termination</h2>
                <p class="text-gray-700">
                    We reserve the right to terminate or suspend access to our platform at our sole discretion for
                    violations of these terms.
                </p>
            </div>

            <!-- Term 6 -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-2">6. Limitation of Liability</h2>
                <p class="text-gray-700">
                    Our liability to you is limited to the maximum extent permitted by law. We are not liable for any
                    indirect or consequential damages arising from the use of our platform.
                </p>
            </div>

            <!-- Term 7 -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-2">7. Governing Law</h2>
                <p class="text-gray-700">
                    These terms will be governed by and construed in accordance with the laws of India. Any disputes arising
                    from these terms will be subject to the exclusive jurisdiction of the courts in Mumbai.
                </p>
            </div>

            <!-- Term 8 -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-2">8. Changes to the Terms</h2>
                <p class="text-gray-700">
                    We may update these terms from time to time. You will be notified of any changes, and it is your
                    responsibility to review the terms periodically for any updates.
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-16 border-t pt-6 text-center">
            <p class="text-gray-600">
                If you have any questions regarding these Terms of Service, please
                <a href="{{ route('contact') }}" class="text-amber-600 hover:underline font-medium">contact us</a>.
            </p>
        </div>
    </section>
@endsection
