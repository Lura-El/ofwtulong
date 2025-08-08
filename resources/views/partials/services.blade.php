<!-- Services Section -->
<section id="services" class="bg-[#0B1D2A] py-20 font-body">
  <div class="max-w-7xl mx-auto px-4">

    <!-- Header -->
    <h2 class="text-3xl text-center font-heading font-bold text-[#FEC601] relative pb-3" data-aos="fade-down">
      Our services
      <span class="absolute left-1/2 -bottom-1 w-20 h-1 bg-[#F9FAFB] -translate-x-1/2 rounded-full"></span>
    </h2>
    <p class="text-[#F9FAFB] text-center  mb-12 max-w-2xl mx-auto text-base leading-relaxed mt-6" data-aos="fade-up" data-aos-delay="100">
      We are committed to providing vital assistance, advocacy, and support to OFWs and their loved ones around the world.
    </p>

    <!-- Cards Grid -->
    <div id="serviceCards" class="grid grid-cols-1 sm:grid-cols-2 gap-8 mb-12"></div>

    <!-- Button -->
    <div class="text-center" data-aos="zoom-in-up" data-aos-delay="200">
      <button id="seeAllBtn"
        class="bg-[#FEC601] text-[#0B1D2A] px-8 py-3 rounded-full font-medium hover:bg-[#3ABEF9] hover:text-white transition duration-300">
        See All
      </button>
    </div>
  </div>
</section>

<script src="https://unpkg.com/lucide@latest"></script>

<script>
  const services = [{
      title: 'Housing Assistance',
      desc: 'Tinutulungan ang mga pamilya ng OFWs na nakakulong upang makahanap ng ligtas at maayos na tirahan.',
      icon: 'home',
      bg: '/images/housing.jpg'
    },
    {
      title: 'Legal & Psychosocial Aid',
      desc: 'Libreng legal at emosyonal na suporta para sa mga OFWs at kanilang pamilya sa panahon ng krisis.',
      icon: 'gavel',
      bg: '/images/legal.jpg'
    },
    {
      title: 'Livelihood Training',
      desc: 'Pagsasanay sa kabuhayan upang bigyan ng oportunidad ang mga pamilya ng OFWs na magkaroon ng sariling kita.',
      icon: 'briefcase',
      bg: '/images/livelihood.jpg'
    },
    {
      title: 'Prison Monitoring',
      desc: 'Pagsubaybay sa kalagayan ng mga nakakulong na OFWs para sa makatao at makatarungang pagtrato.',
      icon: 'lock',
      bg: '/images/prison.jpg'
    },
    {
      title: 'Family Reunification',
      desc: 'Pagtulong sa muling pagsasama-sama ng mga OFWs at kanilang mga mahal sa buhay.',
      icon: 'users',
      bg: '/images/reunification.jpg'
    },
    {
      title: 'Scholarship Support',
      desc: 'Pagbibigay ng mga iskolarship sa mga anak ng OFWs na nasa mahirap na kalagayan.',
      icon: 'graduation-cap',
      bg: '/images/scholar.jpg'
    },
    {
      title: 'Skills Development',
      desc: 'TESDA training programs para sa mga dependents ng OFWs upang sila ay makahanap ng hanapbuhay.',
      icon: 'wrench',
      bg: '/images/skills.jpg'
    },
    {
      title: 'Support for Bereaved Families',
      desc: 'Pagbibigay tulong-pinansyal at emosyonal sa mga pamilyang naiwan ng mga yumaong OFWs.',
      icon: 'heart',
      bg: '/images/support.jpg'
    }
  ];

  let showingAll = false;

  function renderServices() {
    const container = document.getElementById('serviceCards');
    container.innerHTML = '';
    const displayedServices = showingAll ? services : services.slice(0, 4);

    displayedServices.forEach((service, index) => {
      const card = document.createElement('div');
      card.className = `
        group relative overflow-hidden rounded-2xl shadow-md transition-all duration-500 ease-in-out 
        bg-cover bg-center text-white min-h-[320px] flex items-center justify-center
      `;
      card.style.backgroundImage = `url('${service.bg}')`;
      card.setAttribute('data-aos', 'fade-up');
      card.setAttribute('data-aos-delay', `${index * 100}`);

      card.innerHTML = `
        <!-- Overlay for White Card -->
        <div class="absolute inset-0 bg-white/30 group-hover:bg-[#0B1D2A] transition-all duration-500 ease-in-out z-10 p-6 flex flex-col items-center justify-center text-center rounded-2xl">
          <div class="flex justify-center items-center w-16 h-16 bg-[#FEC601]/20 rounded-full mb-4 group-hover:bg-[#FEC601] transition duration-300">
            <i data-lucide="${service.icon}" class="w-8 h-8 text-[#FEC601] group-hover:text-white transition duration-300"></i>
          </div>
          <h3 class="text-lg sm:text-xl font-semibold text-[#0B1D2A] group-hover:text-[#FEC601] mb-2 transition-all duration-300">
            ${service.title}
          </h3>
          <p class="text-sm text-[#0B1D2A] group-hover:text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500 mt-2 leading-relaxed">
            ${service.desc}
          </p>
        </div>

        <!-- Background image fades out -->
        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/90 transition-all duration-500 ease-in-out z-0"></div>
      `;

      container.appendChild(card);
    });

    lucide.createIcons();
    document.getElementById('seeAllBtn').textContent = showingAll ? 'Show Less' : 'See All';
    AOS.refresh();
  }

  document.getElementById('seeAllBtn').addEventListener('click', () => {
    showingAll = !showingAll;
    renderServices();
  });

  document.addEventListener('DOMContentLoaded', renderServices);
</script>