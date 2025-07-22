<div id="contact-us" class="tab">
            <div id="contact-us-title"><h1 >Contact Us</h1></div>
            <div id="contact-sub-con">
                <article id="contact-us-text">
                    <section id="text-con">
                        <h1>Please Reach Us!</h1>
                        <p> 
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Soluta odit deleniti sint qui deserunt neque, nam nostrum
                            eveniet rem enim est! Ullam eligendi nobis porro quidem eaque dolorum ad consequuntur!
                        </p>
                    </section>
                    <section>
                        <h1>Location</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Reprehenderit excepturi veniam eum cupiditate non reiciendis ad labore
                            saepe voluptates numquam?
                        </p>
                    </section>
                </article>
                <div id="contact-form">
                    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <label for="name"></label>
                        <input type="text" name="name" placeholder="Name" id="name"> <br>
                        <label for="email"></label>
                        <input type="email" name="email" placeholder="Email" required id="c-email">
                        <label for="phone"></label>
                        <input type="tel" name="phone" placeholder="Phone" required id="c-phone"> <br>
                        <input type="hidden" name="latitude" id="latitude">
                        <input type="hidden" name="longitude" id="longitude">
                        <label for="message"></label>
                        <textarea name="message" placeholder="Message" id="message-area" required></textarea><br>
                    
                        <button type="submit" id="send-mes-btn" disabled>Send Message</button>
                        <p id="location-warning" style="color: red; display: none;">You must allow location access to send a message.</p>

                    </form>
                    <p id="responseMsg" class="mt-4 text-center font-semibold"></p>
                </div>
            </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const sendBtn = document.getElementById('send-mes-btn');
        const warning = document.getElementById('location-warning');

        const latInput = document.getElementById('latitude');
        const lonInput = document.getElementById('longitude');

        // Add hidden input for address
        const addressInput = document.createElement('input');
        addressInput.type = 'hidden';
        addressInput.name = 'location_address';
        addressInput.id = 'location_address';
        document.getElementById('contactForm').appendChild(addressInput);

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function (position) {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;

                    latInput.value = lat;
                    lonInput.value = lon;

                    // Call Nominatim Reverse Geocoding API
                    fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`)
                        .then(res => res.json())
                        .then(data => {
                            const address = data.display_name;
                            addressInput.value = address;

                            sendBtn.disabled = false;
                            warning.style.display = 'none';
                        })
                        .catch(err => {
                            console.error("Failed to fetch address:", err);
                            warning.innerText = "Failed to get location details.";
                            warning.style.display = 'block';
                            sendBtn.disabled = true;
                        });
                },
                function (error) {
                    warning.style.display = 'block';
                    sendBtn.disabled = true;
                }
            );
        } else {
            warning.innerText = "Geolocation not supported.";
            warning.style.display = 'block';
            sendBtn.disabled = true;
        }
    });
</script>


<script>
    document.getElementById('contactForm').addEventListener('submit', function (e) {
        e.preventDefault();

        const form = e.target;
        const data = new FormData(form);
        const responseMsg = document.getElementById('responseMsg');
        const sendBtn = document.getElementById('send-mes-btn');

        // Start loading state
        sendBtn.disabled = true;
        sendBtn.innerText = "Sending...";

        fetch("{{ route('contact.submit') }}", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: data,
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(errorData => {
                    throw errorData;
                });
            }
            return response.json();
        })
        .then(result => {
            responseMsg.innerText = result.message;
            responseMsg.classList.remove("text-red-600");
            responseMsg.classList.add("text-green-600");
            form.reset();
        })
        .catch(error => {
            console.error("Error:", error);
            let message = "Failed to send. Please try again.";

            if (error.errors) {
                message = Object.values(error.errors).flat().join('\n');
            }

            responseMsg.innerText = message;
            responseMsg.classList.remove("text-green-600");
            responseMsg.classList.add("text-red-600");
        })
        .finally(() => {
            // Reset button state
            sendBtn.disabled = false;
            sendBtn.innerText = "Send Message";
        });
    });
</script>


