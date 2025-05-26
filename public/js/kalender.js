function generateCalendar(year, month) {
    const calendarTitle = document.getElementById('calendar-title');
    const calendarBody = document.getElementById('calendar-body');

    const months = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];

    calendarTitle.textContent = `${months[month]} ${year}`;
    calendarBody.innerHTML = '';

    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    for (let i = 0; i < firstDay; i++) {
        calendarBody.innerHTML += `<div class="border py-1">&nbsp;</div>`;
    }

    for (let day = 1; day <= daysInMonth; day++) {
        const currentDay = new Date(year, month, day).getDay();
        const isSunday = currentDay === 0;
        const classes = isSunday ? 'text-red-600 font-semibold' : '';
        calendarBody.innerHTML += `<div class="border py-1 ${classes}">${day}</div>`;
    }
}

const today = new Date();
generateCalendar(today.getFullYear(), today.getMonth());
