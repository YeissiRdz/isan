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
      <li class='item' style="background-image: url('../img_sp/docentes/carr1.jpg')">
         <div class='content'>
            <h2 class='title'>"Commitment to Academic Excellence"</h2>
            <p class='description'> Our faculty members provide an optimal learning and research environment, ensuring holistic development at all educational levels: high school, bachelor's, and master's degrees. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/docentes/carr2.jpg')">
         <div class='content'>
            <h2 class='title'>"Faculty with Cutting-Edge Infrastructure"</h2>
            <p class='description'> Our professors are equipped with modern tools and digital resources, enabling them to deliver high-quality lessons and strengthen the professional development of our students. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/docentes/carr3.jpg')">
         <div class='content'>
            <h2 class='title'>"Professors Focused on the Holistic Development of Students"</h2>
            <p class='description'> Our faculty promotes a balance between study and personal well-being, providing academic and personal support for the holistic growth of our students. </p>
         </div>
      </li>
      <li class='item' style="background-image: url('../img_sp/docentes/carr4.jpg')">
         <div class='content'>
            <h2 class='title'>"Technology and Connectivity in the Classroom"</h2>
            <p class='description'> Our professors are equipped with the best technological infrastructure, utilizing digital platforms and tools that enhance teaching and communication. </p>
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
         <img class="card-img" src="../img_sp/docentes/s1.jpg" alt="Teacher giving a class">
         <div class="info-header">
            <h3 class="card-title">High-Level Faculty</h3>
            <p class="projects-info">An excellent educational environment</p>
         </div>
         <p class="card-desc">Our professors are highly trained to offer quality lessons, contributing to the academic and professional development of students.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Meet our faculty</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/docentes/s2.jpg" alt="Faculty in specialized laboratory">
         <div class="info-header">
            <h3 class="card-title">Faculty in Specialized Laboratories</h3>
            <p class="projects-info">Academic innovation</p>
         </div>
         <p class="card-desc">Our faculty guides students in developing scientific and technological projects, using the most advanced resources for learning.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Meet our faculty</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/docentes/s3.jpg" alt="Faculty in sports area">
         <div class="info-header">
            <h3 class="card-title">Faculty in Sports Areas</h3>
            <p class="projects-info">Well-being and physical education</p>
         </div>
         <p class="card-desc">Our faculty promotes a healthy lifestyle through classes and physical activities in spaces designed to foster well-being and sports.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Meet our faculty</a>
   </div>
   <div class="card">
      <div class="card-header">
         <img class="card-img" src="../img_sp/docentes/s4.jpg" alt="Faculty using digital resources">
         <div class="info-header">
            <h3 class="card-title">Faculty with Digital Library</h3>
            <p class="projects-info">Academic resources at your fingertips</p>
         </div>
         <p class="card-desc">Our faculty uses the digital library to provide access to a vast range of academic resources, supporting autonomous learning and research.</p>
      </div>
      <a href="../sp/actividades_extraescolares.php" class="cta-btn">Meet our faculty</a>
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