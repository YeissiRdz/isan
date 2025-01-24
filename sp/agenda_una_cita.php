<!DOCTYPE html>
<html lang="es_MX">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles_sp/agenda_una_cita.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<?php include_once("../rp/head.php") ?>
<?php include_once("../rp/navbar.php") ?>

<body>
   <style>
      /* Button and Form Styling */
      .btn-primary {
         padding: 0.5rem 1.5rem;
         background-color: rgba(96, 137, 168, 255);
         color: #000;
         border: none;
         cursor: pointer;
         text-transform: uppercase;
         font-weight: bold;
         color: rgb(255, 255, 255);
      }

      .form-box {
         max-width: 500px;
         margin: auto;
         padding: 2rem;
         background: none;
         /* No background color */
      }

      /* Modal Styling */
      .modal {
         display: none;
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: rgba(255, 255, 255);
         justify-content: center;
         align-items: center;
         animation: fadeIn 0.5s ease-out;
         z-index: 1000;
      }

      .modal-content {
         background-color: #fff;
         color: #15273D;
         /* Blue text */
         padding: 1.5rem;
         border-radius: 8px;
         text-align: center;
         max-width: 500px;
         margin: auto;
         font-weight: 600;
         animation: scaleUp 0.5s ease-out;

      }

      /* Close button for future extensibility */
      .close {
         position: absolute;
         top: 10px;
         right: 15px;
         font-size: 1.5rem;
         cursor: pointer;
      }

      /* Animations */
      @keyframes fadeIn {
         from {
            opacity: 0;
         }

         to {
            opacity: 1;
         }
      }

      @keyframes scaleUp {
         from {
            transform: scale(0.9);
         }

         to {
            transform: scale(1);
         }
      }
   </style>
   <div class="contact_us_6">
      <div class="responsive-container-block container">
         <!-- Contact Form -->
         <form id="contactForm" class="form-box" action="../rp/enviar_formulario.php" method="POST">
            <div class="container-block form-wrapper">
               <div class="mob-text">
                  <p class="text-blk contactus-head">¡Agenda tu cita con nosotros ahora!</p>
               </div>
               <div class="responsive-container-block" id="i2cbk">
                  <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
                     <p class="text-blk input-title">Nombre Completo</p>
                     <input class="input" id="ijowk-3" name="FirstName" placeholder="Ingresa tu nombre..." required>
                  </div>
                  <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
                     <p class="text-blk input-title">Email</p>
                     <input type="email" class="input" id="ipmgh-3" name="Email" placeholder="Ingresa tu email..." required>
                  </div>
                  <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
                     <p class="text-blk input-title">Número de teléfono</p>
                     <input type="number" class="input" id="imgis-3" name="PhoneNumber" placeholder="Ingresa tu teléfono..." required>
                  </div>
                  <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
                     <p class="text-blk input-title">Escribe tu mensaje</p>
                     <textarea class="textinput" id="i5vyy-3" name="Message" placeholder="Redacta tu mensaje..." required></textarea>
                  </div>
                  <button type="submit" class="btn-primary">ENVIAR</button>
               </div>
            </div>
         </form>

         <!-- Success Modal -->
         <div id="successModal" class="modal">
            <div class="modal-content">
               <span>¡Tu mensaje ha sido enviado con éxito!</span>
            </div>
         </div>

         <!-- Map Section (Remains Unchanged) -->
         <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
            <div class="map-part">
               <p class="text-blk map-contactus-head">Contáctanos</p>
               <p class="text-blk map-contactus-subhead">Educación de excelencia y bilingüe. <br> - Preparatoria - Licenciaturas - Maestrías</p>
               <div class="map-box container-block">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.0880028026068!2d-103.4292119887193!3d25.535445377400873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fdbd813dd7e35%3A0x5677464a7616ed0b!2sISAN%20Instituto%20Superior%20de%20Administraci%C3%B3n%20y%20Negocios!5e0!3m2!1sen!2smx!4v1737528365602!5m2!1sen!2smx" width="100%" height="100%" style="border:0; display: block;" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="outerdiv">
      <div class="innerdiv">
         <!-- div1 -->
         <div class="div1 eachdiv">
            <div class="userdetails">
               <div class="imgbox">
                  <img src="https://cdn-icons-png.freepik.com/512/7022/7022927.png" alt="">
               </div>
               <div class="detbox">
                  <p class="name">María González</p>
                  <p class="designation">Madre de familia</p>
               </div>
            </div>
            <div class="review">
               <h4>Mi hija está muy feliz en su Maestría</h4>
               <p>“Estamos muy contentos con la educación que recibe mi hija en el kinder. Los maestros son muy atentos y dedicados, y siempre están dispuestos a apoyar el desarrollo de los niños de una manera muy divertida y educativa. Sin duda, una excelente elección para nuestros pequeños.”</p>
            </div>
         </div>
         <!-- div2 -->
         <div class="div2 eachdiv">
            <div class="userdetails">
               <div class="imgbox">
                  <img src="https://cdn-icons-png.freepik.com/512/7022/7022927.png" alt="">
               </div>
               <div class="detbox">
                  <p class="name">José Martínez</p>
                  <p class="designation">Padre de familia</p>
               </div>
            </div>
            <div class="review">
               <h4>Un ambiente de aprendizaje único</h4>
               <p>“Mi hijo está cursando la Licenciatura en ISAN y estamos muy satisfechos con su progreso. Los docentes están muy comprometidos.”</p>
            </div>
         </div>
         <!-- div3 -->
         <div class="div3 eachdiv">
            <div class="userdetails">
               <div class="imgbox">
                  <img src="https://cdn-icons-png.freepik.com/512/7022/7022927.png" alt="">
               </div>
               <div class="detbox">
                  <p class="name dark">Laura Hernández</p>
                  <p class="designation dark">Madre de familia</p>
               </div>
            </div>
            <div class="review dark">
               <h4>Las Licenciaturas han sido una gran experiencia para mi hijo</h4>
               <p>“Cursar su licenciatura en ISAN ha sido todo un éxito para mi hijo. Los docentes son altamente capacitados y siempre tienen en cuenta las necesidades individuales de cada alumno. Mi hijo ha mejorado muchísimo tanto en lo académico como en su desarrollo personal. ¡Estamos muy agradecidos con la institución!”</p>
            </div>
         </div>
         <!-- div4 -->
         <div class="div4 eachdiv">
            <div class="userdetails">
               <div class="imgbox">
                  <img src="https://cdn-icons-png.freepik.com/512/7022/7022927.png" alt="">
               </div>
               <div class="detbox">
                  <p class="name dark">Carlos Rivera</p>
                  <p class="designation dark">Padre de familia</p>
               </div>
            </div>
            <div class="review dark">
               <h4>Excelente educación y valores</h4>
               <p>“Mi hija se siente muy feliz en la preparatoria en ISAN. No solo ha aprendido mucho, sino que también ha aprendido importantes valores como la responsabilidad.”</p>
            </div>
         </div>
         <!-- div5 -->
         <div class="div5 eachdiv">
            <div class="userdetails">
               <div class="imgbox">
                  <img src="https://cdn-icons-png.freepik.com/512/7022/7022927.png" alt="">
               </div>
               <div class="detbox">
                  <p class="name">Lucía Pérez</p>
                  <p class="designation">Madre de familia</p>
               </div>
            </div>
            <div class="review">
               <h4>Un lugar ideal para el crecimiento integral de los chicos</h4>
               <p>“Estamos muy contentos con la formación que mi hijo recibe en el Instituto, tanto en el aspecto académico como en lo personal. ISAN se esfuerza por brindar un ambiente seguro y estimulante donde los niños pueden crecer, aprender y divertirse. ¡Recomendado al 100%!”</p>
            </div>
         </div>
      </div>
   </div>


   <!-- JavaScript for AJAX and Modal Display -->
   <script>
      document.getElementById('contactForm').onsubmit = function(event) {
         event.preventDefault();

         // Obtener los datos del formulario
         const formData = new FormData(document.getElementById('contactForm'));

         // Realizar la solicitud AJAX para enviar el formulario
         fetch('../rp/enviar_formulario.php', {
               method: 'POST',
               body: formData
            })
            .then(response => response.text())
            .then(data => {
               if (data.trim() === "success") {
                  // Mostrar el modal de éxito
                  document.getElementById('successModal').style.display = 'flex';

                  // Esperar 3 segundos, luego ocultar el modal
                  setTimeout(function() {
                     document.getElementById('successModal').style.display = 'none';
                     document.getElementById('contactForm').reset(); // Limpiar los campos del formulario
                  }, 3000); // 3 segundos
               } else {
                  alert("Hubo un error al enviar el mensaje. Inténtalo nuevamente.");
               }
            })
            .catch(error => console.error('Error:', error));
      };
      document.getElementById('contactForm').reset(); // Esto limpia los campos del formulario
   </script>


</body>


<?php include_once("../rp/footer.php") ?>

</html>