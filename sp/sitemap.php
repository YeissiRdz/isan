<!DOCTYPE html>
<html lang="es_MX">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../styles_sp/sitemap.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/react/18.2.0/umd/react.production.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/18.2.0/umd/react-dom.production.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/antd/4.24.5/antd.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/mui/5.15.3/mui.min.js"></script>

   <?php include_once("../rp/head.php") ?>
   <?php include_once("../rp/navbar.php") ?>
</head>

<body>
   <div class="sitemap-wrapper">
      <div class="sitemap-container">
         <h1 class="sitemap-title">Mapa del Sitio</h1>

         <div class="sitemap-content">
            <div class="sitemap-section">
               <h2 class="section-title">Navegación Academica</h2>
               <div class="sitemap-links">
                  <a href="../sp/modelo_educativo.php" class="sitemap-link">Modelo educativo</a>
                  <a href="../sp/preparatoria_abierta.php" class="sitemap-link">Preparatoria Abierta</a>
                  <a href="../sp/" class="sitemap-link">Licenciatura en Derecho</a>
                  <a href="../sp/primaria.php" class="sitemap-link">Licenciatura en Contaduría Pública</a>
                  <a href="../sp/maestria_derecho.php" class="sitemap-link">Maestría en Derecho</a>
                  <a href="../sp/maestria_contaduria.php" class="sitemap-link">Maestría en Contaduría Pública </a>
               </div>
            </div>

            <div class="sitemap-section">
               <h2 class="section-title">Navegación Interna</h2>
               <div class="sitemap-links">
                  <a href="../sp/instalaciones.php" class="sitemap-link">Instalaciones</a>
                  <a href="../sp/docentes.php" class="sitemap-link">Docentes</a>
                  <a href="../sp/becas_convenios.php" class="sitemap-link">Becas y convenios</a>

               </div>
            </div>

            <div class="sitemap-section">
               <h2 class="section-title">Recursos</h2>
               <div class="sitemap-links">

                  <a href="../sp/calendario.php" class="sitemap-link">Calendario</a>
                  <a href="../sp/agenda_una_cita.php" class="sitemap-link">Agendar Cita</a>
                  <a href="../sp/politicas_de_privacidad.php" class="sitemap-link">Políticas de Privacidad</a>
                  <a href="../sp/sitemap.php" class="sitemap-link">Mapa del Sitio</a>
                  <a href="../sp/noalbullying.php" class="sitemap-link">#NoAlBullying</a>

               </div>
            </div>
         </div>
      </div>
   </div>



   <script>
      document.addEventListener('DOMContentLoaded', () => {
         const sitemapLinks = document.querySelectorAll('.sitemap-link');

         sitemapLinks.forEach(link => {
            link.addEventListener('click', (e) => {
               console.log(`Navigating to: ${e.target.href}`);
            });

            link.setAttribute('aria-label', `Navigate to ${link.textContent}`);
         });
      });
   </script>
</body>


<?php include_once("../rp/footer.php"); ?>

</html>