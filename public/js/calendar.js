window.onload = () => {
    let calendarEl = document.querySelector('.calendar')
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: 'fr',
        timeZone: 'Europe/Paris',
        windowResize: function() {
          },
        expandRows: true,
        contentHeight: 'auto',
        headerToolbar: {
          start: 'title',
          center: '',
          end: 'prev,next today dayGridMonth dayGridWeek'
        }
    });

    calendar.render();
}