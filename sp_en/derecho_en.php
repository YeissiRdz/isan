<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../styles_sp/derecho.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<script src="sp.js"></script>
<?php include_once("../rp/head.php") ?>
<?php include_once("../rp/navbar.php") ?>

<body>

   <section class="first_section_niveles_educativos">
      <div class="first_section_niveles_educativos_img" style="background-image: url(../img_sp/derecho/portada.png);"></div>
      <div class="first_section_niveles_educativos_portada">
         <h2 class="first_section_niveles_educativos_title">ISAN Law Degree</h2>
         <p class="first_section_niveles_educativos_sibtitle">We train lawyers prepared to lead and resolve legal challenges in prestigious institutions.</p>
      </div>
   </section>

   <section class="second_section">
      <div class="second_section_grid">
         <div class="second_section_grid_info">
            <h2>Our Law graduates have been recognized for their <strong> academic excellence and its impact on prestigious legal institutions.</strong></h2>
         </div>
         <div class="second_section_grid_img">
            <img src="../img_sp/contaduria/seventh_section_licenciatura.png">
         </div>
      </div>
   </section>


   <section class="third_section">
      <div class="third_section_grid">
         <div class="third_section_img">
            <img src="../img_sp/derecho/third_section.png">
         </div>
         <div class="third_section_info">
            <h2>At ISAN, Law Degree students complement their comprehensive training by participating in activities such as:</h2>
            <div class="third_section_info_grid">
               <div class="third_section_info_grid_actividades_1">
                  <ul>
                     <li>Legal argumentation workshops</li>
                     <li>Oral trial simulations</li>
                     <li>Legal conflict resolution</li>
                     <li>Legal oratory and debate</li>
                     <li>Analysis of real legal cases</li>
                  </ul>
               </div>
               <div class="third_section_info_grid_actividades_1">
                  <ul>
                     <li>Professional ethics workshops</li>
                     <li>Conferences with legal experts</li>
                     <li>Training in mediation and arbitration</li>
                     <li>Visits to judicial institutions</li>
                     <li>Legal document drafting</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="fourth_section">
      <div class="fourth_section_grid">
         <div class="fourth_section_grid_img">
            <img src="../img_sp/preparatoria_abierta/logo_isan.png">
         </div>
         <div class="fourth_section_grid_info">
            <h2>Download our information brochure where you will learn about:</h2>
            <div class="fourth_section_grid_info_grid">
               <div class="fourth_section_grid_info_grid_ul">
                  <ul>
                     <li><i class="fa-solid fa-circle"></i> Educational Model</li>
                     <li><i class="fa-solid fa-circle"></i> Bachelor's degrees</li>
                  </ul>
               </div>
               <div class="fourth_section_grid_info_grid_ul second_ul">
                  <ul>
                     <li><i class="fa-solid fa-circle"></i> Bachelor's degrees</li>
                     <li><i class="fa-solid fa-circle"></i> More...</li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="fourth_section_grid_forms">
            <p>Share your email and receive the brochure</p>
            <form action="#" method="POST" class="email_form">
               <input type="email" name="email" placeholder="correo@ejemplo.com.mx*" required>
               <button type="submit">Send</button>
            </form>
            <a href="../sp_en/politicas_de_privacidad_en.php" class="privacy_notice">Privacy Policies</a>
         </div>
      </div>
   </section>



   <section class="fifth_section">
      <div class="fifth_section_grid">
         <div class="fifth_section_grid_img">
            <img src="../img_sp/preparatoria_abierta/sixth_section.png">
         </div>
         <div class="fifth_section_grid_info">
            <p><strong>ISAN Schedule:</strong> 7:30 am to 3:00 pm</p>
            <p><strong>Extended Schedule:</strong> 3:00 pm to 4:30 pm</p>
         </div>
         <div class="fifth_section_grid_button">
            <a href="../sp_en/agenda_una_cita_en.php">Schedule</a>
         </div>
      </div>
   </section>


   <section class="sixth_section">
      <div class="sixth_section_grid">
         <div class="sixth_section_grid_img">
            <img src="../img_sp/derecho/sixth_section.png" alt="Imagen">
         </div>
         <div class="sixth_section_grid_info">
            <h2>At ISAN's Law Degree Program, we provide comprehensive training in a dynamic and professional environment:</h2>
            <div class="sixth_section_grid_info_wrap">
               <div class="sixth_section_grid_info_box" onclick="openModal(null,'sixth_section_modal1')">
                  <img src="../img_sp/derecho/sixth_section_1.png" alt="Specialized Teaching Icon">
                  <p>Specialized knowledge</p>
               </div>
               <div class="sixth_section_grid_info_box" onclick="openModal(null,'sixth_section_modal2')">
                  <img src="../img_sp/derecho/sixth_section_2.png" alt="Active Learning Icon">
                  <p>Hands-on learning</p>
               </div>
               <div class="sixth_section_grid_info_box" onclick="openModal(null, 'sixth_section_modal3')">
                  <img src="../img_sp/derecho/sixth_section_3.png" alt="Critical Learning Icon">
                  <p>Critical thinking development</p>
               </div>
               <div class="sixth_section_grid_info_box" onclick="openModal(null, 'sixth_section_modal4')">
                  <img src="../img_sp/derecho/sixth_section_4.png" alt="Global Preparation Icon">
                  <p>Global perspective</p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Modals -->
   <div id="sixth_section_modal1" class="sixth_section_modal">
      <div class="sixth_section_modal-content">
         <span class="sixth_section_close" onclick="closeModal('sixth_section_modal1')">&times;</span>
         <img src="../img_sp/derecho/sixth_section_modal_1.png">
         <h2>Specialized Knowledge</h2>
         <p>ISAN focuses on providing solid training in key areas of Law, such as civil, criminal, constitutional, administrative, international law, among others.</p>
         <ul>
            <li>Civil, criminal, and constitutional law.</li>
            <li>Commercial and tax legislation.</li>
            <li>International regulations.</li>
            <li>Updates on legal reforms.</li>
         </ul>
      </div>
   </div>

   <div id="sixth_section_modal2" class="sixth_section_modal">
      <div class="sixth_section_modal-content">
         <span class="sixth_section_close" onclick="closeModal('sixth_section_modal2')">&times;</span>
         <img src="../img_sp/derecho/sixth_section_modal_2.png">
         <h2>Practical Learning</h2>
         <p>The training includes professional practices and simulations that prepare students to face real-life scenarios.</p>
         <ul>
            <li>Mock trials.</li>
            <li>Analysis of real cases.</li>
            <li>Internships in law firms.</li>
            <li>Resolution of legal conflicts.</li>
         </ul>
      </div>
   </div>

   <div id="sixth_section_modal3" class="sixth_section_modal">
      <div class="sixth_section_modal-content">
         <span class="sixth_section_close" onclick="closeModal('sixth_section_modal3')">&times;</span>
         <img src="../img_sp/derecho/sixth_section_modal_3.png">
         <h2>Development of Critical Thinking</h2>
         <p>ISAN encourages students to analyze, question, and evaluate different legal perspectives to make informed decisions.</p>
         <ul>
            <li>Debate on ethical dilemmas.</li>
            <li>Interpretation of laws.</li>
            <li>Resolution of legal problems.</li>
            <li>Building solid arguments.</li>
         </ul>
      </div>
   </div>

   <div id="sixth_section_modal4" class="sixth_section_modal">
      <div class="sixth_section_modal-content">
         <span class="sixth_section_close" onclick="closeModal('sixth_section_modal4')">&times;</span>
         <img src="../img_sp/derecho/sixth_section_modal_3.png">
         <h2>Global Perspective</h2>
         <p>The program integrates an international view of Law, considering global regulations and legal trends.</p>
         <ul>
            <li>Public international law.</li>
            <li>Comparative analysis of legal systems.</li>
            <li>Connection with global legal networks.</li>
            <li>Multicultural approach in legal practice.</li>
         </ul>
      </div>
   </div>

   <section class="seventh_section">
      <h2><strong>DEFENDING JUSTICE, TRANSFORMING THE FUTURE!</strong></h2>
      <div class="seventh_section_grid">
         <div class="seventh_section_grid_info">
            <p>At ISAN, we train leading lawyers in their environment, promoting key values and competencies through:</p>
            <ul>
               <li>Training in negotiation and mediation of legal conflicts.</li>
               <li>Development of argumentation and legal communication skills.</li>
               <li>Participation in forums, social activities, and legal simulations.</li>
               <li>Study of comparative legislation in a global context.</li>
            </ul>
         </div>
         <div class="seventh_section_grid_video">
            <video controls poster="../img_sp/derecho/seventh_section_video.png" class="third_section_grid_himno_video">
               <source src="../img_sp/modelo_educativo/third_section_video.mp4" type="video/mp4">
               Your browser does not support video playback. Please update your browser.
            </video>
         </div>
      </div>
   </section>

   <section class="ninth_section">
      <div class="ninth_section_grid">
         <div class="ninth_section_img">
            <div class="ninth_section_gradient"></div>
            <div class="ninth_section_content">
               <div class="ninth_section_content_1">
                  <h2>Admissions</h2>
                  <p>Start the admission process to ISAN and learn about:</p>
                  <ul>
                     <li>Admission process</li>
                     <li>Entry requirements</li>
                     <li>Scholarships</li>
                  </ul>
               </div>
               <div class="ninth_section_content_2">
                  <button>Request appointment</button>
               </div>
            </div>
         </div>
         <div class="ninth_section_info">
            <h2><strong>Scholarships and</strong>
               <br>Agreements
            </h2>
            <p>Discounts for employees of companies and students from schools with agreements.</p>
            <a href="javascript:void(0)"><strong>More Information <i class="fa-solid fa-chevron-right"></i></strong></a>
         </div>
      </div>
   </section>

   <section class="tenth_section">
      <h2>Welcome to build a different stage in one of the best institutes in Mexico!</h2>
      <div class="tenth_section_grid">
         <div class="tenth_section_grid_item" style="background-image: url(../img_sp/derecho/tenth_section_1.png);">
            <div class="tenth_section_grid_item_info">
               <p>State-of-the-art facilities<br><span>ISAN</span></p>
               <div class="tenth_section_grid_item_meta">
                  <a href="#" onclick="openModal(event, 'modal1', 'video1')"><i class="fa-solid fa-circle-play"></i></a>
                  <span>1 min. video.</span>
               </div>
            </div>
         </div>
         <div class="tenth_section_grid_item" style="background-image: url(../img_sp/derecho/tenth_section_2.png);">
            <div class="tenth_section_grid_item_info">
               <p>Analysis of real legal cases<br><span>ISAN</span></p>
               <div class="tenth_section_grid_item_meta">
                  <a href="#" onclick="openModal(event, 'modal2', 'video2')"><i class="fa-solid fa-circle-play"></i></a>
                  <span>1 min. video.</span>
               </div>
            </div>
         </div>
      </div>

      <div class="tenth_section_grid">
         <div class="tenth_section_grid_item" style="background-image: url(../img_sp/derecho/tenth_section_3.png);">
            <div class="tenth_section_grid_item_info">
               <p>Training in economic law<br><span>ISAN</span></p>
               <div class="tenth_section_grid_item_meta">
                  <a href="#" onclick="openModal(event, 'modal3', 'video3')"><i class="fa-solid fa-circle-play"></i></a>
                  <span>1 min. video.</span>
               </div>
            </div>
         </div>
         <div class="tenth_section_grid_item" style="background-image: url(../img_sp/derecho/tenth_section_4.png);">
            <div class="tenth_section_grid_item_info">
               <p>Training in constitutional law<br><span>ISAN</span></p>
               <div class="tenth_section_grid_item_meta">
                  <a href="#" onclick="openModal(event, 'modal4', 'video4')"><i class="fa-solid fa-circle-play"></i></a>
                  <span>1 min. video.</span>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Modals -->
   <div id="modal1" class="modal">
      <div class="modal-content">
         <span class="close" onclick="closeModal('modal1', 'video1')">&times;</span>
         <video id="video1" width="640" height="360" controls>
            <source src="../img_sp/derecho/tenth_section.mp4" type="video/mp4">
            Your browser does not support video playback.
         </video>
      </div>
   </div>

   <div id="modal2" class="modal">
      <div class="modal-content">
         <span class="close" onclick="closeModal('modal2', 'video2')">&times;</span>
         <video id="video2" width="640" height="360" controls>
            <source src="../img_sp/derecho/tenth_section_2.mp4" type="video/mp4">
            Your browser does not support video playback.
         </video>
      </div>
   </div>

   <div id="modal3" class="modal">
      <div class="modal-content">
         <span class="close" onclick="closeModal('modal3', 'video3')">&times;</span>
         <video id="video3" width="640" height="360" controls>
            <source src="../img_sp/derecho/tenth_section.mp4" type="video/mp4">
            Your browser does not support video playback.
         </video>
      </div>
   </div>

   <div id="modal4" class="modal">
      <div class="modal-content">
         <span class="close" onclick="closeModal('modal4', 'video4')">&times;</span>
         <video id="video4" width="640" height="360" controls>
            <source src="../img_sp/derecho/tenth_section_2.mp4" type="video/mp4">
            Your browser does not support video playback.
         </video>
      </div>
   </div>

   <section class="eleventh_section">
      <div class="eleventh_section_title">
         <h2>At ISAN, we offer safe spaces that enhance academic and personal development.</h2>
      </div>
      <div class="eleventh_section_info">
         <h2>ISAN</h2>
         <p>Take a virtual tour of our facilities.</p>
         <a href="../sp/instalaciones.php"><strong>Take the tour <i class="fa-solid fa-chevron-right"></i></strong></a>
      </div>
   </section>

   <section class="eighth_section">
      <div class="eighth_section_grid">
         <div class="eighth_section_grid_div" id="eighth_section_grid_div_id1">
            <h2>ISAN Blog</h2>
            <p>News about school activities, <strong>articles on educational trends and tips</strong> for each of our students.</p>
         </div>

         <div class="eighth_section_grid_div eighth_section_second_div" id="eighth_section_grid_div_id2">
            <div class="eighth_section_second_div_img">
               <img src="../img_sp/preparatoria_abierta/eighth_section.png">
            </div>
            <div>
               <h3>Degrees with access to great opportunities</h3>
               <p>Study Law or Accounting and access great professional opportunities thanks to our comprehensive training...</p>
            </div>
            <div class="eighth_section_second_div_button">
               <a href="javascript:void(0)"><strong>Read more <i class="fa-solid fa-arrow-right"></i></strong></a>
            </div>
         </div>

         <div class="eighth_section_grid_div eighth_section_second_div" id="eighth_section_grid_div_id3">
            <div class="eighth_section_second_div_img">
               <img src="../img_sp/preparatoria_abierta/eighth_section.png">
            </div>
            <div>
               <h3>ISAN Master's Programs</h3>
               <p>Designed to train highly qualified leaders, following international standards of academic and professional excellence...</p>
            </div>
            <div class="eighth_section_second_div_button">
               <a href="../sp_en/maestria_contaduria_en.php"><strong>Read more <i class="fa-solid fa-arrow-right"></i></strong></a>
            </div>
         </div>
      </div>
   </section>
</body>

<script>
   function openModal(event, modalId, videoId = null) {
      if (event) event.preventDefault();
      var modal = document.getElementById(modalId);
      modal.style.display = 'block';
      if (videoId) {
         var video = document.getElementById(videoId);
         video.play();
      }
   }

   function closeModal(modalId, videoId = null) {
      var modal = document.getElementById(modalId);
      modal.style.display = 'none';
      if (videoId) {
         var video = document.getElementById(videoId);
         video.pause();
         video.currentTime = 0;
      }
   }

   window.onclick = function(event) {
      // Para modales con video
      var videoModals = document.getElementsByClassName('modal');
      for (var i = 0; i < videoModals.length; i++) {
         if (event.target == videoModals[i]) {
            var video = videoModals[i].getElementsByTagName('video')[0];
            closeModal(videoModals[i].id, video.id);
         }
      }

      // Para modales simples
      var infoModals = document.getElementsByClassName('sixth_section_modal');
      for (var j = 0; j < infoModals.length; j++) {
         if (event.target == infoModals[j]) {
            closeModal(infoModals[j].id);
         }
      }
   };
</script>
<?php include_once("../rp/footer.php") ?>

</html>