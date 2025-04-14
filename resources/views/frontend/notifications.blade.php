@extends('components.main')

@section('content')

<!-- Notification Page -->
<section class="bg-gray-50 min-h-screen py-12">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Page Heading -->
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Notifications</h2>
                <button class="text-sm text-blue-600 hover:underline">Mark all as read</button>
            </div>

            <!-- Notification List -->
            <div class="space-y-4">
                <!-- Unread Notification -->
                <div class="flex items-start bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition-shadow border-l-4 border-blue-600">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-3 h-3 rounded-full bg-blue-600"></div>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-gray-800 font-medium">Your business profile has been approved!</p>
                        <p class="text-sm text-gray-500">Just now</p>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:underline font-medium">View</a>
                </div>

                <!-- Another Unread -->
                <div class="flex items-start bg-white p-5 rounded-xl shadow-sm hover:shadow-md transition-shadow border-l-4 border-yellow-500">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-gray-800 font-medium">You received a new review on your listing.</p>
                        <p class="text-sm text-gray-500">15 minutes ago</p>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:underline font-medium">Check</a>
                </div>

                <!-- Read Notification -->
                <div class="flex items-start bg-gray-100 p-5 rounded-xl shadow-sm border-l-4 border-gray-400">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-3 h-3 rounded-full bg-gray-400"></div>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-gray-700">Subscription plan has been successfully updated.</p>
                        <p class="text-sm text-gray-500">2 hours ago</p>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:underline font-medium">Details</a>
                </div>

                <!-- Read Notification -->
                <div class="flex items-start bg-gray-100 p-5 rounded-xl shadow-sm border-l-4 border-gray-400">
                    <div class="flex-shrink-0 mt-1">
                        <div class="w-3 h-3 rounded-full bg-gray-400"></div>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-gray-700">Your payment for Premium Plan was successful.</p>
                        <p class="text-sm text-gray-500">1 day ago</p>
                    </div>
                    <a href="#" class="text-sm text-blue-600 hover:underline font-medium">Receipt</a>
                </div>
            </div>

            <!-- No Notifications Example -->

            <div class="text-center py-20">
                <img src="https://www.svgrepo.com/show/13656/notification.svg" alt="No notifications"
                     class="h-32 mx-auto mb-6 opacity-50">
                <p class="text-gray-500 text-lg">You're all caught up!</p>
            </div>
           

        </div>
    </div>
</section>

@endsection
