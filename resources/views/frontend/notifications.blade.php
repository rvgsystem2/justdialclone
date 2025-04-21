@extends('components.main')

@section('content')
    <!-- Notification Page -->
    <section class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <!-- Page Heading with Filter Options -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">Notifications</h2>
                        <p class="text-sm text-gray-500 mt-1">Manage your alerts and updates</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <select
                                class="appearance-none bg-white border border-gray-300 rounded-lg py-2 pl-3 pr-8 text-sm focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-amber-600">
                                <option>All Notifications</option>
                                <option>Unread Only</option>
                                <option>System</option>
                                <option>Reviews</option>
                                <option>Payments</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <i class="material-icons text-gray-700">arrow_drop_down</i>
                            </div>
                        </div>
                        <button
                            class="text-sm bg-amber-600 hover:bg-amber-700 text-white px-3 py-2 rounded-lg transition-colors">
                            Mark all as read
                        </button>
                    </div>
                </div>

                <!-- Notification List -->
                <div class="space-y-3">
                    <!-- Unread Notification with Icon -->
                    <div
                        class="relative flex items-start bg-white p-5 rounded-xl shadow-xs hover:shadow-sm transition-all border-l-4 border-amber-600 group">
                        <div class="flex-shrink-0 mr-4">
                            <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center">
                                <i class="material-icons h-5 w-5 text-amber-600">check_circle</i>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900 truncate">Your business profile has been approved!
                            </p>
                            <p class="text-sm text-gray-500 mt-1">Your profile is now visible to customers. Start getting
                                discovered!</p>
                            <p class="text-xs text-gray-400 mt-2">Just now</p>
                        </div>
                        <div class="ml-4 flex flex-col items-end">
                            <button class="text-sm text-amber-600 hover:text-blue-800 font-medium mb-2">View</button>
                            <button
                                class="text-gray-400 hover:text-gray-600 opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="material-icons h-4 w-4 text-gray-400">close</i>
                            </button>
                        </div>
                        <div class="absolute top-3 left-3 w-2 h-2 rounded-full bg-amber-600"></div>
                    </div>

                    <!-- Unread Notification with Warning -->
                    <div
                        class="relative flex items-start bg-white p-5 rounded-xl shadow-xs hover:shadow-sm transition-all border-l-4 border-yellow-500 group">
                        <div class="flex-shrink-0 mr-4">
                            <div class="h-10 w-10 rounded-full bg-yellow-100 flex items-center justify-center">
                                <i class="material-icons h-5 w-5 text-yellow-600">warning</i>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900 truncate">You received a new review on "Café
                                Delight"</p>
                            <p class="text-sm text-gray-500 mt-1">Customer left a 4-star rating with comments about your
                                service</p>
                            <p class="text-xs text-gray-400 mt-2">15 minutes ago</p>
                        </div>
                        <div class="ml-4 flex flex-col items-end">
                            <button class="text-sm text-amber-600 hover:text-blue-800 font-medium mb-2">Respond</button>
                            <button
                                class="text-gray-400 hover:text-gray-600 opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="material-icons h-4 w-4 text-gray-400">close</i>
                            </button>
                        </div>
                        <div class="absolute top-3 left-3 w-2 h-2 rounded-full bg-yellow-500"></div>
                    </div>

                    <!-- Read Notification -->
                    <div class="relative flex items-start bg-gray-50 p-5 rounded-xl border-l-4 border-gray-300 group">
                        <div class="flex-shrink-0 mr-4">
                            <div class="h-10 w-10 rounded-full bg-gray-200 flex items-center justify-center">
                                <i class="material-icons h-5 w-5 text-gray-500">notifications</i>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-700 truncate">Subscription plan has been successfully
                                updated</p>
                            <p class="text-sm text-gray-500 mt-1">You've been upgraded to the Business Plan with all
                                features</p>
                            <p class="text-xs text-gray-400 mt-2">2 hours ago</p>
                        </div>
                        <div class="ml-4 flex flex-col items-end">
                            <button class="text-sm text-amber-600 hover:text-blue-800 font-medium mb-2">Details</button>
                            <button
                                class="text-gray-400 hover:text-gray-600 opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="material-icons h-4 w-4 text-gray-400">close</i>
                            </button>
                        </div>
                    </div>

                    <!-- Read Notification with Action Button -->
                    <div class="relative flex items-start bg-gray-50 p-5 rounded-xl border-l-4 border-gray-300 group">
                        <div class="flex-shrink-0 mr-4">
                            <div class="h-10 w-10 rounded-full bg-green-100 flex items-center justify-center">
                                <i class="material-icons h-5 w-5 text-green-600">payment</i>
                            </div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium text-gray-700 truncate">Payment for Premium Plan was successful
                            </p>
                            <p class="text-sm text-gray-500 mt-1">Transaction ID: INV-2023-05678 • Amount: $29.99</p>
                            <p class="text-xs text-gray-400 mt-2">1 day ago</p>
                        </div>
                        <div class="ml-4 flex flex-col items-end">
                            <button
                                class="text-sm bg-amber-600 hover:bg-amber-700 text-white px-3 py-1 rounded-md text-xs font-medium mb-2 transition-colors">
                                Download Receipt
                            </button>
                            <button
                                class="text-gray-400 hover:text-gray-600 opacity-0 group-hover:opacity-100 transition-opacity">
                                <i class="material-icons h-4 w-4 text-gray-400">close</i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="mt-8 flex items-center justify-between">
                    <div class="text-sm text-gray-500">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">8</span> of <span
                            class="font-medium">24</span> notifications
                    </div>
                    <div class="flex space-x-2">
                        <button
                            class="px-3 py-1 rounded-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Previous
                        </button>
                        <button
                            class="px-3 py-1 rounded-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Next
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
