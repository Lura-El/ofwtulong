<section id="services" class="scroll-mt-8 bg-bg py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-[#4682A9] mb-4 text-center" data-aos="fade-up">Our Services</h2>
        <p class="text-gray-700 text-center mb-12 max-w-2xl mx-auto text-sm" data-aos="fade-up">
        Thus declared, we are dedicated and devoted to provide assistance, guidance, essential support and protection to OFWs and their family members elsewhere in the world.
        </p>

        <div id="serviceCards" class="grid grid-cols-1 sm:grid-cols-2 gap-10 mb-10"></div>

        <div class="text-center">
            <button id="seeAllBtn" class="bg-primary text-bg px-10  py-4 rounded-full font-medium hover:bg-accent transition">
                See All
            </button>
        </div>
    </div>
</section>

<script>
    const services = [
        {
        title: 'Housing Initiatives for Inmates Families',
        desc: 'Tinutulungan namin ang mga pamilya ng OFWs na nasa kulungan upang magkaroon ng maayos at ligtas na tirahan. Kasama rito ang koordinasyon sa mga lokal na pamahalaan para sa pabahay. Layunin naming mabigyan sila ng panibagong simula.',
        image: '/images/housing.jpg'
        },
        {
        title: 'Legal Assistance and Psychosocial Support',
        desc: 'Nagbibigay kami ng libreng legal na tulong at counseling para sa mga OFW na may kinahaharap na kaso o emosyonal na suliranin. May mga abogado at psychologist kaming katuwang. Layunin naming mapanatili ang kanilang karapatan at kalusugang mental.',
        image: '/images/legal.jpg'
        },
        {
        title: 'Livelihood Programs',
        desc: 'Nag-aalok kami ng pagsasanay sa mga pamilya ng OFWs upang magkaroon sila ng sariling kabuhayan. Mula sa handicrafts hanggang sa online selling, sinusuportahan namin sila. Sa ganitong paraan, may pagkakakitaan sila kahit malayo ang mahal sa buhay.',
        image: '/images/livelihood.jpg'
        },
        {
        title: 'Prison Monitoring Services',
        desc: 'Minomonitor namin ang kalagayan ng mga OFW na nakakulong sa ibang bansa. Tinitiyak namin na maayos ang kanilang kalagayan at hindi naaabuso. Nakikipag-ugnayan kami sa embahada at ibang ahensya para dito.',
        image: '/images/prison.jpg'
        },
        {
        title: 'Family Reunification',
        desc: 'Tumutulong kami sa mga OFW na makauwi sa kanilang pamilya o madala ang pamilya sa kanilang kinaroroonan. Inaayos namin ang dokumento at proseso. Mahalaga sa amin ang pagkakabuo ng pamilya.',
        image: '/images/reunification.jpg'
        },
        {
        title: 'Scholarship Program for Children Inmates',
        desc: 'Nagbibigay kami ng tulong pinansyal sa mga anak ng OFW na may kasong kinakaharap. Nais naming ipagpatuloy nila ang kanilang edukasyon. Isang hakbang ito tungo sa mas magandang kinabukasan.',
        image: '/images/scholar.jpg'
        },
        {
        title: 'Skills Development and Vocational Training',
        desc: 'Nagbibigay kami ng TESDA-accredited training para sa mga nais matuto ng bagong kasanayan. Ito ay libre at bukas para sa lahat ng kaanak ng OFWs. Layunin naming mapaunlad ang kanilang kabuhayan.',
        image: '/images/skills.jpg'
        },
        {
        title: 'Support for Families of Deceased Inmates',
        desc: 'Nagbibigay kami ng tulong pinansyal at emosyonal sa mga naiwan ng OFW na pumanaw sa ibang bansa. Tinutulungan din namin sa pagproseso ng dokumento. Layunin naming hindi sila maiwan sa gitna ng trahedya.',
        image: '/images/support.jpg'
        }
    ];

    let showingAll = false;

    function renderServices() {
    const container = document.getElementById('serviceCards');
    container.innerHTML = '';
    const displayedServices = showingAll ? services : services.slice(0, 6);

    displayedServices.forEach(service => {
        const card = document.createElement('div');
        card.className = 'bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition duration-300 text-center';
        card.setAttribute('data-aos', 'fade-up');
        card.innerHTML = `
        <img src="${service.image}" alt="${service.title}" class="w-full h-[250px] object-cover rounded mb-4">
        <h3 class="text-lg font-semibold text-[#4682A9] mb-2">${service.title}</h3>
        <p class="text-gray-700 text-sm">${service.desc}</p>
        `;
        container.appendChild(card);
    });

    document.getElementById('seeAllBtn').textContent = showingAll ? 'Show Less' : 'See All';

    AOS.refresh(); 
    }

    document.getElementById('seeAllBtn').addEventListener('click', () => {
        showingAll = !showingAll;
        renderServices();
    });

    document.addEventListener('DOMContentLoaded', renderServices);
</script>
