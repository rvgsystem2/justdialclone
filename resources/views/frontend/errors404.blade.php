@extends('components.main')

@section('content')
    <section class="min-h-screen bg-gradient-to-b from-blue-50 to-white py-24 px-4 sm:px-6 lg:px-8 flex items-center">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                <div class="text-center lg:text-left max-w-2xl">
                    <div class="inline-flex items-center justify-center lg:justify-start mb-6">
                        <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                            <span class="material-icons text-blue-600 text-3xl">error_outline</span>
                        </div>
                        <span class="text-lg font-medium text-blue-600">Error 404</span>
                    </div>

                    <h1 class="text-5xl sm:text-6xl md:text-7xl font-extrabold text-gray-900 mb-6 leading-tight">
                        Lost in <span class="text-blue-600">Space</span>?
                    </h1>

                    <p class="text-xl text-gray-600 mb-8">
                        The page you're looking for seems to have drifted off into the cosmos.
                        Don't worry, we'll help you navigate back home.
                    </p>

                    <div
                        class="flex flex-col sm:flex-row justify-center lg:justify-start space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="{{ route('home') }}"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl transition-all flex items-center justify-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                            <span class="material-icons mr-3">home</span>
                            Back to Home
                        </a>
                        <a href="{{ route('contact') }}"
                            class="border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-xl hover:bg-blue-50 transition-all flex items-center justify-center shadow-sm hover:shadow-md">
                            <span class="material-icons mr-3">support_agent</span>
                            Need Help?
                        </a>
                    </div>
                </div>

                <div class="w-full max-w-xl">
                    <!-- Illustration concept: Astronaut floating in space -->
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 500" class="w-full h-auto">
                        <!-- Space background -->
                        <rect width="600" height="500" fill="#0F172A" rx="12" ry="12" />

                        <!-- Stars -->
                        <circle cx="50" cy="80" r="1.5" fill="#fff" opacity="0.8" />
                        <circle cx="120" cy="150" r="1" fill="#fff" opacity="0.6" />
                        <circle cx="300" cy="50" r="2" fill="#fff" opacity="0.9" />
                        <circle cx="400" cy="120" r="1.5" fill="#fff" opacity="0.7" />
                        <circle cx="550" cy="80" r="1" fill="#fff" opacity="0.6" />
                        <circle cx="200" cy="200" r="2" fill="#fff" opacity="0.8" />

                        <!-- Planet -->
                        <circle cx="450" cy="150" r="80" fill="#1E40AF" opacity="0.2" />
                        <circle cx="450" cy="150" r="60" fill="#1E40AF" opacity="0.3" />
                        <circle cx="450" cy="150" r="40" fill="#1E40AF" opacity="0.4" />

                        <!-- Astronaut floating -->
                        <circle cx="200" cy="250" r="30" fill="#E5E7EB" /> <!-- Helmet -->
                        <circle cx="200" cy="245" r="20" fill="#F9FAFB" /> <!-- Visor -->
                        <ellipse cx="200" cy="320" rx="25" ry="40" fill="#E5E7EB" /> <!-- Body -->
                        <path d="M170 300 L140 330 M230 300 L260 330" stroke="#E5E7EB" stroke-width="8"
                            stroke-linecap="round" /> <!-- Arms -->
                        <path d="M190 360 L190 400 M210 360 L210 400" stroke="#E5E7EB" stroke-width="8"
                            stroke-linecap="round" /> <!-- Legs -->

                        <!-- 404 text floating -->
                        <text x="300" y="400" font-family="Arial" font-size="120" font-weight="bold" fill="none"
                            stroke="#1E40AF" stroke-width="2" opacity="0.2">404</text>

                        <!-- Connection line from astronaut to home button (conceptual) -->
                        <path d="M230 250 Q 300 200 350 150" stroke="#1E40AF" stroke-width="2" stroke-dasharray="5,5"
                            fill="none" opacity="0.5" />
                        <circle cx="350" cy="150" r="8" fill="#1E40AF" opacity="0.7" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        svg circle[fill="#E5E7EB"] {
            animation: float 6s ease-in-out infinite;
        }
    </style>
@endsection
