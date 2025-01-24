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
      <li class='item' style="background-image: url('../img_sp/instalaciones/carr1.jpg')">
         <div class='content'>
            <h2 class='title'>"Compromiso con la Excelencia Académica"</h2>
            <p class='description'> Nuestras instalaciones incluyen modernas aulas y laboratorios especializados que brindan un entorno óptimo para el aprendizaje y la investigación en todos los niveles educativos: preparatoria, licenciatura y maestría. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/instalaciones/carr2.jpg')">
         <div class='content'>
            <h2 class='title'>"Infraestructura de Vanguardia"</h2>
            <p class='description'> Nuestra universidad cuenta con bibliotecas digitales, auditorios modernos y centros de innovación que permiten a los estudiantes expandir sus conocimientos y fortalecer sus competencias profesionales. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/instalaciones/carr3.jpg')">
         <div class='content'>
            <h2 class='title'>"Espacios para el Desarrollo Integral"</h2>
            <p class='description'> Ofrecemos áreas recreativas, deportivas y culturales que fomentan el desarrollo integral de nuestros estudiantes, promoviendo un balance entre el estudio y el bienestar personal. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/instalaciones/carr4.jpg')">
         <div class='content'>
            <h2 class='title'>"Tecnología y Conectividad"</h2>
            <p class='description'> Contamos con infraestructura tecnológica de primer nivel, con acceso a plataformas digitales y herramientas que permiten a nuestros estudiantes estar siempre conectados y preparados para los desafíos del mundo actual. </p>
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
         <img class="card-img" src="../img_sp/instalaciones/s1.jpg" alt="Campus universitario">
         <div class="info-header">
            <h3 class="card-title">Campus de Alto Nivel</h3>
            <p class="projects-info">Un entorno para el aprendizaje y la innovación</p>
         </div>
         <p class="card-desc">Nuestras modernas instalaciones ofrecen un entorno educativo de excelencia, con espacios diseñados para fomentar la innovación, el desarrollo profesional y el crecimiento personal.</p>
      </div>
      <a href="../sp/modelo_educativo.php" class="cta-btn">Explora nuestras áreas</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/instalaciones/s2.jpg" alt="Laboratorios especializados">
         <div class="info-header">
            <h3 class="card-title">Laboratorios Especializados</h3>
            <p class="projects-info">Experimenta e innova</p>
         </div>
         <p class="card-desc">Nuestros laboratorios de última generación permiten a los estudiantes desarrollar proyectos científicos y tecnológicos con los más altos estándares de calidad.</p>
      </div>
      <a href="../sp/modelo_educativo.php" class="cta-btn">Explora nuestras áreas</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/instalaciones/s3.jpg" alt="Áreas deportivas">
         <div class="info-header">
            <h3 class="card-title">Áreas Deportivas</h3>
            <p class="projects-info">Bienestar y actividad física</p>
         </div>
         <p class="card-desc">Fomentamos un estilo de vida saludable con canchas de fútbol, baloncesto, gimnasio y espacios diseñados para la recreación y el deporte.</p>
      </div>
      <a href="../sp/modelo_educativo.php" class="cta-btn">Explora nuestras áreas</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/instalaciones/s4.jpg" alt="Biblioteca universitaria">
         <div class="info-header">
            <h3 class="card-title">Biblioteca Digital</h3>
            <p class="projects-info">Recursos al alcance de todos</p>
         </div>
         <p class="card-desc">Nuestra biblioteca digital ofrece acceso a una amplia gama de recursos académicos y científicos, facilitando la investigación y el aprendizaje autónomo.</p>
      </div>
      <a href="../sp/modelo_educativo.php" class="cta-btn">Explora nuestras áreas</a>
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