<!DOCTYPE html>
<html lang="es_mx">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles_sp/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<?php include_once("rp/head.php") ?>
<?php include_once("rp/navbar.php") ?>

<body>
   
   <section id="section-1">
      <div class="content-slider">
         <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
         <input type="radio" id="banner2" class="sec-1-input" name="banner">
         <input type="radio" id="banner3" class="sec-1-input" name="banner">
         <input type="radio" id="banner4" class="sec-1-input" name="banner">
         <div class="slider">
            <div id="top-banner-1" class="banner">
               <div class="banner-inner-wrapper">
                  <h2 class="ind"></h2>
                  <h1>Nuestro <br> modelo <br> educativo</h1>
                  <div class="line"></div>
                  <div class="btn-more-container">
                     <div class="learn-more-button"><a href="../sp/modelo_educativo.php">Ver modelo educativo</a></div>
                     <div class="learn-more-button"><a href="../sp/preparatoria_abierta.php">Ver preparatoria</a></div>
                  </div>
               </div>
            </div>
            <div id="top-banner-2" class="banner">
               <div class="banner-inner-wrapper">
                  <h2 class="ind">Nuestro gran compromiso</h2>
                  <h1>Nuestras <br> licenciaturas <br> educativas</h1>
                  <div class="line"></div>
                  <div class="btn-more-container">
                     <div class="learn-more-button"><a href="../sp/primaria.php">Ver en derecho</a></div>
                     <div class="learn-more-button"><a href="../sp/secundaria.php">Ver contaduría pública</a></div>
                  </div>
               </div>
            </div>
            <div id="top-banner-3" class="banner">
               <div class="banner-inner-wrapper">
                  <h2 class="ind">Nuestro gran compromiso</h2>
                  <h1>Nuestras <br> maestrías <br> educativas</h1>
                  <div class="line"></div>
                  <div class="btn-more-container">
                     <div class="learn-more-button"><a href="../sp/primaria.php">Ver en derecho</a></div>
                     <div class="learn-more-button"><a href="../sp/secundaria.php">Ver contaduría pública</a></div>
                  </div>
               </div>
            </div>
            <div id="top-banner-4" class="banner">
               <div class="banner-inner-wrapper">
                  <h2 class="ind">¿Deseas contáctarnos? </h2>
                  <h1>Nuestro <br> formulario <br> de citas</h1>
                  <div class="line"></div>
                  <div class="learn-more-button"><a href="../sp/agenda_una_cita.php">Ver agendar cita</a></div>
               </div>
            </div>
         </div>
         <nav>
            <div class="controls">
               <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span>01</span> Modelo educativo</label>
               <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span>02</span> Licenciaturas</label>
               <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span>03</span> Maestrías</label>
               <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span>04</span> Agendar cita</label>
            </div>
         </nav>
      </div>
   </section>

   <section class="fourth_section">
      <div class="fourth_section_grid">
         <div class="fourth_section_grid_img">
            <img src="../img_sp/index/banner_index_pr.jpg">
         </div>
         <div class="fourth_section_grid_info">
            <h2>Formación de excelencia. Desarrolla tu máximo potencial en un entorno dinámico</h2>
            <div class="fourth_section_grid_info_wrap">
               <div class="fourth_section_grid_info_box">
                  <img src="img_sp/index/ensenanza_bilingue.svg">
                  <p>Enseñanza bilingüe</p>
               </div>
               <div class="fourth_section_grid_info_box">
                  <img src="../img_sp/index/aprendizaje_Activo.svg" alt="Icono Aprendizaje Activo">
                  <p>Aprendizaje activo</p>
               </div>
               <div class="fourth_section_grid_info_box">
                  <img src="../img_sp/index/aprendizaje_critico.svg" alt="Icono Aprendizaje Crítico">
                  <p>Aprendizaje crítico y creativo</p>
               </div>
               <div class="fourth_section_grid_info_box">
                  <img src="../img_sp/index/formacion_mentalidad.svg" alt="Icono Formación Internacional">
                  <p>Formación y mentalidad internacional</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="fifth_section">
      <div class="fifth_section_grid">
         <div class="fifth_section_img">
            <div class="fifth_section_gradient"></div>
            <div class="fifth_section_content">
               <div class="fifth_section_content_1">
                  <h2>Nuestro Campus</h2>
                  <p>Comienza el proceso de admisión de ISAN y conoce:</p>
                  <ul>
                     <li><a href="../sp/instalaciones.php">Nuestras Instalaciones</a></li>
                     <li><a href="../sp/docentes.php">Nuestros Docentes</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="fifth_section_info">
            <h2><strong>Becas y</strong><br>Convenios</h2>
            <p>Descuento a colaboradores de empresas y estudiantes provenientes de colegios con convenio.</p>
            <a href="../sp/becas_convenios.php"><strong>Ver becas y convenios<i class="fa-solid fa-chevron-right"></i></strong></a>
         </div>
      </div>
   </section>

   <section class="seventh_section">
      <div class="seventh_section_grid">
         <div class="seventh_section_grid_div" id="seventh_section_grid_div_id1">
            <h2>Nuestra misión, visión y compromiso</h2>
            <p>Fomentamos una educación integral basada en valores, innovación y excelencia académica, preparando a nuestros estudiantes para afrontar los retos del futuro con confianza y responsabilidad.</p>
         </div>

         <div class="seventh_section_grid_div seventh_section_second_div" id="seventh_section_grid_div_id2">
            <div class="seventh_section_second_div_img">
               <img class="img_index_n" src="img_sp/index/n4.jpg">
            </div>
            <div>
               <h3>Gran compromiso en la educación...</h3>
               <p>Nuestro enfoque académico asegura que los estudiantes adquieran las herramientas necesarias para destacar en universidades de prestigio, fomentando su desarrollo integral.</p>
            </div>
            <div class="seventh_section_second_div_button">
            </div>
         </div>

         <div class="seventh_section_grid_div seventh_section_second_div" id="seventh_section_grid_div_id3">
            <img class="img_index_n" src="img_sp/index/n2.jpg">
            <div>
               <h3>Celebrando logros y metas cumplidas</h3>
               <p>La graduación representa el cierre de una etapa llena de esfuerzo y aprendizaje, destacando el crecimiento académico y personal de nuestros estudiantes mientras se preparan para nuevos retos y oportunidades.</p>

            </div>
            <div class="seventh_section_second_div_button">
            </div>
         </div>

      </div>
   </section>



</body>

<?php include_once("rp/footer.php") ?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
   function bannerSwitcher() {
      const current = $('.sec-1-input').filter(':checked');
      const next = current.next('.sec-1-input');
      if (next.length) {
         next.prop('checked', true);
      } else {
         $('.sec-1-input').first().prop('checked', true);
      }
   }

   var bannerTimer = setInterval(bannerSwitcher, 5000);

   $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000);
   });
</script>

</html>