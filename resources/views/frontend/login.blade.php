@extends('components.main')

@section('content')
<section class="min-h-screen flex items-center justify-center bg-gray-50 px-4">
    <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-xl border border-gray-100">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center font-[Poppins]">Welcome Back 👋</h2>

        <form action="#" method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" placeholder="you@example.com" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" placeholder="••••••••" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex justify-between text-sm">
                <label class="flex items-center gap-2">
                    <input type="checkbox" class="accent-blue-600">
                    Remember me
                </label>
                <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition-all">
                Login
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 mt-6">Don't have an account?
            <a href="/signup" class="text-orange-500 font-medium hover:underline">Sign up</a>
        </p>
    </div>
</section>

@endsection
