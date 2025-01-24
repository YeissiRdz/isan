<!DOCTYPE html>
<html lang="es_MX">

<head>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../styles_sp/calendario.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/react/18.2.0/umd/react.production.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/18.2.0/umd/react-dom.production.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/antd/4.24.5/antd.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/mui/5.15.3/mui.min.js"></script>

   <?php include_once("../rp/head.php") ?>
   <?php include_once("../rp/navbar.php") ?>

<body>
   <div class="calendar-container">
      <div class="calendar-header">
         <h1 class="calendar-title" id="calendar-title">Calendario</h1>
         <div class="calendar-controls">
            <select id="month-select" class="calendar-select"></select>
            <select id="year-select" class="calendar-select"></select>
            <button id="switch-language" class="calendar-button">Cambiar a Inglés</button>
         </div>
      </div>
      <div id="calendar" class="calendar-grid"></div>
   </div>

   <div id="event-modal" class="modal">
      <div class="modal-content">
         <span class="close-modal">&times;</span>
         <h2 id="modal-title">Agregar Evento</h2>
         <input type="text" id="event-title" placeholder="Título del Evento">
         <button id="save-event" class="calendar-button">Guardar Evento</button>
      </div>
   </div>

   <div id="events-modal" class="modal">
      <div class="modal-content">
         <span class="close-events-modal">&times;</span>
         <h2>Eventos</h2>
         <div id="events-list"></div>
      </div>
   </div>

   <script>
      const translations = {
         es: {
            title: "Calendario",
            addEvent: "Agregar Evento",
            switchLanguage: "Cambiar a Inglés",
            modalTitle: "Agregar Evento",
            saveEvent: "Guardar Evento",
            noEvents: "No hay eventos para esta fecha.",
            months: [
               "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
               "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
            ]
         },
         en: {
            title: "Calendar",
            addEvent: "Add Event",
            switchLanguage: "Switch to Spanish",
            modalTitle: "Add Event",
            saveEvent: "Save Event",
            noEvents: "No events for this date.",
            months: [
               "January", "February", "March", "April", "May", "June",
               "July", "August", "September", "October", "November", "December"
            ]
         }
      };

      let currentLanguage = 'es';
      let events = {};
      let currentDate = new Date();
      let selectedDate = '';

      document.addEventListener('DOMContentLoaded', () => {
         initializeCalendar();
         document.getElementById('save-event').addEventListener('click', saveEvent);
         document.querySelector('.close-modal').addEventListener('click', closeModal);
         document.querySelector('.close-events-modal').addEventListener('click', closeEventsModal);
         document.getElementById('switch-language').addEventListener('click', switchLanguage);
      });

      function initializeCalendar() {
         populateMonthYearSelectors();
         renderCalendar();
         updateLanguage();
      }

      function renderCalendar() {
         const calendarElement = document.getElementById('calendar');
         calendarElement.innerHTML = '';

         const month = currentDate.getMonth();
         const year = currentDate.getFullYear();
         document.getElementById('calendar-title').innerText = `${translations[currentLanguage].months[month]} ${year}`;

         const firstDay = new Date(year, month, 1);
         const lastDay = new Date(year, month + 1, 0);

         for (let i = 1; i < firstDay.getDay(); i++) {
            calendarElement.innerHTML += `<div class="calendar-day empty"></div>`;
         }

         for (let day = 1; day <= lastDay.getDate(); day++) {
            const eventKey = `${year}-${month + 1}-${day}`;
            const eventMarker = events[eventKey] ? `<div class="event-marker" style="background-color: red; border-radius: 50%; width: 10px; height: 10px; margin: auto;"></div>` : '';
            calendarElement.innerHTML += `<div class="calendar-day" onclick="openEventsModal('${eventKey}')">${day}${eventMarker}</div>`;
         }
      }

      function populateMonthYearSelectors() {
         const monthSelect = document.getElementById('month-select');
         const yearSelect = document.getElementById('year-select');

         monthSelect.innerHTML = '';
         translations[currentLanguage].months.forEach((month, index) => {
            monthSelect.innerHTML += `<option value="${index}">${month}</option>`;
         });

         const currentYear = currentDate.getFullYear();
         for (let year = currentYear - 10; year <= currentYear + 10; year++) {
            yearSelect.innerHTML += `<option value="${year}">${year}</option>`;
         }

         monthSelect.value = currentDate.getMonth();
         yearSelect.value = currentYear;

         monthSelect.addEventListener('change', () => {
            currentDate.setMonth(monthSelect.value);
            renderCalendar();
         });

         yearSelect.addEventListener('change', () => {
            currentDate.setFullYear(yearSelect.value);
            renderCalendar();
         });
      }

      function openEventModal(date) {
         selectedDate = date; // Set the selected date for the event
         document.getElementById('event-modal').style.display = 'block';
      }

      function closeModal() {
         document.getElementById('event-modal').style.display = 'none';
      }

      function saveEvent() {
         const eventTitle = document.getElementById('event-title').value.trim();

         if (eventTitle) {
            if (!events[selectedDate]) {
               events[selectedDate] = [];
            }

            events[selectedDate].push(eventTitle);
            document.getElementById('event-title').value = ''; // Clear the input field
            closeModal();
            renderCalendar();
         } else {
            alert("Please enter an event title."); // Alert if no title is entered
         }
      }

      function openEventsModal(date) {
         selectedDate = date; // Set the selected date to show events
         const eventsList = document.getElementById('events-list');
         eventsList.innerHTML = '';

         const eventDetails = events[selectedDate] || [];
         if (eventDetails.length > 0) {
            eventDetails.forEach(event => {
               eventsList.innerHTML += `<div>${event}</div>`;
            });
         } else {
            eventsList.innerHTML = `<div>${translations[currentLanguage].noEvents}</div>`;
         }

         document.getElementById('events-modal').style.display = 'block';
      }

      function closeEventsModal() {
         document.getElementById('events-modal').style.display = 'none';
      }

      function switchLanguage() {
         currentLanguage = currentLanguage === 'es' ? 'en' : 'es';
         populateMonthYearSelectors();
         renderCalendar();
         updateLanguage();
      }

      function updateLanguage() {
         document.getElementById('calendar-title').innerText = translations[currentLanguage].title;
         document.getElementById('switch-language').innerText = translations[currentLanguage].switchLanguage;
      }
   </script>

   <?php include_once("../rp/footer.php") ?>
</body>

</html>