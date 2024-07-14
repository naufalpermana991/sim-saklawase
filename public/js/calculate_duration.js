    const startDateInput = document.getElementById('start_date');
    const endDateInput = document.getElementById('end_date');
    const durationInput = document.getElementById('duration');

    function calculateDuration() {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);
        const duration = Math.ceil((endDate - startDate) / (1000 * 60 * 60 * 24));
        durationInput.value = duration;
    }

    startDateInput.addEventListener('input', calculateDuration);
    endDateInput.addEventListener('input', calculateDuration);
