<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/pages.css') }}"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/index.js') }}" defer></script>
    <title>OFW Tulong</title>
</head>
<body>
    <div class="container">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    @include('layouts.navigation')
    <div id="home" class="tab">
        
       <div id="home-con">
            <section>
                <h1>OFW Tulong</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </section>

            <div id="home-img-con">
                   
                    <div>
                        <img src="{{ asset('images/legal.jpg') }}" alt="legal assistance" class="home-img" width="600" height="400">
                        <p>Legal Assistance and Psychosocial Support</p>
                        
                    </div>
                    <div>
                        <img src="{{ asset('images/scholar.jpg') }}" alt="scholarship" class="home-img" width="600" height="400">
                        <p>Scholarship para sa mga Anak ng Nakakulong</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/housing.jpg') }}" alt="housing program" class="home-img" width="600" height="400">
                        <p>Housing Initiatives for Inmates Families</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/prison.jpg') }}" alt="prison" class="home-img" width="600" height="400">
                        <p>Prison Monitoring Services</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/livelihood.jpg') }}" alt="livelihood" class="home-img" width="600" height="400">
                        <p>Livelihood Programs</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/health.jpg') }}" alt="mental health" class="home-img" width="600" height="400">
                        <p>Mental Health and Wellness Support</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/reunification.jpg') }}" alt="family-reunification" class="home-img" width="600" height="400">
                        <p>Family Reunification Programs</p>
                    </div>
            
                    <div>
                        <img src="{{ asset('images/skills.jpg') }}" alt="skills development" class="home-img" width="600" height="400">
                        <p>Skills Development and Vocational Training</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/health-service.jpg') }}" alt="health service access" class="home-img" width="600" height="400">
                        <p>Health Service Access</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/awareness.jpg') }}" alt="mental health and wellness" class="home-img" width="600" height="400">
                        <p>Community Awareness and Advocacy</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/support.jpg') }}" alt="support for families" class="home-img" width="600" height="400">
                        <p>Support for Families of Deceased Inmates</p>
                    </div>
            </div>  
       </div>

        <footer>
            <section>
                <ul id="footer-li">
                    <li>Legal Assistance and Psychosocial Support</li>
                    <li>Scholarship para sa mga Anak ng Nakakulong</li>
                    <li>Housing Initiatives for Inmates Families</li>
                    <li>Prison Monitoring Services</li>
                    <li>Livelihood Programs</li>
                    <li>Mental Health and Wellness Support</li>
                    <li>Family Reunification Programs</li>
                    <li>Skills Development and Vocational Training</li>
                    <li>Health Service Access</li>
                    <li>Community Awareness and Advocacy</li>
                    <li>Support for Families of Deceased Inmates</li>
                </ul>
            </section>
            <section>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quasi iusto consequuntur!</p> <br>
                <section>Social Media Here or Address</section>
                <section>Contact Number and Email here</section>
            </section>
        </footer>

    </div>
                
    @include('pages.legal')
    @include('pages.scholarship')
    @include('pages.housing')
    @include('pages.prison')
    @include('pages.livelihood')
    @include('pages.health')
    @include('pages.reunification')
    @include('pages.skills')
    @include('pages.health-service')
    @include('pages.awareness')
    @include('pages.support')
    @include('pages.membership')
    @include('pages.request-assistance')
    @include('pages.contact-us')


</body>
</html>