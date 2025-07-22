<section id="request-assistance" class="tab">
    
    <div  id="tulong-form-title"><h1>Ofw Tulong</h1></div>
    <div id="request-assist-title"><h1>Request Assistance Form</h1></div>

    <form action="{{ route('request.assistance.submit') }}" method="POST" enctype="multipart/form-data" id="tulong-form">
        @csrf
        <div id="form-sub-con">


        <div class="con-input">
            <label for="first-name">First Name / Pangalan <span>*</span></label><br>
            <input type="text" name="first-name" id="first-name" required>
        </div>

        <div class="con-input">
            <label for="middle-name">Middle Name / Panggitnang Apelyido</label><br>
            <input type="text" name="middle-name" id="middle-name">
        </div>

        <div class="con-input">
            <label for="last-name">Last Name / Apelyido <span>*</span></label><br>
            <input type="text" name="last-name" id="last-name" required>
        </div>

            <hr>

        <div class="con-input">
            <label for="passport-number">Passport Number / Numero ng Pasaporte <span>*</span></label><br>
            <input type="text" name="passport-number" id="passport"  required>
        </div>

        <div class="con-input" id="saudi-con">
            <label for="iqama-num" id="iqama-label">Saudi Residence ID (Iqama) Number (If available) / Numero ng Saudi Residence ID o Iqama (Kung meron)</label><br>
            <input type="text" name="iqama-num" id="iqama" >
        </div>
            <hr>

        <div class="con-input">
            <label for="gender">Gender / Kasarian <span>*</span></label><br>
            <select name="gender" id="gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male / Lalaki</option>
                <option value="female">Female / Babae</option>
            </select>
        </div>

        <div class="con-input">
            <label for="email-fb" >Email or Facebook Name / Email o Pangalan sa Facebook <span>*</span></label><br>
            <input type="text" name="email-fb" id="contact" required>
        </div>

        <div class="con-input">
            <label for="occupation">Occupation / Trabaho <span>*</span></label><br>
            <input type="text" name="occupation" id="occupation" required>
        </div>

            <hr>

        <div class="con-input">
            <label for="personal-phone" id="label-telepono">Personal Telephone Number (If any) / Sariling Telepono (kung meron)</label><br>
            <input type="tel" name="personal-phone" id="personal-phone">
        </div>

        <div class="con-input">
            <label for="other-phone" id="label-other-telepono">Other Telephone Number to Contact (If any) / Ibang Telepono (Kung meron)</label><br>
            <input type="tel" name="other-phone" id="other-phone">
        </div>

        <div class="con-input">
            <label for="ksa-location">Location in KSA / Lokasyon sa Saudi <span>*</span></label><br>
            <input type="text" name="ksa-location" id="ksa-location" required>
        </div>

        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">
        <input type="hidden" name="address" id="address">

            <hr>
        <div class="con-input">
            <label for="employer-name">Name of Employer / Pangalan ng Amo</label><br>
            <input type="text" name="employer-name" id="employer-name">
        </div>

        <div class="con-input">
            <label for="employer-phone" id="label-tel-emp">Telephone Number of Employer (if known) / Telepono ng Amo (kung alam)</label><br>
            <input type="tel" name="employer-phone" id="employer-phone">
        </div>

        <div class="con-input">
            <label for="saudi-agency" id="label-agency">Name of Saudi Recruitment Agency (if known) / Pangalan ng Recruitment Agency sa Saudi (kung alam)</label><br>
            <input type="text" name="saudi-agency" id="saudi-agency">
        </div>

            <hr>

        <div class="con-input" id="agency">
            <label for="ph-agency" id="ph-agency-label">Name of Recruitment Agency in the Philippines (if known) / Pangalan ng Recruitment Agency sa Pilipinas (kung alam)</label> <br>
            <input type="text" name="ph-agency" id="ph-agency">
        </div>

        <hr>
            <div id="upload-file" class="con-input">
                <label for="file1">Upload Proofs</label>
                <br>
                 <input type="file" name="files[]" class="upload">
                 <input type="file" name="files[]" class="upload">
                 <input type="file" name="files[]" class="upload">
            </div>
        <hr>

        <div id="complaint-mes-con" class="con-input">
            <label for="complaint">Complaint/ Reklamo <span>*</span></label> <br>
            <textarea name="complaint" placeholder="Leave your complaints here..." id="complaint-mes" ></textarea><br>           
        </div> <br>
        <div><button type="submit" id="req-sub-btn">Submit</button></div>


        </div>
    </form>
</section>

<script>
let locationReady = false;

document.addEventListener('DOMContentLoaded', function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(async function (position) {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;

            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lon;

            try {
                const response = await fetch(`https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lon}&format=json`);
                const data = await response.json();
                document.getElementById('address').value = data.display_name || '';
            } catch (error) {
                console.error('Failed to fetch address:', error);
            }

            locationReady = true;
        }, function (error) {
            console.warn('Geolocation error:', error.message);
        });
    } else {
        console.warn('Geolocation is not supported by this browser.');
    }

    document.getElementById('tulong-form').addEventListener('submit', function (e) {
        if (!locationReady) {
            e.preventDefault();
            alert("Please wait, retrieving your location...");
        }
    });
});
</script>
