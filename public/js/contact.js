document.addEventListener('DOMContentLoaded', function () {
    const sendBtn = document.getElementById('send-mes-btn');
    const warning = document.getElementById('location-warning');
    const latInput = document.getElementById('latitude');
    const lonInput = document.getElementById('longitude');

    // Add hidden input for full address
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

                // Get address using Nominatim
                fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`)
                    .then(res => res.json())
                    .then(data => {
                        addressInput.value = data.display_name;
                        sendBtn.disabled = false;
                        warning.style.display = 'none';
                    })
                    .catch(err => {
                        console.error("Address fetch error:", err);
                        warning.innerText = "Failed to get location details.";
                        warning.style.display = 'block';
                        sendBtn.disabled = true;
                    });
            },
            function () {
                warning.style.display = 'block';
                sendBtn.disabled = true;
            }
        );
    } else {
        warning.innerText = "Geolocation is not supported.";
        warning.style.display = 'block';
        sendBtn.disabled = true;
    }
});

document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = e.target;
    const data = new FormData(form);
    const responseMsg = document.getElementById('responseMsg');
    const sendBtn = document.getElementById('send-mes-btn');

    sendBtn.disabled = true;
    sendBtn.innerText = "Sending...";

    fetch(form.action, {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: data,
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(errorData => { throw errorData; });
        }
        return response.json();
    })
    .then(result => {
        responseMsg.innerText = result.message;
        responseMsg.classList.remove("text-red-600");
        responseMsg.classList.add("text-green-600");
        form.reset();

        setTimeout(() => {
            responseMsg.innerText = '';
            responseMsg.classList.remove("text-green-600");
        }, 3000);
    })
    .catch(error => {
        console.error("Form submit error:", error);
        let message = "Failed to send. Please try again.";

        if (error.errors) {
            message = Object.values(error.errors).flat().join('\n');
        }

        responseMsg.innerText = message;
        responseMsg.classList.remove("text-green-600");
        responseMsg.classList.add("text-red-600");
    })
    .finally(() => {
        sendBtn.disabled = false;
        sendBtn.innerText = "Send Message";
    });
});
