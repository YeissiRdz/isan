<!DOCTYPE html>
<html lang="en">

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

   <?php include_once("../rp_en/head_en.php") ?>
   <?php include_once("../rp_en/navbar_en.php") ?>
</head>

<body>
   <div class="sitemap-wrapper">
      <div class="sitemap-container">
         <h1 class="sitemap-title">Site Map</h1>

         <div class="sitemap-content">
            <div class="sitemap-section">
               <h2 class="section-title">Academic Navigation</h2>
               <div class="sitemap-links">
                  <a href="../en/educational_model.php" class="sitemap-link">Educational Model</a>
                  <a href="../en/open_high_school.php" class="sitemap-link">Open High School</a>
                  <a href="../en/" class="sitemap-link">Bachelor's Degree in Law</a>
                  <a href="../en/primary.php" class="sitemap-link">Bachelor's Degree in Public Accounting</a>
                  <a href="../en/master_law.php" class="sitemap-link">Master's Degree in Law</a>
                  <a href="../en/master_accounting.php" class="sitemap-link">Master's Degree in Public Accounting</a>
               </div>
            </div>

            <div class="sitemap-section">
               <h2 class="section-title">Internal Navigation</h2>
               <div class="sitemap-links">
                  <a href="../en/facilities.php" class="sitemap-link">Facilities</a>
                  <a href="../en/faculty.php" class="sitemap-link">Faculty</a>
                  <a href="../en/scholarships_agreements.php" class="sitemap-link">Scholarships and Agreements</a>
               </div>
            </div>

            <div class="sitemap-section">
               <h2 class="section-title">Resources</h2>
               <div class="sitemap-links">
                  <a href="../en/calendar.php" class="sitemap-link">Calendar</a>
                  <a href="../en/schedule_appointment.php" class="sitemap-link">Schedule Appointment</a>
                  <a href="../en/privacy_policies.php" class="sitemap-link">Privacy Policies</a>
                  <a href="../en/sitemap.php" class="sitemap-link">Site Map</a>
                  <a href="../en/noalbullying.php" class="sitemap-link">#NoToBullying</a>
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

<?php include_once("../rp_en/footer_en.php"); ?>

</html>