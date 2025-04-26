@extends('components.main')

@section('content')
    <section class="max-w-5xl mx-auto py-16 px-4">
        <h1 class="text-3xl font-bold text-amber-600 mb-4">Careers at Real Victory Groups</h1>
        <p class="text-gray-700 text-lg mb-6">
            Join one of India’s emerging jewelry and business tech companies. Explore exciting job openings across various
            departments.
        </p>

        <div class="space-y-8">
            <!-- Introduction Section -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-4">Why Work with Us?</h2>
                <p class="text-gray-600">
                    At Real Victory Groups, we believe in innovation, collaboration, and impact. As part of our team, you’ll
                    be contributing to the success of our growing business showcase platform.
                </p>
                <ul class="list-inside list-disc text-gray-600">
                    <li>Be part of a rapidly growing digital company in the jewelry industry.</li>
                    <li>Engage with a dynamic and motivated team across India.</li>
                    <li>Enjoy career advancement opportunities and competitive pay.</li>
                    <li>Employee-friendly benefits including wellness programs and insurance.</li>
                </ul>
            </div>

            <!-- Open Positions -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-4">Current Job Openings</h2>
                <div class="space-y-6">
                    <!-- Job Listing 1 -->
                    <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-amber-400">Laravel Developer</h3>
                        <p class="text-gray-400 text-sm mb-4">Location: Remote / Kanpur, Uttar Pradesh</p>
                        <p class="text-gray-300 mb-4">
                            We're seeking a Laravel Developer to build advanced features for our jewelry listing platform.
                            You'll work with a passionate team on real-time features, dashboards, and custom modules.
                        </p>
                        <a href="#" class="text-amber-400 hover:text-amber-300 font-medium text-sm">View Job
                            Details</a>
                    </div>

                    <!-- Job Listing 2 -->
                    <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-amber-400">UI/UX Designer</h3>
                        <p class="text-gray-400 text-sm mb-4">Location: Remote</p>
                        <p class="text-gray-300 mb-4">
                            We're looking for a designer who can craft modern and intuitive user interfaces for our
                            platform. Experience in Tailwind CSS and Figma is a plus.
                        </p>
                        <a href="#" class="text-amber-400 hover:text-amber-300 font-medium text-sm">View Job
                            Details</a>
                    </div>

                    <!-- Job Listing 3 -->
                    <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold text-amber-400">Business Development Executive</h3>
                        <p class="text-gray-400 text-sm mb-4">Location: Kanpur, Uttar Pradesh</p>
                        <p class="text-gray-300 mb-4">
                            Help us grow our network of jewelry businesses by building strong client relationships,
                            onboarding new showrooms, and supporting local engagement.
                        </p>
                        <a href="#" class="text-amber-400 hover:text-amber-300 font-medium text-sm">View Job
                            Details</a>
                    </div>
                </div>
            </div>

            <!-- Benefits Section -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-4">Employee Benefits</h2>
                <ul class="list-inside list-disc text-gray-600">
                    <li>Health & Dental Insurance</li>
                    <li>Paid Time Off (PTO)</li>
                    <li>Flexible Work Schedule</li>
                    <li>Performance Bonuses</li>
                    <li>Growth-Oriented Learning Environment</li>
                </ul>
            </div>

            <!-- How to Apply -->
            <div>
                <h2 class="text-2xl font-semibold text-amber-600 mb-4">How to Apply</h2>
                <p class="text-gray-600 mb-4">
                    To apply for any of the listed positions, please send your resume and a short introduction to our HR
                    department at:
                </p>
                <p class="text-gray-600 mb-4">
                    <strong>Email:</strong>
                    <a href="mailto:careers@rvggroups.com" class="text-amber-500 hover:underline">careers@rvggroups.com</a>
                </p>
                <p class="text-gray-600">
                    We’re excited to connect with talented individuals who are passionate about creating change in the
                    business and jewelry industry.
                </p>
            </div>
        </div>
    </section>
@endsection
