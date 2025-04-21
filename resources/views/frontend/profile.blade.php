@extends('components.main')

@section('content')
    <!-- Google Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <section class="py-10 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Profile Header Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden mb-6">
                <!-- Cover Photo -->
                <div class="h-40 bg-gradient-to-r from-amber-600 to-amber-700 relative">
                    <div class="absolute right-4 top-4">
                        <button
                            class="bg-white bg-opacity-20 hover:bg-opacity-30 text-amber-600 w-10 h-10 rounded-full flex items-center justify-center">
                            <span class="material-symbols-outlined">photo_camera</span>
                        </button>
                    </div>
                </div>

                <div class="p-6 md:p-8 relative">
                    <!-- Profile Photo -->
                    <div
                        class="absolute -top-16 left-8 w-28 h-28 rounded-full overflow-hidden border-4 border-white shadow-md">
                        <img src="{{ asset('asset/images/bussines.jpg') }}" alt="User Profile"
                            class="w-full h-full object-cover">
                    </div>

                    <div class="mt-12 md:mt-0 md:ml-36 flex flex-col md:flex-row md:items-center md:justify-between">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800">John Doe</h2>
                            <div class="flex items-center mt-1 text-gray-600">
                                <span class="material-symbols-outlined text-sm mr-1">mail</span>
                                <span class="text-sm">john.doe@example.com</span>
                                <span class="mx-2 text-gray-300">|</span>
                                <span class="material-symbols-outlined text-sm mr-1">phone</span>
                                <span class="text-sm">+91 98765 43210</span>
                            </div>
                        </div>

                        <div class="mt-4 md:mt-0 flex gap-3">
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 text-sm transition-colors">
                                <span class="material-symbols-outlined text-base mr-1">edit</span> Edit Profile
                            </a>
                            <a href="#change-password"
                                class="inline-flex items-center px-4 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-100 text-sm transition-colors">
                                <span class="material-symbols-outlined text-base mr-1">lock</span> Change Password
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Tabs & Content -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <!-- Tabs -->
                <div class="flex border-b border-gray-200">
                    <button class="tab-btn px-6 py-4 text-amber-600 border-b-2 border-amber-600 font-medium"
                        onclick="openTab(event, 'personal')">
                        <span class="material-symbols-outlined align-middle mr-1">person</span> Personal Info
                    </button>
                    <button class="tab-btn px-6 py-4 text-gray-500 hover:text-gray-700 font-medium"
                        onclick="openTab(event, 'activity')">
                        <span class="material-symbols-outlined align-middle mr-1">history</span> Activity
                    </button>
                    <button class="tab-btn px-6 py-4 text-gray-500 hover:text-gray-700 font-medium"
                        onclick="openTab(event, 'settings')">
                        <span class="material-symbols-outlined align-middle mr-1">settings</span> Settings
                    </button>
                    <button class="tab-btn px-6 py-4 text-gray-500 hover:text-gray-700 font-medium"
                        onclick="openTab(event, 'change-password')">
                        <span class="material-symbols-outlined align-middle mr-1">lock</span> Change Password
                    </button>
                </div>

                <!-- Personal Info Tab Content -->
                <div id="personal" class="tab-content block p-6 md:p-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Contact Information</h3>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <span class="material-symbols-outlined text-gray-400 mt-1 mr-3">home</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Address</p>
                                        <p class="text-gray-600">101, Green Street, Andheri West, Mumbai, Maharashtra -
                                            400053</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <span class="material-symbols-outlined text-gray-400 mt-1 mr-3">mail</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Email</p>
                                        <p class="text-gray-600">john.doe@example.com</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <span class="material-symbols-outlined text-gray-400 mt-1 mr-3">phone</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Phone</p>
                                        <p class="text-gray-600">+91 98765 43210 (Primary)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-4">Personal Details</h3>
                            <div class="space-y-4">
                                <div class="flex items-start">
                                    <span class="material-symbols-outlined text-gray-400 mt-1 mr-3">cake</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Date of Birth</p>
                                        <p class="text-gray-600">12th March 1995 (29 years)</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <span class="material-symbols-outlined text-gray-400 mt-1 mr-3">wc</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Gender</p>
                                        <p class="text-gray-600">Male</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <span class="material-symbols-outlined text-gray-400 mt-1 mr-3">calendar_today</span>
                                    <div>
                                        <p class="font-medium text-gray-800">Member Since</p>
                                        <p class="text-gray-600">January 2024 (3 months)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">About Me</h3>
                        <p class="text-gray-600 mb-4">
                            Frontend developer with 5+ years of experience in creating responsive and user-friendly web
                            applications. Passionate about UI/UX design and modern web technologies.
                        </p>
                    </div>
                </div>

                <!-- Activity Tab Content -->
                <div id="activity" class="tab-content hidden p-6 md:p-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Activity</h3>
                    <div class="space-y-4">
                        <div class="border-l-2 border-amber-600 pl-4 py-2">
                            <div class="flex justify-between">
                                <p class="font-medium text-gray-800">Profile Updated</p>
                                <p class="text-sm text-gray-500">Today, 10:30 AM</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 text-center">
                        <button class="text-amber-600 hover:text-amber-700 font-medium">
                            View All Activity
                        </button>
                    </div>
                </div>

                <!-- Settings Tab Content -->
                <div id="settings" class="tab-content hidden p-6 md:p-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Account Settings</h3>
                    <div class="space-y-6">
                        <div class="flex justify-between items-center pb-4 border-b border-gray-200">
                            <div>
                                <p class="font-medium text-gray-800">Email Notifications</p>
                            </div>
                            <label class="relative inline-block w-12 h-6">
                                <input type="checkbox" class="opacity-0 w-0 h-0" checked>
                                <span
                                    class="slider absolute cursor-pointer top-0 left-0 right-0 bottom-0 bg-amber-600 rounded-full">
                                    <span
                                        class="absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition-transform duration-200 ease-in-out transform translate-x-6"></span>
                                </span>
                            </label>
                        </div>

                        <div class="pt-2">
                            <button
                                class="w-full md:w-auto px-6 py-3 bg-red-100 text-red-600 hover:bg-red-200 rounded-lg font-medium transition-colors">
                                <span class="material-symbols-outlined align-middle mr-1">logout</span> Sign Out of All
                                Devices
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Change Password Form -->
                <div id="change-password" class="tab-content hidden p-6 md:p-8">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Change Password</h3>
                    <form action="#" method="POST" class="space-y-4">
                        <div>
                            <label for="current_password" class="block text-sm font-medium text-gray-800">Current
                                Password</label>
                            <input type="password" id="current_password" name="current_password"
                                class="mt-2 p-3 w-full border border-gray-300 rounded-lg"
                                placeholder="Enter current password" required>
                        </div>
                        <div>
                            <label for="new_password" class="block text-sm font-medium text-gray-800">New Password</label>
                            <input type="password" id="new_password" name="new_password"
                                class="mt-2 p-3 w-full border border-gray-300 rounded-lg" placeholder="Enter new password"
                                required>
                        </div>
                        <div>
                            <label for="confirm_password" class="block text-sm font-medium text-gray-800">Confirm New
                                Password</label>
                            <input type="password" id="confirm_password" name="confirm_password"
                                class="mt-2 p-3 w-full border border-gray-300 rounded-lg"
                                placeholder="Confirm new password" required>
                        </div>
                        <button type="submit"
                            class="w-full md:w-auto px-6 py-3 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors">
                            Save Changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <style>
        .slider {
            transition: background-color 0.4s;
        }

        input:checked+.slider {
            background-color: #3B82F6;
        }

        input:checked+.slider span {
            transform: translateX(6px);
        }
    </style>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tabbuttons;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.add("hidden");
                tabcontent[i].classList.remove("block");
            }

            tabbuttons = document.getElementsByClassName("tab-btn");
            for (i = 0; i < tabbuttons.length; i++) {
                tabbuttons[i].classList.remove("text-amber-600", "border-b-2", "border-amber-600");
                tabbuttons[i].classList.add("text-gray-500");
            }

            document.getElementById(tabName).classList.remove("hidden");
            document.getElementById(tabName).classList.add("block");
            evt.currentTarget.classList.add("text-amber-600", "border-b-2", "border-amber-600");
            evt.currentTarget.classList.remove("text-gray-500");
        }
    </script>
@endsection
