document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('membershipForm');
    const submitBtn = document.getElementById('submitBtn');
    const submittingText = document.getElementById('submittingText');
    const successMsg = document.getElementById('successMsg');

    form.addEventListener('submit', function () {
        submitBtn.disabled = true;
        submittingText.classList.remove('hidden');
    });

    if (successMsg) {
        setTimeout(() => {
            successMsg.style.display = 'none';
        }, 3000);
    }
});
