<x-base-layout>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-orange-100 dark:bg-dots-lighter dark:bg-orange-100 selection:bg-red-500 selection:text-white">
        <div class="text-center">
            <h1 class="text-2xl font-bold">Welcome to Our Application</h1>

            @auth
            <p class="mt-4">Hello, {{ Auth::user()->name }}! You have access to additional content.</p>
            @else
            <p class="mt-4">You are currently a guest. Please log in or register to access more features.</p>
                <a href="{{ route('login') }}" class="text-blue-500">Log in</a> or
                <a href="{{ route('register') }}" class="text-blue-500">Register</a>
            @endauth
        </div>
    </div>
</x-base-layout>
