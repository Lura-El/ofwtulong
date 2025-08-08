<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Login</title>
  @vite('resources/css/app.css') {{-- Tailwind CSS --}}
  <script src="https://kit.fontawesome.com/a2e0b6f27c.js" crossorigin="anonymous"></script>
</head>
<body class="min-h-screen w-full bg-gradient-to-br from-[#BBCB2F] via-[#FEFA95] to-[#D3E6D6] flex items-center justify-center p-4 font-body">

  <!-- Centered Login Card -->
  <div class="w-full max-w-md bg-white rounded-xl shadow-2xl p-8">

    <!-- Header -->
    <h2 class="text-3xl font-bold text-center mb-6 text-[#021908]">Admin Login</h2>

    {{-- Error Message --}}
    @if (session('error'))
      <div class="bg-red-100 text-red-700 text-sm p-3 rounded mb-4">
        {{ session('error') }}
      </div>
    @endif

    <!-- Login Form -->
    <form method="POST" action="{{ route('admin.login') }}" class="space-y-5">
      @csrf

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium mb-1 text-[#0B1D2A]">Email Address</label>
        <input 
          id="email" 
          name="email" 
          type="email" 
          placeholder="admin@example.com"
          class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#3ABEF9] text-[#0B1D2A]"
          required autofocus>
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium mb-1 text-[#0B1D2A]">Password</label>
        <input 
          id="password" 
          name="password" 
          type="password" 
          placeholder="••••••••"
          class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#3ABEF9] text-[#0B1D2A]"
          required>
      </div>

      <!-- Submit Button -->
      <div class="pt-2">
        <button 
          type="submit"
          class="w-full py-2 px-6 rounded-md bg-[#FEC601] hover:bg-[#FFE45C] text-[#021908] font-semibold transition duration-200">
          Login
        </button>
      </div>
    </form>
  </div>

</body>
</html>
