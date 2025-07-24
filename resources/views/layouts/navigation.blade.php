<nav class="bg-primary text-white shadow sticky top-0 z-50 font-body">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <div class="text-xl font-heading font-bold tracking-wide">
        OFW TULONG
      </div>

      <div class="md:hidden">
        <button id="nav-toggle" class="focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

      <div id="nav-menu" class="hidden md:flex space-x-6 items-center font-medium">
        <button data-target="#home" class="hover:text-support">Home</button>
        <button data-target="#about" class="hover:text-support">About</button>
        <button data-target="#services" class="hover:text-support">Services</button>

        <!-- Help Centre Dropdown -->
        <div class="relative group">
          <button class="hover:text-support">Help Centre</button>
          <div class="absolute hidden group-hover:block bg-white text-primary rounded shadow-lg mt-2 z-10">
            <ul class="py-2 px-4 space-y-1 text-sm">
              <li><a href="{{ route('contact') }}"><button class="w-full text-left hover:text-accent">Contact Us</button></a></li>
              <li><a href="{{ route('membership') }}"><button class="w-full text-left hover:text-accent">Membership</button></a></li>
              <li><a href="{{ route('request.assistance') }}"><button class="w-full text-left hover:text-accent">Request Assistance</button></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2 text-white font-medium">
      <button data-target="#home" class="block">Home</button>
      <button data-target="#about" class="block">About</button>
      <button data-target="#services" class="block">Services</button>

      <details>
        <summary class="cursor-pointer">Help Centre</summary>
        <div class="pl-4 space-y-1 text-sm">
          <a href="{{ route('contact') }}"><button class="block">Contact Us</button></a>
          <a href="{{ route('membership') }}"><button class="block">Membership</button></a>
          <a href="{{ route('request.assistance') }}"></a><button class="block">Request Assistance</button>
        </div>
      </details>
    </div>
  </div>
</nav>
