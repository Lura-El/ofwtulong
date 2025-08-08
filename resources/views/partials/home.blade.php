<section id="home" class="relative w-full h-screen overflow-hidden flex items-center justify-center text-white font-body">

  <video id="heroVideoForward" muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
    <source src="{{ asset('Ofw-hands.mp4') }}" type="video/mp4">
  </video>

  <video id="heroVideoReverse" muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0 hidden">
    <source src="{{ asset('Ofw-hands-reverse.mp4') }}" type="video/mp4">
  </video>

  <div class="absolute top-0 left-0 w-full h-full bg-black/60 z-10"></div>

  <div class="absolute top-0 left-1/2 transform -translate-x-1/2 z-20 w-48 h-1 bg-gradient-to-r from-accent via-support to-accent animate-pulse rounded-full shadow-md"></div>

  <!-- Main Content -->
  <div class="relative z-20 text-center max-w-3xl px-6 py-12" data-aos="fade-up">
    <p class="uppercase tracking-widest text-sm text-support mb-4" data-aos="fade-down" data-aos-delay="200">
      United in Service. Empowering OFWs.
    </p>

    <h1 class="text-4xl md:text-5xl font-bold font-heading text-white mb-6 drop-shadow-lg" data-aos="fade-up" data-aos-delay="400">
      OFW Serbisyo't Tulong
    </h1>

    <p class="text-base md:text-base text-white leading-relaxed mb-8 drop-shadow" data-aos="fade-up" data-aos-delay="600">
      An online public service platform and future podcast program.<br class="hidden md:inline" />
      <span class="text-support font-medium">OFW Tulong</span> is a non-governmental initiative dedicated to helping manning agencies—both land-based and sea-based—monitor and support their deployed Filipino migrant workers effectively and compassionately.
    </p>

    <a href="#learn-more"
      class="inline-block bg-accent text-bg font-semibold px-8 py-3 rounded-lg shadow-lg hover:bg-support hover:text-white transition-all duration-300"
      data-aos="zoom-in" data-aos-delay="800">
      Learn More
    </a>
  </div>

  <div class="absolute bottom-8 right-8 w-16 h-16 bg-accent/30 rounded-full blur-xl opacity-70 animate-pulse z-10 hidden md:block"></div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const forwardVideo = document.getElementById("heroVideoForward");
      const reverseVideo = document.getElementById("heroVideoReverse");


      forwardVideo.play();

      forwardVideo.addEventListener("ended", () => {
        forwardVideo.classList.add("hidden");
        reverseVideo.classList.remove("hidden");
        reverseVideo.play();
      });
      
      reverseVideo.addEventListener("ended", () => {
        reverseVideo.classList.add("hidden");
        forwardVideo.classList.remove("hidden");
        forwardVideo.play();
      });
    });
  </script>
</section>