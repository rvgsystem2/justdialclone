@extends('components.main')

@section('content')
    <section class="max-w-5xl mx-auto py-16 px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Terms of Service</h1>
        <p class="text-gray-700 text-lg mb-6">
            Please read our terms and conditions carefully before using the platform. By accessing our services, you
            agree to abide by them.
        </p>

        <div class="space-y-6">
            <!-- Term 1 -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">1. Acceptance of Terms</h2>
                <p class="text-gray-600 mt-2">
                    By accessing and using this platform, you agree to be bound by these Terms of Service. If you do not
                    agree to
                    these terms, please do not use the platform.
                </p>
            </div>

            <!-- Term 2 -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">2. Use of Services</h2>
                <p class="text-gray-600 mt-2">
                    You agree to use our services only for lawful purposes. You are responsible for all content you upload
                    and for
                    any actions taken on the platform.
                </p>
            </div>

            <!-- Term 3 -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">3. Account Responsibility</h2>
                <p class="text-gray-600 mt-2">
                    You are responsible for maintaining the confidentiality of your account and any activities that occur
                    under
                    your account.
                </p>
            </div>

            <!-- Term 4 -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">4. Prohibited Conduct</h2>
                <ul class="list-disc pl-6 mt-2 text-gray-600">
                    <li>Engaging in fraudulent activities or using the platform for illegal purposes.</li>
                    <li>Disrupting the services or transmitting harmful software or malware.</li>
                    <li>Impersonating any individual or entity or providing false information.</li>
                </ul>
            </div>

            <!-- Term 5 -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">5. Termination</h2>
                <p class="text-gray-600 mt-2">
                    We reserve the right to terminate or suspend access to our platform at our sole discretion for
                    violations of
                    these terms.
                </p>
            </div>

            <!-- Term 6 -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">6. Limitation of Liability</h2>
                <p class="text-gray-600 mt-2">
                    Our liability to you is limited to the maximum extent permitted by law. We are not liable for any
                    indirect or
                    consequential damages arising from the use of our platform.
                </p>
            </div>

            <!-- Term 7 -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">7. Governing Law</h2>
                <p class="text-gray-600 mt-2">
                    These terms will be governed by and construed in accordance with the laws of India. Any disputes arising
                    from
                    these terms will be subject to the exclusive jurisdiction of the courts in Mumbai.
                </p>
            </div>

            <!-- Term 8 -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">8. Changes to the Terms</h2>
                <p class="text-gray-600 mt-2">
                    We may update these terms from time to time. You will be notified of any changes, and it is your
                    responsibility
                    to review the terms periodically for any updates.
                </p>
            </div>
        </div>

        <div class="mt-12">
            <p class="text-center text-gray-700">
                If you have any questions regarding these Terms of Service, please <a href="{{ route('contact') }}"
                    class="text-blue-500 hover:underline">contact us</a>.
            </p>
        </div>
    </section>
@endsection
