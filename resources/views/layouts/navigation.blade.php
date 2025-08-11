<nav class="bg-black/50 backdrop-blur-md text-white fixed w-full top-0 z-50 font-body transition-all duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <div class="text-xl font-heading font-bold tracking-wide text-[#FEC601]">
        OFW TULONG
      </div>

      <!-- Mobile Menu Toggle -->
      <div class="md:hidden">
        <button id="nav-toggle" class="focus:outline-none text-white">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>

      <!-- Desktop Menu -->
      <div id="nav-menu" class="hidden md:flex space-x-6 items-center font-medium">
        <button data-target="#home" class="hover:text-[#FEC601] transition duration-300">Home</button>
        <button data-target="#about" class="hover:text-[#FEC601] transition duration-300">About</button>
        <button data-target="#services" class="hover:text-[#FEC601] transition duration-300">Services</button>

        <!-- Help Centre Dropdown (Desktop) -->
        <div class="relative group">
          <button class="hover:text-[#FEC601] transition duration-300">Help Centre</button>
            <div class="absolute hidden group-hover:block bg-white text-[#0B1D2A] rounded shadow-lg  z-10 min-w-[200px]">
            <ul class="py-2 px-4 space-y-1 text-sm">
              <li>
                <a href="{{ route('contact') }}">
                  <button class="w-full text-left hover:text-[#FEC601]">Contact Us</button>
                </a>
              </li>
              <li>
                <a href="{{ route('membership') }}">
                  <button class="w-full text-left hover:text-[#FEC601]">Membership</button>
                </a>
              </li>
              <li>
                <a href="{{ route('request.assistance') }}">
                  <button class="w-full text-left hover:text-[#FEC601]">Request Assistance</button>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Menu Dropdown -->
    <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2 text-white font-medium">
      <button data-target="#home" class="block hover:text-[#FEC601]">Home</button>
      <button data-target="#about" class="block hover:text-[#FEC601]">About</button>
      <button data-target="#services" class="block hover:text-[#FEC601]">Services</button>

      <details class="bg-black/30 rounded-lg px-4 py-2">
        <summary class="cursor-pointer hover:text-[#FEC601]">Help Centre</summary>
        <div class="pl-2 space-y-2 mt-2 text-sm">
          <a href="{{ route('contact') }}">
            <button class="block text-left w-full hover:text-[#3ABEF9]">Contact Us</button>
          </a>
          <a href="{{ route('membership') }}">
            <button class="block text-left w-full hover:text-[#3ABEF9]">Membership</button>
          </a>
          <a href="{{ route('request.assistance') }}">
            <button class="block text-left w-full hover:text-[#3ABEF9]">Request Assistance</button>
          </a>
        </div>
      </details>
    </div>
  </div>
</nav>
