<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite('resources/css/app.css') {{-- Tailwind CSS --}}
    <script src="https://kit.fontawesome.com/a2e0b6f27c.js" crossorigin="anonymous"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#2c3e50] to-[#4ca1af]">

    <div class="w-full max-w-md bg-white bg-opacity-10 backdrop-blur-md rounded-xl shadow-2xl p-8 text-white">
        <h2 class="text-3xl font-semibold text-center mb-6">Admin Login</h2>

        {{-- Error Message --}}
        @if (session('error'))
            <div class="bg-red-500/80 text-white text-sm p-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            {{-- Email --}}
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-1">Email Address</label>
                <input id="email" name="email" type="email" placeholder="admin@example.com"
                    class="w-full px-4 py-2 rounded-lg bg-white bg-opacity-20 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:bg-opacity-30"
                    required autofocus>
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium mb-1">Password</label>
                <input id="password" name="password" type="password" placeholder="••••••••"
                    class="w-full px-4 py-2 rounded-lg bg-white bg-opacity-20 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:bg-opacity-30"
                    required>
            </div>

            {{-- Remember Me --}}
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="remember" name="remember"
                       class="h-4 w-4 text-blue-500 focus:ring-blue-400 bg-white bg-opacity-20 border-gray-300 rounded">
                <label for="remember" class="ml-2 text-sm">Remember Me</label>
            </div>

            {{-- Submit Button --}}
            <div class="flex justify-end">
                <button type="submit"
                        class="px-6 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 transition text-white font-medium">
                    Login
                </button>
            </div>
        </form>
    </div>

</body>
</html>
