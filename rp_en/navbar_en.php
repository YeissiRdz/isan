<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles_rp/navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<header>
   <div class="navbar-container">
      <div class="logo">
         <a href="../index_en.php"><img src="../img_rp/navbar/logo_full_name.webp" alt="Institute of Advanced Administration and Business Logo"></a>
      </div>

      <div class="topbar">
         <div class="contact-info">
            <div class="flag-icons">
               <a href="../index.php"><img src="../img_rp/navbar/mexico_flag.webp" alt="Mexico Flag"></a>
               <a href="../index_en.php"><img src="../img_rp/navbar/usa_flag.webp" alt="USA Flag"></a>
            </div>
            <span class="contact-infonmm"><a href="../sp_en/calendario_en.php">Calendar</a></span>
            <span class="contact-infonm"><a href="mailto:admisiones@isan.edu.mx" target="_blank"><i class="fa-solid fa-envelope"></i>Send an Email</a></span>
            <span class="contact-infonm"><a href="tel:+528717346322"><i class="fa-solid fa-phone"></i>(871) 734 6322</a></span>
            <span class="contact-infoac"><a href="../sp_en/agenda_una_cita_en.php">Schedule</a></span>
         </div>
      </div>

      <div class="bottombar">
         <div class="nav-links">
            <div class="dropdown">
               <a href="../sp_en/modelo_educativo_en.php" class="dropdown-toggle">Educational Model</a>
            </div>

            <div class="dropdown">
               <a href="../sp_en/preparatoria_abierta_en.php" class="dropdown-toggle">High School</a>
            </div>

            <div class="dropdown">
               <a href="javascript:void(0)" class="dropdown-toggle">Higher Education</a>
               <div class="dropdown-menu">
                  <a href="../sp_en/contaduria_en.php">Bachelor's in Law</a>
                  <a href="../sp_en/contaduria_en.php">Bachelor's in Public Accounting</a>
                  <a href="../sp_en/maestria_derecho_en.php">Master's in Law</a>
                  <a href="../sp_en/maestria_contaduria_en.php">Master's in Public Accounting</a>
               </div>
            </div>

            <div class="dropdown">
               <a href="javascript:void(0)" class="dropdown-toggle">Campus</a>
               <div class="dropdown-menu">
                  <a href="../sp_en/instalaciones_en.php">Facilities</a>
                  <a href="../sp_en/docentes_en.php">Faculty</a>
               </div>
            </div>

            <div class="dropdown">
               <a href="../sp_en/admisiones_en.php" class="dropdown-toggle">Admissions</a>
            </div>

            <div class="dropdown">
               <a href="../sp_en/becas_convenios_en.php" class="dropdown-toggle">Scholarships and Agreements</a>
            </div>
         </div>
      </div>
   </div>
</header>

<header class="nav_mobile">
   <div class="container">
      <a href="../index.php"><img src="../img_rp/head/logo_head.webp" alt="Logo" class="logo" /></a>
      <div class="flag-icons">
         <a href="../index.php"><img src="../img_rp/navbar/mexico_flag.webp" alt="Mexico Flag"></a>
         <a href="../index_en.php"><img src="../img_rp/navbar/usa_flag.webp" alt="USA Flag"></a>
      </div>

      <span class="contact-infonm"><a href="mailto:admisiones@isan.edu.mx" target="_blank"><i class="fa-solid fa-envelope"></i>Send an Email</a></span>
      <span class="contact-infonm"><a href="tel:+528717346322"><i class="fa-solid fa-phone"></i>(871) 734 6322</a></span>
      <span class="contact-infoac"><a href="../sp_en/agenda_una_cita_en.php">Schedule an Appointment</a></span>

      <input type="checkbox" id="toggle" style="display: none;" />
      <label class="toggle-btn toggle-btn__cross" for="toggle">
         <div class="bar"></div>
         <div class="bar"></div>
         <div class="bar"></div>
      </label>
      <nav class="navbar-nav">
         <ul>
            <li>
               <a href="../sp_en/modelo_educativo_en.php">Educational Model</a>
            </li>

            <li>
               <a href="../sp_en/preparatoria_abierta_en.php">High School</a>
            </li>

            <li class="has-dropdown">
               <a href="javascript:void(0)" class="dropdown-toggle">Higher Education</a>
               <ul class="dropdown">
                  <a class="dph" href="../sp_en/derecho_en.php">Bachelor's in Law</a>
                  <a class="dph" href="../sp_en/contaduria_en.php">Bachelor's in Public Accounting</a>
                  <a class="dph" href="../sp_en/maestria_derecho_en.php">Master's in Law</a>
                  <a class="dph" href="../sp_en/maestria_contaduria_en.php">Master's in Public Accounting</a>
               </ul>
            </li>
            <li class="has-dropdown">
               <a href="javascript:void(0)" class="dropdown-toggle">Campus</a>
               <ul class="dropdown">
                  <li><a class="dph" href="../sp_en/instalaciones_en.php">Facilities</a></li>
                  <li><a class="dph" href="../sp_en/docentes_en.php">Faculty</a></li>
               </ul>
            </li>
            <li><a href="../sp_en/admisiones_en.php">Admissions</a></li>
            <li><a href="../sp_en/becas_convenios_en.php">Scholarships & Agreements</a></li>
            <li><a href="../sp_en/calendario_en.php">Calendar</a></li>
         </ul>
      </nav>
   </div>
</header>
<script>
   // Toggle dropdown menus
   document.querySelectorAll('.dropdown-toggle').forEach(item => {
      item.addEventListener('click', event => {
         const dropdownMenu = item.nextElementSibling;

         // Close other open dropdowns
         document.querySelectorAll('.dropdown-menu').forEach(menu => {
            if (menu !== dropdownMenu) {
               menu.style.display = 'none';
            }
         });

         // Toggle the current dropdown
         dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
         event.stopPropagation(); // Prevent click event from bubbling up
      });
   });

   // Close dropdown if clicked outside
   window.addEventListener('click', event => {
      if (!event.target.closest('.dropdown-toggle')) {
         document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.style.display = 'none';
         });
      }
   });

   // Toggle mobile menu
   const menuButton = document.querySelector('.menu-btn'); // Hamburger button
   const mobileMenu = document.querySelector('.ul_mobile'); // Mobile menu

   if (menuButton && mobileMenu) {
      menuButton.addEventListener('click', () => {
         mobileMenu.classList.toggle('show'); // Show or hide the mobile menu
         const isExpanded = mobileMenu.classList.contains('show');
         menuButton.setAttribute('aria-expanded', isExpanded); // Accessibility
      });
   }
</script>