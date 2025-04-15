@extends('components.main')

@section('content')
    <section class="max-w-5xl mx-auto py-16 px-4 text-gray-800">
        <h1 class="text-4xl font-bold mb-6 text-gray-900">Cookie Policy</h1>

        <p class="mb-6 text-lg">This Cookie Policy explains how we use cookies and similar technologies to recognize you when
            you visit our website. It explains what these technologies are and why we use them, as well as your rights to
            control our use of them.</p>

        <h2 class="text-2xl font-semibold mt-10 mb-4">1. What are cookies?</h2>
        <p class="mb-6">Cookies are small data files that are placed on your computer or mobile device when you visit a
            website. Cookies are widely used by website owners to make their websites work more efficiently and to provide
            reporting information.</p>

        <h2 class="text-2xl font-semibold mt-10 mb-4">2. Why do we use cookies?</h2>
        <p class="mb-6">We use cookies for several reasons. Some cookies are required for technical reasons for our website
            to operate, and we refer to these as "essential" cookies. Other cookies enable us to track and target the
            interests of our users to enhance the experience on our website.</p>

        <h2 class="text-2xl font-semibold mt-10 mb-4">3. Types of cookies we use</h2>
        <ul class="list-disc list-inside space-y-2 mb-6">
            <li><strong>Essential Cookies:</strong> These are necessary for the website to function properly.</li>
            <li><strong>Performance Cookies:</strong> These help us understand how visitors interact with our website.</li>
            <li><strong>Functional Cookies:</strong> These enable the website to provide enhanced functionality and
                personalization.</li>
            <li><strong>Targeting Cookies:</strong> These are used to deliver advertisements more relevant to you and your
                interests.</li>
        </ul>

        <h2 class="text-2xl font-semibold mt-10 mb-4">4. How can you control cookies?</h2>
        <p class="mb-6">You have the right to decide whether to accept or reject cookies. You can set or amend your web
            browser controls to accept or refuse cookies. If you choose to reject cookies, you may still use our website
            though your access to some functionality and areas may be restricted.</p>

        <h2 class="text-2xl font-semibold mt-10 mb-4">5. Changes to this Cookie Policy</h2>
        <p class="mb-6">We may update this Cookie Policy from time to time to reflect changes to our practices or for
            other operational, legal, or regulatory reasons.</p>

        <h2 class="text-2xl font-semibold mt-10 mb-4">6. Contact us</h2>
        <p>If you have any questions about our use of cookies, you can contact us at: <a href="{{ route('contact') }}"
                class="text-blue-600 hover:underline">Contact Page</a>.</p>
    </section>
@endsection
