<section id="platform" class="scroll-mt-16 bg-[#F9FAFB] py-10 font-body text-sm">
  <div class="max-w-6xl mx-auto px-6" x-data="{ showMore: false }">

    <!-- Section Title -->
    <div class="border-l-4 border-[#FEC601] pl-4 mb-6">
      <h2 class="text-3xl font-heading font-bold text-[#0B1D2A]" data-aos="fade-up">
        What is the Platform and What Are Its Purposes?
      </h2>
    </div>

    <!-- Main Description -->
    <div class="space-y-5 text-[#0B1D2A] leading-relaxed text-base" data-aos="fade-up" data-aos-delay="100">
      <p>
        <strong>OFW Tulong</strong> is a modern public service platform built for overseas Filipino workers. From its beginnings as a Facebook initiative in 2017, it has grown into a national movement that supports OFWs through digital media, direct advocacy, and strong coordination with government agencies.
      </p>
      <p>
        Launched as a podcast in 2023 via Media House Express, the platform shares real stories, offers guidance, and connects distressed OFWs to legal, emotional, and material support. Whether sea-based or land-based, skilled or non-skilled, <strong>OFW Tulong</strong> is dedicated to safeguarding every Filipino working abroad.
      </p>
      <p>
        With a strong network and proven systems, the platform now plays a crucial role in addressing abuse, ensuring fair labor practices, and empowering our modern-day heroes.
      </p>
    </div>

    <!-- Read More / Collapse Section -->
    <div class="mt-6" data-aos="fade-up" data-aos-delay="400">
      <div class="bg-white border border-[#D3E6D6] rounded-lg p-6 shadow-sm transition-all duration-300">

        <!-- Toggle Button -->
        <button
          @click="showMore = !showMore"
          class="text-sm text-[#0B1D2A] font-semibold flex items-center hover:underline">
          <!-- Plus Icon -->
          <svg x-show="!showMore" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1 text-[#FEC601]" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 5v14M5 12h14" />
          </svg>
          <!-- Minus Icon -->
          <svg x-show="showMore" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1 text-[#FEC601]" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14" />
          </svg>
          <span x-text="showMore ? 'Show Less' : 'Read More'"></span>
        </button>

        <!-- Expanded Content -->
        <div x-show="showMore" x-transition class="mt-4 space-y-4 text-[#0B1D2A] text-base leading-relaxed">
          <p>
            <strong>OFW Tulong</strong> monitors the working conditions of OFWs, especially those in domestic roles, to ensure they are safe, respected, and fairly paid. It acts quickly against maltreatment or any form of exploitation.
          </p>
          <p>
            Backed by technology from <strong>YaraMay Computer Maintenance Services (YCMS)</strong>, this platform uses a patented tracking and communication system developed by Engr. Ferdinand “Ibraheem” Lawag Sabado. This ensures real-time support and accurate updates across the globe.
          </p>
          <p>
            The platform’s mission is inspired by <strong>Ramon “Ike” Señeres</strong>, whose tireless advocacy for migrant workers continues to drive its goals today.
          </p>
          <p>
            <strong>OFW Tulong</strong> now serves not only as a support system for distressed workers but also as a strategic partner for government and recruitment agencies to prevent abuse, reduce risks, and save lives abroad.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>