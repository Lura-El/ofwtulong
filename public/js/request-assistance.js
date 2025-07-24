let locationReady = false;

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('tulong-form');

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

    form.addEventListener('submit', function (e) {
        if (!locationReady) {
            e.preventDefault();
            alert("Please wait, retrieving your location...");
        }
    });
});
