<section id="learn-more" class="scroll-mt-50 bg-[#F9FAFB] py-20 px-6 text-left font-body text-sm" x-data="{ showMore: false }">
  <div class="max-w-5xl mx-auto space-y-6">

    <!-- Heading -->
    <h2 class="text-3xl font-heading font-bold text-[#0B1D2A]" data-aos="fade-right">
      Learn More
    </h2>

    <!-- Introduction Paragraphs -->
    <p class="text-base text-[#0B1D2A] leading-relaxed" data-aos="fade-up" data-aos-delay="200">
      <span class="font-semibold text-[#FEC601]">OFW Tulong</span> is a public service platform launched to support Filipino migrant workers around the world. Founded by a passionate advocate, this initiative aims to amplify the voices of overseas Filipinos, provide direct support, and create a digital space where their needs are heard and addressed.
    </p>
    <p class="text-base text-[#0B1D2A] leading-relaxed" data-aos="fade-up" data-aos-delay="300">
      From helping families of distressed workers to sharing inspirational stories of OFW journeys, OFW Tulong serves as a bridge between the Filipino diaspora and responsive, compassionate services at home.
    </p>

    <!-- Read More / Collapse Section -->
    <div class="mt-6" data-aos="fade-up" data-aos-delay="400">
      <div class="bg-white border border-[#D3E6D6] rounded-lg p-6 shadow-sm transition-all duration-300">

        <!-- Toggle Button -->
        <button
          @click="showMore = !showMore"
          class="text-sm text-[#0B1D2A] font-semibold flex items-center hover:underline">
          <svg x-show="!showMore" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1 text-[#FEC601]" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 5v14M5 12h14" />
          </svg>
          <svg x-show="showMore" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1 text-[#FEC601]" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14" />
          </svg>
          <span x-text="showMore ? 'Show Less' : 'Read More'"></span>
        </button>

        <!-- Expanded Content -->
        <div x-show="showMore" x-transition class="mt-4 space-y-4 text-[#0B1D2A] text-base leading-relaxed">
          <p>
            In May 2023, OFW Tulong was given the opportunity to host a daily podcast program through
            <span class="font-semibold text-[#3ABEF9]">Media House Express</span>, the country's first internet-based radio and television platform. The show airs Monday to Friday, from 6:00 PM to 7:00 PM (Philippine Time).
          </p>
          <p>
            The program is dedicated to OFWs and their families, providing a space to raise concerns, share victories, and access assistance. It also highlights successful stories and allows cooperatives and community organizations to introduce their advocacies.
          </p>
          <p>
            The partnership with Media House Express allows OFW Tulong to reach more Filipino workers around the world, strengthening its mission of compassion, awareness, and action.
          </p>
        </div>
      </div>
    </div>

    <!-- Mission & Vision -->
    <div class="grid md:grid-cols-2 gap-10 mt-16" data-aos="fade-up" data-aos-delay="500">

      <!-- Mission -->
      <div class="flex items-start space-x-4">
        <img src="https://static.thenounproject.com/png/5054149-512.png" alt="Mission Icon" class="w-12 h-12 flex-shrink-0">
        <div>
          <h3 class="text-2xl font-bold text-[#0B1D2A] mb-2">Mission</h3>
          <ul class="list-none pl-0 space-y-2 text-[#0B1D2A] text-base">
            <li class="flex items-start gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-[#FEC601] mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 13l4 4L19 7" />
              </svg>
              Provide timely support and advocacy for distressed OFWs and their families
            </li>
            <li class="flex items-start gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-[#FEC601] mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 13l4 4L19 7" />
              </svg>
              Serve as a trusted platform to share challenges and raise awareness
            </li>
            <li class="flex items-start gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-[#FEC601] mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 13l4 4L19 7" />
              </svg>
              Collaborate with organizations to uphold OFW rights and welfare
            </li>
            <li class="flex items-start gap-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-[#FEC601] mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 13l4 4L19 7" />
              </svg>
              Empower migrant workers through digital access and reliable information
            </li>
          </ul>

        </div>
      </div>

      <!-- Vision -->
      <div class="flex items-start space-x-4">
        <img src="https://static.thenounproject.com/png/7847493-512.png" alt="Vision Icon" class="w-12 h-12 flex-shrink-0">
        <div>
          <h3 class="text-2xl font-bold text-[#0B1D2A] mb-2">Vision</h3>
          <li class="flex items-start gap-2 text-base text-[#0B1D2A]">
            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-5 h-5 text-[#FEC601] mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 13l4 4L19 7" />
            </svg>
            To be a trusted digital sanctuary where every Filipino migrant worker is heard, valued, and connected to compassionate services—building a global community anchored in unity, awareness, and care.
          </li>

        </div>
      </div>
    </div>
  </div>
</section>