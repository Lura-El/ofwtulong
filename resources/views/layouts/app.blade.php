<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'OFW Tulong')</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            heading: ['Poppins', 'sans-serif'],
            body: ['Inter', 'sans-serif'],
          },
          colors: {
            primary: '#4682A9',
            accent: '#749BC2',
            support: '#91C8E4',
            bg: '#FFFFFE',
          }
        }
      }
    }
  </script>

  <!-- Fonts and AOS -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  
  <!-- DataTables CSS -->
  <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" />

  <style>
    html { scroll-behavior: smooth; }
    body { overflow-x: hidden; }
  </style>
</head>

<body class="bg-bg text-primary font-body">

  @include('layouts.navigation')

  <main class="container mx-auto px-4 py-6">
    @yield('content')
  </main>

  @include('partials.footer')

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

  <!-- Mobile nav toggle -->
  <script>
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (navToggle && mobileMenu) {
      navToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });
    }
  </script>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
        duration: 800,
        once: false,
        mirror: true
    });
  </script>

  <!-- Scroll to section handler -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('[data-target]').forEach(btn => {
          btn.addEventListener('click', () => {
              const target = btn.getAttribute('data-target');
              const cleanTarget = target.startsWith('#') ? target.slice(1) : target;
              window.location.href = `/${cleanTarget ? '#' + cleanTarget : ''}`;
          });
        });
    });
  </script>

  @stack('scripts')

</body>
</html>
