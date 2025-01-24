<!DOCTYPE html>
<html lang="en">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles_sp/agenda_una_cita.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<?php include_once("../rp_en/head_en.php") ?>
<?php include_once("../rp_en/navbar_en.php") ?>

<body>
   <style>
      .btn-primary {
         padding: 0.5rem 1.5rem;
         background-color: rgba(96, 137, 168, 255);
         color: #fff;
         border: none;
         cursor: pointer;
         text-transform: uppercase;
         font-weight: bold;
      }

      .form-box {
         max-width: 500px;
         margin: auto;
         padding: 2rem;
         background: none;
      }

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
         padding: 1.5rem;
         border-radius: 8px;
         text-align: center;
         max-width: 500px;
         margin: auto;
         font-weight: 600;
         animation: scaleUp 0.5s ease-out;
      }

      .close {
         position: absolute;
         top: 10px;
         right: 15px;
         font-size: 1.5rem;
         cursor: pointer;
      }

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
         <form id="contactForm" class="form-box" action="../rp/enviar_formulario.php" method="POST">
            <div class="container-block form-wrapper">
               <div class="mob-text">
                  <p class="text-blk contactus-head">Schedule your appointment with us now!</p>
               </div>
               <div class="responsive-container-block" id="i2cbk">
                  <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
                     <p class="text-blk input-title">Full Name</p>
                     <input class="input" id="ijowk-3" name="FirstName" placeholder="Enter your name..." required>
                  </div>
                  <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
                     <p class="text-blk input-title">Email</p>
                     <input type="email" class="input" id="ipmgh-3" name="Email" placeholder="Enter your email..." required>
                  </div>
                  <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
                     <p class="text-blk input-title">Phone Number</p>
                     <input type="number" class="input" id="imgis-3" name="PhoneNumber" placeholder="Enter your phone number..." required>
                  </div>
                  <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
                     <p class="text-blk input-title">Write your message</p>
                     <textarea class="textinput" id="i5vyy-3" name="Message" placeholder="Type your message..." required></textarea>
                  </div>
                  <button type="submit" class="btn-primary">SEND</button>
               </div>
            </div>
         </form>

         <div id="successModal" class="modal">
            <div class="modal-content">
               <span>Your message has been sent successfully!</span>
            </div>
         </div>

         <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
            <div class="map-part">
               <p class="text-blk map-contactus-head">Contact Us</p>
               <p class="text-blk map-contactus-subhead">Excellence in bilingual education.<br>- High School - Bachelor’s Degrees - Master’s Degrees</p>
               <div class="map-box container-block">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.0880028026068!2d-103.4292119887193!3d25.535445377400873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fdbd813dd7e35%3A0x5677464a7616ed0b!2sISAN%20Instituto%20Superior%20de%20Administraci%C3%B3n%20y%20Negocios!5e0!3m2!1sen!2smx!4v1737528365602!5m2!1sen!2smx" width="100%" height="100%" style="border:0; display: block;" allowfullscreen="" loading="lazy"></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="outerdiv">
      <div class="innerdiv">
         <div class="div1 eachdiv">
            <div class="userdetails">
               <div class="imgbox">
                  <img src="https://cdn-icons-png.freepik.com/512/7022/7022927.png" alt="">
               </div>
               <div class="detbox">
                  <p class="name">Maria Gonzalez</p>
                  <p class="designation">Parent</p>
               </div>
            </div>
            <div class="review">
               <h4>My daughter is very happy in her Master’s program</h4>
               <p>“We are very happy with the education my daughter is receiving. The teachers are attentive and dedicated, always supporting the children’s development in fun and educational ways. Without a doubt, an excellent choice for our children.”</p>
            </div>
         </div>
         <div class="div2 eachdiv">
            <div class="userdetails">
               <div class="imgbox">
                  <img src="https://cdn-icons-png.freepik.com/512/7022/7022927.png" alt="">
               </div>
               <div class="detbox">
                  <p class="name">Jose Martinez</p>
                  <p class="designation">Parent</p>
               </div>
            </div>
            <div class="review">
               <h4>A unique learning environment</h4>
               <p>“My son is pursuing a Bachelor’s Degree at ISAN, and we are very satisfied with his progress. The faculty is highly committed.”</p>
            </div>
         </div>
         <div class="div3 eachdiv">
            <div class="userdetails">
               <div class="imgbox">
                  <img src="https://cdn-icons-png.freepik.com/512/7022/7022927.png" alt="">
               </div>
               <div class="detbox">
                  <p class="name dark">Laura Hernandez</p>
                  <p class="designation dark">Parent</p>
               </div>
            </div>
            <div class="review dark">
               <h4>The Bachelor’s programs have been a great experience for my son</h4>
               <p>“Studying his Bachelor’s Degree at ISAN has been a total success for my son. The faculty is highly qualified and always considers the individual needs of each student. My son has improved academically and personally. We are very grateful to the institution!”</p>
            </div>
         </div>
         <div class="div4 eachdiv">
            <div class="userdetails">
               <div class="imgbox">
                  <img src="https://cdn-icons-png.freepik.com/512/7022/7022927.png" alt="">
               </div>
               <div class="detbox">
                  <p class="name dark">Carlos Rivera</p>
                  <p class="designation dark">Parent</p>
               </div>
            </div>
            <div class="review dark">
               <h4>Excellent education and values</h4>
               <p>“My daughter feels very happy at ISAN high school. Not only has she learned a lot, but she’s also gained important values like responsibility.”</p>
            </div>
         </div>
         <div class="div5 eachdiv">
            <div class="userdetails">
               <div class="imgbox">
                  <img src="https://cdn-icons-png.freepik.com/512/7022/7022927.png" alt="">
               </div>
               <div class="detbox">
                  <p class="name">Lucia Perez</p>
                  <p class="designation">Parent</p>
               </div>
            </div>
            <div class="review">
               <h4>An ideal place for holistic growth</h4>
               <p>“We are very happy with the education my son receives at ISAN. The school provides a safe and stimulating environment where children can grow, learn, and have fun. Highly recommended!”</p>
            </div>
         </div>
      </div>
   </div>

   <script>
      document.getElementById('contactForm').onsubmit = function(event) {
         event.preventDefault();

         const formData = new FormData(document.getElementById('contactForm'));

         fetch('../rp/enviar_formulario.php', {
               method: 'POST',
               body: formData
            })
            .then(response => response.text())
            .then(data => {
               if (data.trim() === "success") {
                  document.getElementById('successModal').style.display = 'flex';
                  setTimeout(function() {
                     document.getElementById('successModal').style.display = 'none';
                     document.getElementById('contactForm').reset();
                  }, 3000);
               } else {
                  alert("There was an error sending the message. Please try again.");
               }
            })
            .catch(error => console.error('Error:', error));
      };
      document.getElementById('contactForm').reset();
   </script>

</body>

<?php include_once("../rp_en/footer_en.php") ?>

</html>