@extends('components.main')

@section('content')
    <section class="max-w-5xl mx-auto py-16 px-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Careers at JustDial</h1>
        <p class="text-gray-700 text-lg mb-6">
            Join one of India’s fastest-growing tech companies. Explore exciting job openings across various departments.
        </p>

        <div class="space-y-8">
            <!-- Introduction Section -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Why Work with Us?</h2>
                <p class="text-gray-600">
                    At JustDial, we value innovation, collaboration, and growth. As part of our team, you’ll be at the forefront of
                    technological innovation, contributing to the success of our platform that serves millions of users across the country.
                </p>
                <ul class="list-inside list-disc text-gray-600">
                    <li>Work with cutting-edge technologies and be part of a diverse, dynamic team.</li>
                    <li>Enjoy a collaborative environment that encourages creativity and innovation.</li>
                    <li>Competitive salaries and growth opportunities within the company.</li>
                    <li>Comprehensive employee benefits, including health insurance and wellness programs.</li>
                </ul>
            </div>

            <!-- Open Positions -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Current Job Openings</h2>
                <div class="space-y-6">
                    <!-- Job Listing 1 -->
                    <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold">Software Engineer</h3>
                        <p class="text-gray-400 text-sm mb-4">Location: Mumbai, Maharashtra</p>
                        <p class="text-gray-300 mb-4">
                            As a Software Engineer at JustDial, you’ll work on designing and developing scalable solutions that drive the success of our platform. You’ll be part of an agile team working with cutting-edge technologies.
                        </p>
                        <a href="#" class="text-blue-500 hover:text-blue-400 font-medium text-sm">View Job Details</a>
                    </div>

                    <!-- Job Listing 2 -->
                    <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold">Marketing Manager</h3>
                        <p class="text-gray-400 text-sm mb-4">Location: Bangalore, Karnataka</p>
                        <p class="text-gray-300 mb-4">
                            We are looking for a Marketing Manager to drive our brand initiatives and digital marketing campaigns. You will work closely with cross-functional teams to enhance our platform’s reach and user engagement.
                        </p>
                        <a href="#" class="text-blue-500 hover:text-blue-400 font-medium text-sm">View Job Details</a>
                    </div>

                    <!-- Job Listing 3 -->
                    <div class="bg-gray-800 text-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-xl font-semibold">Customer Support Executive</h3>
                        <p class="text-gray-400 text-sm mb-4">Location: Remote</p>
                        <p class="text-gray-300 mb-4">
                            Join our customer support team and help users navigate our platform. This role requires excellent communication skills, patience, and a passion for helping others.
                        </p>
                        <a href="#" class="text-blue-500 hover:text-blue-400 font-medium text-sm">View Job Details</a>
                    </div>
                </div>
            </div>

            <!-- Benefits Section -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Employee Benefits</h2>
                <ul class="list-inside list-disc text-gray-600">
                    <li>Health & Dental Insurance</li>
                    <li>Paid Time Off (PTO)</li>
                    <li>Retirement Savings Plan</li>
                    <li>Employee Stock Options</li>
                    <li>Wellness Programs & Gym Membership</li>
                </ul>
            </div>

            <!-- How to Apply -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">How to Apply</h2>
                <p class="text-gray-600 mb-4">
                    To apply for any of the listed positions, please send your resume and a cover letter to our HR department at:
                </p>
                <p class="text-gray-600 mb-4">
                    <strong>Email:</strong> <a href="mailto:careers@justdial.com" class="text-blue-500 hover:underline">careers@justdial.com</a>
                </p>
                <p class="text-gray-600">
                    We look forward to hearing from you and welcoming passionate individuals to our team!
                </p>
            </div>
        </div>
    </section>
@endsection
