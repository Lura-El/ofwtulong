<section id="membership" class="tab">
    <h1 id="membership-title">Membership</h1>
    <form action="/ofwtulong/controller/membership.con.php" method="POST" id="membership-form">
        <h1>Personal Information</h1>

        <div>
            <label for="fname">Full Name of OFW <span>*</span></label><br>
            <input type="text" name="fname" placeholder="Last Name, First Name, Middle Name" required>
        </div>

        <div>
            <label for="passport-num">Philippine Passport Number <span>*</span></label><br>
            <input type="text" name="passport-num" required>
        </div>

        <div>
            <label for="email">Email Address <span>*</span></label><br>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="mphone">Mobile Number <span>*</span></label><br>
            <input type="tel" name="mphone" required>
        </div>

        <div>
            <label for="birthdate">Birthdate <span>*</span></label><br>
            <input type="date" name="birthdate" required>
        </div>

        <div>
            <label for="civil-status">Civil Status <span>*</span></label><br>
            <input type="text" name="civil-status" required>
        </div>

        <div>
            <label for="job-position">Job Position <span>*</span></label><br>
            <input type="text" name="job-position" placeholder="Ex: Software Engineer, Nurse, Electrician" required>
        </div>

        <div>
            <label for="job-site">Job Site <span>*</span></label><br>
            <input type="text" name="job-site" placeholder="Ex: UAE, Canada, Japan" required>
        </div>

        <h1>Employer Information</h1>
        <div>
            <label for="employer-name">Full Name of Employer <span>*</span></label><br>
            <input type="text" name="employer-name" required>
        </div>

        <div>
            <label for="employer-address">Address of Employer <span>*</span></label><br>
            <input type="text" name="employer-address" required>
        </div>

        <div>
            <label for="employer-email">Email Address of Employer <span>*</span></label><br>
            <input type="email" name="employer-email" required>
        </div>

        <div>
            <label for="employer-phone">Phone Number of Employer <span>*</span></label><br>
            <input type="tel" name="employer-phone" required>
        </div>

        <h1>Recruitment Agency Information</h1>
        <div>
            <label for="agency-philippines">Recruitment Agency in the Philippines <span>*</span></label><br>
            <input type="text" name="agency-philippines" required>
        </div>

        <div>
            <label for="agency-phil-phone">Contact Number <span>*</span></label><br>
            <input type="tel" name="agency-phil-phone" required>
        </div>

        <div>
            <label for="agency-phil-email">Email Address <span>*</span></label><br>
            <input type="email" name="agency-phil-email" required>
        </div>

        <div>
            <label for="foreign-agency">Foreign Agency <span>*</span></label><br>
            <input type="text" name="foreign-agency" required>
        </div>

        <div>
            <label for="foreign-agency-phone">Contact Number <span>*</span></label><br>
            <input type="tel" name="foreign-agency-phone" required>
        </div>

        <div>
            <label for="foreign-agency-email">Email Address <span>*</span></label><br>
            <input type="email" name="foreign-agency-email" required>
        </div>

        <h1>Next of Kin</h1>
        <div>
            <label for="kin-name">Next of Kin/ Kamag-anak ng OFW <span>*</span></label><br>
            <input type="text" name="kin-name" required>
        </div>

        <div>
            <label for="relationship">Relationship with OFW <span>*</span></label><br>
            <input type="text" name="relationship" required>
        </div>

        <div>
            <label for="kin-phone">Contact Number <span>*</span></label><br>
            <input type="tel" name="kin-phone" required>
        </div>

        <div>
            <label for="kin-address">Address in the Philippines <span>*</span></label><br>
            <input type="text" name="kin-address" required>
        </div>

        <div>
            <label for="kin-email">Email Address <span>*</span></label><br>
            <input type="email" name="kin-email" required>
        </div> 

        <br>
        <div id="membership-btn"><button type="submit">Submit</button></div>
    </form>
</section>
