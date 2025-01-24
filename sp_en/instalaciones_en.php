<!DOCTYPE html>
<html lang="en">

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
            <h2 class='title'>"Commitment to Academic Excellence"</h2>
            <p class='description'> Our facilities include modern classrooms and specialized laboratories that provide an optimal environment for learning and research at all educational levels: high school, undergraduate, and graduate. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/instalaciones/carr2.jpg')">
         <div class='content'>
            <h2 class='title'>"State-of-the-Art Infrastructure"</h2>
            <p class='description'> Our university features digital libraries, modern auditoriums, and innovation centers that allow students to expand their knowledge and strengthen their professional skills. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/instalaciones/carr3.jpg')">
         <div class='content'>
            <h2 class='title'>"Spaces for Holistic Development"</h2>
            <p class='description'> We offer recreational, sports, and cultural areas that promote the holistic development of our students, encouraging a balance between study and personal well-being. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/instalaciones/carr4.jpg')">
         <div class='content'>
            <h2 class='title'>"Technology and Connectivity"</h2>
            <p class='description'> We have top-tier technological infrastructure, with access to digital platforms and tools that enable our students to stay connected and prepared for the challenges of today's world. </p>
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
         <img class="card-img" src="../img_sp/instalaciones/s1.jpg" alt="University campus">
         <div class="info-header">
            <h3 class="card-title">High-Level Campus</h3>
            <p class="projects-info">An environment for learning and innovation</p>
         </div>
         <p class="card-desc">Our modern facilities provide an excellent educational environment, with spaces designed to foster innovation, professional development, and personal growth.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Explore our areas</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/instalaciones/s2.jpg" alt="Specialized laboratories">
         <div class="info-header">
            <h3 class="card-title">Specialized Laboratories</h3>
            <p class="projects-info">Experiment and innovate</p>
         </div>
         <p class="card-desc">Our state-of-the-art laboratories allow students to develop scientific and technological projects with the highest quality standards.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Explore our areas</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/instalaciones/s3.jpg" alt="Sports areas">
         <div class="info-header">
            <h3 class="card-title">Sports Areas</h3>
            <p class="projects-info">Well-being and physical activity</p>
         </div>
         <p class="card-desc">We promote a healthy lifestyle with soccer fields, basketball courts, a gym, and spaces designed for recreation and sports.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Explore our areas</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/instalaciones/s4.jpg" alt="University library">
         <div class="info-header">
            <h3 class="card-title">Digital Library</h3>
            <p class="projects-info">Resources at everyone's reach</p>
         </div>./img_sp/instalaciones/img4_instal.png
         <p class="card-desc">Our digital library offers access to a wide range of academic and scientific resources, facilitating research and self-directed learning.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Explore our areas</a>
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