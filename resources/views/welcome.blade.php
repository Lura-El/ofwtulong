<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/> 
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    
    <title>OFW Tulong</title>
</head>
<body>
        <!-- Responsive navbar-->
        @include('layouts.navigation')
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="bg-custom  p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">In the service of Filipinos around the world</h1>
                        <p class="fs-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi debitis modi consectetur at porro quam! Fugiat et impedit autem voluptate perspiciatis magnam cum corrupti ipsa! Delectus illo amet obcaecati dolores.</p>
                        <a class="btn btn-primary btn-lg" href="#!">About Us</a>
                    </div>
                </div>
            </div>
        </header>
        <main>
        <section class="pt-4 d-none" id="otherservice">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold pt-4">Mental Health and Wellness Support</h2>
                                <p class="mb-0">Regular counseling sessions at mental health workshops para sa nakakulong at kanilang pamilya upang matulungan 
                                    silang harapin ang stress, trauma, at iba pang emotional challenges.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold pt-4">Family Reunification Programs</h2>
                                <p class="mb-0">Mga aktibidad o programa na naglalayong pag-ibayuhin ang komunikasyon at relasyon ng nakakulong sa kanilang pamilya, gaya ng family visits at group counseling</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold pt-4">Skills Development and Vocational Training</h2>
                                <p class="mb-0">Pagsasanay sa mga praktikal na skills na pwedeng gamitin pagkatapos ng kanilang pagkakakulong, para mas mapadali ang reintegration sa lipunan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold pt-4">Health Services Access</h2>
                                <p class="mb-0">Pagbibigay ng access sa regular health check-ups, dental care, at iba pang medical services para sa nakakulong at kanilang pamilya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold pt-4">Community Awareness and Advocacy</h2>
                                <p class="mb-0">Kampanya para mapabuti ang pananaw ng komunidad tungkol sa mga nakakulong at kanilang pamilya, at para mabawasan ang stigma at diskriminasyon.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold pt-4">Support for Families of Deceased Inmates</h2>
                                <p class="mb-0">Assistance programs para sa mga pamilya na naulila dahil sa pagkawala ng nakakulong, kabilang na ang legal at psychosocial support.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold pt-4">Legal Assistance at Psychosocial Support </h2>
                                <p class="mb-0">Pagbibigay ng legal assistance at psychosocial support para sa mga nakakulong upang mapabuti ang kanilang kalagayan at mapabilis ang proseso ng kanilang kaso</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold pt-4">Scholarship Program for Children Inmates</h2>
                                <p class="mb-0">Paglalaan ng educational scholarships upang matulungan ang mga anak ng nakakulong na makapag-aral at magkaroon ng magandang kinabukasan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold pt-4">Prison Monitoring</h2>
                                <p class="mb-0">Regular na pag-monitor sa kalagayan ng nakakulong, kabilang ang kanilang kalusugan at kalagayan sa loob ng bilangguan upang matiyak ang kanilang karapatan at kapakanan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold pt-4">Housing Initiatives for Inmates Families</h2>
                                <p class="mb-0">Pagsuporta sa mga pamilya ng nakakulong sa pamamagitan ng pabahay o shelter programs upang masigurong may maayos silang tirahan habang naghihintay ng paglaya ng kanilang mga mahal sa buhay</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold pt-4">Livelihood Programs</h2>
                                <p class="mb-0">Pagsasanay at pagbigay ng livelihood opportunities para sa mga nakakulong at kanilang pamilya upang sila ay magkaroon ng hanapbuhay at mapabuti ang kanilang ekonomiya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <h2 class="fs-4 fw-bold  pt-4">Other Service</h2>
                                <a href="#otherservice" class="feature bg-primary bg-gradient text-white rounded-3 mt-5" id="plus" ><i class="bi bi-plus "></i><div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        </main>
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/index.js') }}"></script>
    </body>
</html>
