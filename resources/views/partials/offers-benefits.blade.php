<section id="benefits" class="scroll-mt-16 bg-[#F9FAFB] py-10 font-body">
  <div class="max-w-6xl mx-auto px-6">

    <!-- Section Title -->
    <div class="border-l-4 border-[#FEC601] pl-4 mb-6">
      <h2 class="text-3xl font-heading font-bold text-[#0B1D2A] mb-4 text-left" data-aos="fade-up">
        Offers & Benefits for OFWs and Their Families
      </h2>
    </div>
    <p class="text-base text-gray-700 mb-12 max-w-2xl" data-aos="fade-up" data-aos-delay="100">
      Through modern systems and compassionate legal support, OFW Tulong provides life-saving assistance to distressed overseas Filipinos. We aim to protect their rights, ensure their welfare, and guide them and their families toward a secure future.
    </p>

    <div class="flex flex-col md:flex-row items-start md:items-center gap-10" data-aos="fade-up" data-aos-delay="200">

      <div class="md:w-1/2 hidden md:flex justify-center items-center">
        <div class="relative w-full max-w-md aspect-video">
          
          <video
            id="videoForward"
            src="/images/assistance.mp4"
            autoplay
            muted
            playsinline
            class="absolute top-0 left-0 w-full h-full object-contain"></video>

          <video
            id="videoReverse"
            src="/images/assistance-reverse.mp4"
            autoplay
            muted
            playsinline
            class="absolute top-0 left-0 w-full h-full object-contain hidden"></video>
        </div>
      </div>

      <div class="md:w-1/2 space-y-8">

        <div>
          <h3 class="text-lg font-semibold text-[#0B1D2A] mb-2 flex items-center">
            <i data-lucide="life-buoy" class="w-5 h-5 text-[#FEC601] mr-2"></i>
            Rescue & Safe Repatriation
          </h3>
          <p class="text-base text-gray-700">
            We coordinate the safe return of OFWs in distress — including victims of trafficking, abuse, or unjust detention.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-semibold text-[#0B1D2A] mb-2 flex items-center">
            <i data-lucide="gavel" class="w-5 h-5 text-[#FEC601] mr-2"></i>
            Legal Counseling & Emotional Support
          </h3>
          <p class="text-base text-gray-700">
            Certified legal experts and counselors offer assistance in disputes, mental health, and crisis recovery.
          </p>
        </div>

        <div>
          <h3 class="text-lg font-semibold text-[#0B1D2A] mb-2 flex items-center">
            <i data-lucide="monitor" class="w-5 h-5 text-[#FEC601] mr-2"></i>
            OFW Monitoring System
          </h3>
          <p class="text-base text-gray-700">
            A tech-enabled platform that tracks deployment and oversees employer conduct to ensure safety and transparency.
          </p>
        </div>

      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const forward = document.getElementById("videoForward");
    const reverse = document.getElementById("videoReverse");

    forward.playbackRate = 0.5;
    reverse.playbackRate = 0.5;

    forward.classList.remove("hidden");
    reverse.classList.add("hidden");

    forward.addEventListener("ended", function() {
      forward.classList.add("hidden");
      reverse.currentTime = 0;
      reverse.classList.remove("hidden");
      reverse.play();
    });

    reverse.addEventListener("ended", function() {
      reverse.classList.add("hidden");
      forward.currentTime = 0;
      forward.classList.remove("hidden");
      forward.play();
    });
  });
</script>