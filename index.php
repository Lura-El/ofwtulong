<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css"> 
    <link rel="stylesheet" href="style/forms.css"> 
    <link rel="stylesheet" href="style/pages.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="script/index.js" defer></script>
    <title>OFW Tulong</title>
</head>
<body>
    <div class="container">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <?php 
        require_once __DIR__ . '/view/navigation.php';
    ?>
    <div id="home" class="tab">
        
       <div id="home-con">
            <section>
                <h1>OFW Tulong</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            </section>

            <div id="home-img-con">
                   
                    <div>
                        <img src="./images/legal.jpg" alt="legal assistance" class="home-img" width="600" height="400">
                        <p>Legal Assistance and Psychosocial Support</p>
                        
                    </div>
                    <div>
                        <img src="./images/scholar.jpg" alt="scholarship" class="home-img" width="600" height="400">
                        <p>Scholarship para sa mga Anak ng Nakakulong</p>
                    </div>
                    <div>
                        <img src="./images/housing.jpg" alt="housing program" class="home-img" width="600" height="400">
                        <p>Housing Initiatives for Inmates Families</p>
                    </div>
                    <div>
                        <img src="./images/prison.jpg" alt="prison" class="home-img" width="600" height="400">
                        <p>Prison Monitoring Services</p>
                    </div>

            
                    <div>
                        <img src="./images/livelihood.jpg" alt="livelihood" class="home-img" width="600" height="400">
                        <p>Livelihood Programs</p>
                    </div>
                    <div>
                        <img src="./images/health.jpg" alt="mental health" class="home-img" width="600" height="400">
                        <p>Mental Health and Wellness Support</p>
                    </div>
                    <div>
                        <img src="./images/reunification.jpg" alt="family-reunification" class="home-img" width="600" height="400">
                        <p>Family Reunification Programs</p>
                    </div>
            
                    <div>
                        <img src="./images/skills.jpg" alt="skills development" class="home-img" width="600" height="400">
                        <p>Skills Development and Vocational Training</p>
                    </div>
                    <div>
                        <img src="./images/health-service.jpg" alt="health service access" class="home-img" width="600" height="400">
                        <p>Health Service Access</p>
                    </div>
                    <div>
                        <img src="./images/awareness.jpg" alt="mental health and wellness" class="home-img" width="600" height="400">
                        <p>Community Awareness and Advocacy</p>
                    </div>
                    <div>
                        <img src="./images/support.jpg" alt="support for families" class="home-img" width="600" height="400">
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
                
    <?php
        require_once __DIR__ . '/view/legal.php';
        require_once __DIR__ . '/view/scholarship.php';
        require_once __DIR__ . '/view/housing.php';
        require_once __DIR__ . '/view/prison.php';
        require_once __DIR__ . '/view/livelihood.php';
        require_once __DIR__ . '/view/health.php';
        require_once __DIR__ . '/view/reunification.php';
        require_once __DIR__ . '/view/skills.php';
        require_once __DIR__ . '/view/health-service.php';
        require_once __DIR__ . '/view/awareness.php';
        require_once __DIR__ . '/view/support.php';
        require_once __DIR__ . '/view/membership.php';
        require_once __DIR__ . '/view/request-assistance.php';
        require_once __DIR__ . '/view/contact-us.php';
    ?> 


</body>
</html>

    


    


