<!DOCTYPE html>
<html lang="es_mx">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles_sp/instalaciones.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<?php include_once("../rp/head.php") ?>
<?php include_once("../rp/navbar.php") ?>

<main>
   <ul class='slider'>
      <li class='item' style="background-image: url('')">
      </li>
      <li class='item' style="background-image: url('../img_sp/docentes/carr1.jpg')">
         <div class='content'>
            <h2 class='title'>"Compromiso de Nuestros Docentes con la Excelencia"</h2>
            <p class='description'> Nuestros docentes brindan un entorno óptimo para el aprendizaje y la investigación, asegurando un desarrollo integral en todos los niveles educativos: preparatoria, licenciatura y maestría. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/docentes/carr2.jpg')">
         <div class='content'>
            <h2 class='title'>"Docentes con Infraestructura de Vanguardia"</h2>
            <p class='description'> Nuestros profesores cuentan con herramientas y recursos digitales modernos que les permiten ofrecer clases de calidad y fortalecer la formación profesional de nuestros estudiantes. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/docentes/carr3.jpg')">
         <div class='content'>
            <h2 class='title'>"Profesores Dedicados al Desarrollo Integral de los Estudiantes"</h2>
            <p class='description'> Nuestros docentes promueven un balance entre el estudio y el bienestar personal, brindando apoyo académico y personal para el desarrollo integral de nuestros estudiantes. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/docentes/carr4.jpg')">
         <div class='content'>
            <h2 class='title'>"Tecnología y Conectividad en el Aula"</h2>
            <p class='description'> Nuestros profesores están equipados con la mejor infraestructura tecnológica, utilizando plataformas digitales y herramientas que optimizan la enseñanza y la comunicación. </p>
         </div>
      </li>
   </ul>
   <nav class='nav'>
      <ion-icon class='btn prev' name="arrow-back-outline"></ion-icon>
      <ion-icon class='btn next' name="arrow-forward-outline"></ion-icon>
   </nav>
</main>

<div class="container_instalaciones">
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/docentes/s1.jpg" alt="Docente impartiendo clases">
         <div class="info-header">
            <h3 class="card-title">Docentes de Alto Nivel</h3>
            <p class="projects-info">Un entorno educativo de excelencia</p>
         </div>
         <p class="card-desc">Nuestros profesores están altamente capacitados para ofrecer clases de calidad, contribuyendo al desarrollo académico y profesional de los estudiantes.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Conoce a nuestros docentes</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/docentes/s2.jpg" alt="Docentes en laboratorio">
         <div class="info-header">
            <h3 class="card-title">Docentes en Laboratorios Especializados</h3>
            <p class="projects-info">Innovación académica</p>
         </div>
         <p class="card-desc">Nuestros docentes guían a los estudiantes en el desarrollo de proyectos científicos y tecnológicos, usando los recursos más avanzados para el aprendizaje.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Conoce a nuestros docentes</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/docentes/s3.jpg" alt="Docente en área deportiva">
         <div class="info-header">
            <h3 class="card-title">Docentes en Áreas Deportivas</h3>
            <p class="projects-info">Bienestar y formación física</p>
         </div>
         <p class="card-desc">Nuestros docentes promueven el deporte y el bienestar a través de clases y actividades físicas en espacios diseñados para fomentar un estilo de vida saludable.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Conoce a nuestros docentes</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/docentes/s4.jpg" alt="Docente utilizando recursos digitales">
         <div class="info-header">
            <h3 class="card-title">Docentes con Biblioteca Digital</h3>
            <p class="projects-info">Recursos académicos al alcance</p>
         </div>
         <p class="card-desc">Nuestros docentes utilizan la biblioteca digital para proporcionar acceso a una vasta gama de recursos académicos, apoyando el aprendizaje autónomo y la investigación.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Conoce a nuestros docentes</a>
   </div>
</div>

<?php include_once("../rp/footer.php") ?>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
   const slider = document.querySelector('.slider');

   function activate(e) {
      const items = document.querySelectorAll('.item');
      e.target.matches('.next') && slider.append(items[0])
      e.target.matches('.prev') && slider.prepend(items[items.length - 1]);
   }

   document.addEventListener('click', activate, false);
</script>

</html>