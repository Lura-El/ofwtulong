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
        desc: 'Pagsuporta sa mga pamilya ng nakakulong sa pamamagitan ng pabahay o shelter programs upang masigurong may maayos silang tirahan habang naghihintay ng paglaya ng kanilang mga mahal sa buhay.',
        image: '/images/home.png',
        attribute: 'Home icons made by Iconixar from www.flaticon.com'
        },
        {
        title: 'Legal Assistance and Psychosocial Support',
        desc: 'Pagbibigay ng legal assistance at psychosocial support para sa mga nakakulong upang mapabuti ang kanilang kalagayan at mapabilis ang proseso ng kanilang kaso.',
        image: '/images/aid.png',
        attribute: 'Legal icons made by HAJICON from www.flaticon.com'
        },
        {
        title: 'Livelihood Programs',
        desc: 'Pagsasanay at pagbigay ng livelihood opportunities para sa mga nakakulong at kanilang pamilya upang sila ay magkaroon ng hanapbuhay at mapabuti ang kanilang ekonomiya.',
        image: '/images/team.png',
        attribute: 'Work icons made by Eucalyp from www.flaticon.com'
        },
        {
        title: 'Prison Monitoring Services',
        desc: 'Regular na pag-monitor sa kalagayan ng nakakulong, kabilang ang kanilang kalusugan at kalagayan sa loob ng bilangguan upang matiyak ang kanilang karapatan at kapakanan.',
        image: '/images/captive.png',
        attribute: 'Captive icons made by Leremy from www.flaticon.com'
        },
        {
        title: 'Family Reunification Programs',
        desc: 'Mga aktibidad o programa na naglalayong pag-ibayuhin ang komunikasyon at relasyon ng nakakulong sa kanilang pamilya, gaya ng family visits at group counseling.',
        image: '/images/family.png',
        attribute: 'Family icons made by Good Ware from www.flaticon.com'
        },
        {
        title: 'Scholarship Program for Children Inmates',
        desc: 'Paglalaan ng educational scholarships upang matulungan ang mga anak ng nakakulong na makapag-aral at magkaroon ng magandang kinabukasan.',
        image: '/images/mortarboard.png',
        attribute: 'Scholarship icons made by Bartama Graphic from www.flaticon.com'
        },
        {
        title: 'Skills Development and Vocational Training',
        desc: 'Pagsasanay sa mga praktikal na skills na pwedeng gamitin pagkatapos ng kanilang pagkakakulong, para mas mapadali ang reintegration sa lipunan.',
        image: '/images/teaching.png',
        attribute: 'Presentation icons made by Alkhalifi design from www.flaticon.com'
        },
        {
        title: 'Support for Families of Deceased Inmates',
        desc: 'Assistance programs para sa mga pamilya na naulila dahil sa pagkawala ng nakakulong, kabilang na ang legal at psychosocial support.',
        image: '/images/social-justice.png',
        attribute: 'Human rights icons made by Freepik from www.flaticon.com'
        },
        {
        title: 'Mental Health and Wellness Support',
        desc: 'Regular counseling sessions at mental health workshops para sa nakakulong at kanilang pamilya upang matulungan silang harapin ang stress, trauma, at iba pang emotional challenges.',
        image: '/images/services.png',
        attribute: 'Health icons made by gravisio from www.flaticon.com'
        },
        {
        title: 'Health Services Access',
        desc: 'Pagbibigay ng access sa regular health check-ups, dental care, at iba pang medical services para sa nakakulong at kanilang pamilya.',
        image: '/images/protection.png',
        attribute: 'Healthcare icons made by Kalashnyk design from www.flaticon.com'
        },
        {
        title: 'Community Awareness and Advocacy',
        desc: 'Kampanya para mapabuti ang pananaw ng komunidad tungkol sa mga nakakulong at kanilang pamilya, at para mabawasan ang stigma at diskriminasyon.',
        image: '/images/community-approach.png',
        attribute: 'Online community icons made by kostop from www.flaticon.com'
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
        <img src="${service.image}" alt="${service.title}" title="${service.attribute}" class="w-[256px] h-[256px] object-cover rounded mb-4 mx-auto">
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
