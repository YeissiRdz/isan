<!DOCTYPE html>
<html lang="es-MX">
<link rel="stylesheet" href="../styles_sp/maestria_contaduria.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<script src="sp.js"></script>
<?php include_once("../rp_en/head_en.php") ?>
<?php include_once("../rp_en/navbar_en.php") ?>
<body>

    <section class="first_section_niveles_educativos">
                <div class="first_section_niveles_educativos_img" style="background-image: url(../img_sp/maestria_contaduria/portada.png);"></div>
                <div class="first_section_niveles_educativos_portada">
                    <h2 class="first_section_niveles_educativos_title">Master's Degree in Accounting ISAN</h2>
                    <p class="first_section_niveles_educativos_sibtitle">We train legal experts with strategic skills to lead in complex and global legal environments.</p>
                </div>
    </section>

    <section class="second_special_section">
        <div class="second_special_section_grid">
            <div class="second_special_section_grid_info">
                <h2>Study Methodology</h2>
                <p>Our Master's in Accounting combines academic excellence and practical application, preparing professionals to tackle financial challenges with strategic and innovative approaches.</p>
                <ul>
                    <li><i class="fa-solid fa-square-check"></i> Case studies to analyze and solve real-world accounting and financial problems.</li>
                    <li><i class="fa-solid fa-square-check"></i> Small groups that ensure personalized attention and collaborative learning.</li>
                </ul>
                <h3>The maximum capacity per classroom is 20 students</h3>
            </div>

            <div class="second_special_section_grid_img">
                <img src="../img_sp/maestria_contaduria/second_special_section.png">
            </div>
        </div>
    </section>


    <section class="second_section">
        <div class="second_section_grid">
            <div class="second_section_grid_info">
                <h2>Our Master's in Accounting offers a global perspective on the regulations and trends that are transforming the financial and accounting field.</strong></h2>
            </div>
            <div class="second_section_grid_img">
                <img src="../img_sp/maestria_derecho/second_section.png">
            </div>
        </div>
    </section>

    <section class="third_special_section">
        <h2>General Overview</h2>
        <div class="third_special_section_grid">
            <div class="third_special_section_grid_divs" onclick="openModal('modal1')">
                <div class="third_special_section_grid_divs_img">
                    <img src="../img_sp/maestria_contaduria/third_special_section_1.png" alt="Imagen 1">
                </div>
                <div class="third_special_section_grid_divs_info">
                    <h3>Financial Accounting</h3>.
                    <p>Proficiency in international accounting standards (IFRS), financial statement analysis and business decision making</p> <p>.
                </div>
            </div>

            <div class="third_special_section_grid_divs" onclick="openModal('modal2')">
                <div class="third_special_section_grid_divs_img">
                    <img src="../img_sp/maestria_contaduria/third_special_section_2.png" alt="Imagen 2">
                </div>
                <div class="third_special_section_grid_divs_info">
                    <h3>Audit and Control</h3>.
                    <p>Deepening in internal and external audits, risk assessment and design of efficient financial controls.
                </div>
            </div>

            <div class="third_special_section_grid_divs" onclick="openModal('modal3')">
                <div class="third_special_section_grid_divs_img">
                    <img src="../img_sp/maestria_contaduria/third_special_section_3.png" alt="Imagen 3">
                </div>
                <div class="third_special_section_grid_divs_info">
                    <h3>Taxation and Strategy</h3>.
                    <p>Specialization in national and international tax regulations, tax planning and optimization of business resources.
                </div>
            </div>
        </div>
    </section>

<!-- Modals -->
<div id="modal1" class="third_special_section_modal">
    <div class="third_special_section_modal-content">
        <span class="third_special_section_close" onclick="closeModal('modal1')">&times;</span>
        <div class="third_special_section_modal-content_grid">
            <div class="third_special_section_modal-content_grid_image">
                <img src="../img_sp/maestria_contaduria/third_special_section_modal_1.png">
            </div>
            <div class="third_special_section_modal-content_grid_info">
                <h2>¡Financial Accounting!</h2>
                <p>Build a strong foundation in global accounting!</p>
                <p>Study international standards (IFRS), perform advanced financial statement analysis, and make strategic decisions based on accurate financial data.</p>
                <ul>
                    <li><i class="fa-regular fa-calendar-days"></i> Module start date: March 12, 2025.</li>
                    <li><i class="fa-solid fa-clock"></i> Duration: 5 months</li>
                    <li><i class="fa-solid fa-location-dot"></i> Modality: In-person and online</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="modal2" class="third_special_section_modal">
    <div class="third_special_section_modal-content">
        <span class="third_special_section_close" onclick="closeModal('modal2')">&times;</span>
        <div class="third_special_section_modal-content_grid">
            <div class="third_special_section_modal-content_grid_image">
                <img src="../img_sp/maestria_contaduria/third_special_section_modal_1.png">
            </div>
            <div class="third_special_section_modal-content_grid_info">
                <h2>¡Audit and Control!</h2>
                <p>Ensure transparency and compliance!</p>
                <p>Learn to perform internal and external audits, design financial control systems, and assess risks to ensure operational efficiency.</p>
                <ul>
                    <li><i class="fa-regular fa-calendar-days"></i> Module start date: July 20, 2025</li>
                    <li><i class="fa-solid fa-clock"></i> Duration: 6 months</li>
                    <li><i class="fa-solid fa-location-dot"></i> Modality: In-person with supervised practice</li>
                </ul>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="modal3" class="third_special_section_modal">
    <div class="third_special_section_modal-content">
        <span class="third_special_section_close" onclick="closeModal('modal3')">&times;</span>
        <div class="third_special_section_modal-content_grid">
            <div class="third_special_section_modal-content_grid_image">
                <img src="../img_sp/maestria_contaduria/third_special_section_modal_3.png">
            </div>
            <div class="third_special_section_modal-content_grid_info">
                <h2>¡Taxation and Strategy!</h2>
                <p>Optimize resources and comply with regulations!</p>
                <p>Specialize in national and international tax legislation, develop effective tax strategies, and maximize business resource efficiency.</p>
                <ul>
                    <li><i class="fa-regular fa-calendar-days"></i> Module start date: November 8, 2025</li>
                    <li><i class="fa-solid fa-clock"></i> Duration: 4 months</li>
                    <li><i class="fa-solid fa-location-dot"></i> Modality: Online with interactive workshops</li>
                </ul>
                </ul>
            </div>
        </div>
    </div>
</div>




    <section class="third_section">
        <div class="third_section_grid">
            <div class="third_section_info">
                <h2>In our Master's Degree in Accounting, students develop their skills and knowledge through activities such as:</h2>
                <div class="third_section_info_grid">
                    <div class="third_section_info_grid_actividades_1">
                        <ul>
                            <li>Seminars on international standards (IFRS and NIF).</li>
                            <li>Simulations of audits and analysis of financial cases.</li>
                            <li>Workshops on financial statement interpretation and tax planning.</li>
                        </ul>
                    </div>
                    <div class="third_section_info_grid_actividades_1">
                        <ul>
                            <li>Seminars on international standards (IFRS and NIF).</li>
                            <li>Simulations of audits and analysis of financial cases.</li>
                            <li>Workshops on financial statement interpretation and tax planning.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="third_section_img">
                <img src="../img_sp/maestria_contaduria/third_section.png">
            </div>
        </div>
    </section>


    <section class="fourth_section">
        <div class="fourth_section_grid">
            <div class="fourth_section_grid_img">
                <img src="../img_sp/preparatoria_abierta/logo_isan.png">
            </div>
            <div class="fourth_section_grid_info">
                <h2>Download our informative brochure where you will learn about:</h2>
                <div class="fourth_section_grid_info_grid">
                    <div class="fourth_section_grid_info_grid_ul">
                        <ul>
                            <li><i class="fa-solid fa-circle"></i> Educational Model</li>
                            <li><i class="fa-solid fa-circle"></i> Bachelor's Degrees</li>
                        </ul>
                    </div>
                    <div class="fourth_section_grid_info_grid_ul second_ul">
                        <ul>
                            <li><i class="fa-solid fa-circle"></i> Masters</li>
                            <li><i class="fa-solid fa-circle"></i> And more...</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fourth_section_grid_forms">
                <p>Share your email address and receive the brochure</p>
                <form action="#" method="POST" class="email_form">
                    <input type="email" name="email" placeholder="correo@ejemplo.com.mx*" required>
                    <button type="submit">Enviar</button>
                </form>
                <a href="javascript:void(0)" class="privacy_notice">Privacy Notice</a>
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
                <p><strong>Extended hours:</strong> 3:00 pm to 4:30 pm</p>
            </div>
            <div class="fifth_section_grid_button">
                <a href="javascript:void(0)">Schedule an Appointment</a>
            </div>
        </div>
    </section>


    <section class="sixth_section">
        <h2>Give your career the opportunity to transform with an unforgettable academic and professional experience.</h2>
    </section>


    <section class="seventh_section">
        <div class="seventh_card large" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_1.png');">
            <div class="seventh_content">
                <h3>Specialized Accounting Library</h3>
                <p>Access to advanced tools and updated financial databases.</p>
            </div>
        </div>
        <div class="seventh_card large" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_2.png');">
            <div class="seventh_content">
                <h3>Academic Exchanges</h3>
                <p>Participate in international programs with leading institutions in accounting and finance.</p>
            </div>
        </div>
        <div class="seventh_card tall" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_3.png');">
            <div class="seventh_content">
                <h3>Seminars and Conferences</h3>
                <p>Attend events with recognized experts in the legal field.</p>
            </div>
        </div>
        <div class="seventh_card wide" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_4.png');">
            <div class="seventh_content">
                <h3>Seminars and Conferences</h3>
                <p>Attend events with experts in accounting standards and tax strategies.</p>
            </div>
        </div>
        <div class="seventh_card tall" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_5.png');">
            <div class="seventh_content">
                <h3>Visits to Financial Firms and Organizations</h3>
                <p>Explore the operations of prestigious auditing firms and financial organizations.</p>
            </div>
        </div>
        <div class="seventh_card wide" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_6.png');">
            <div class="seventh_content">
                <h3>Personalized Counseling</h3>
                <p>Receive academic guidance to boost your professional development.</p>
            </div>
        </div>
    </section>




    <section class="ninth_section">
        <h2>Leading change, driving financial excellence!</h2>
        <div class="ninth_section_grid">
            <div class="ninth_section_grid_info">
                <p>At ISAN, our Master's Degree in Accounting trains high-level professionals to face the accounting and financial challenges of the 21st century, promoting advanced values and competencies through:</p>
                <ul>
                    <li>Specialization in tax planning and audits.</li>
                    <li>Advanced skills in financial analysis.</li>
                    <li>Participation in international forums and workshops.</li>
                    <li>Study of global accounting standards.</li>
                </ul>
            </div>
            <div class="ninth_section_grid_video">
                <video controls poster="../img_sp/maestria_derecho/ninth_section.png" class="ninth_section_grid_himno_video">
                    <source src="../img_sp/maestria_derecho/ninth_section.mp4" type="video/mp4">
                    Your browser does not support video playback. Please upgrade your browser.
                </video>
            </div>
        </div>
    </section>



    <section class="tenth_section">
        <div class="tenth_section_grid">
            <div class="tenth_section_grid_info">
                <p>Invest in your professional development with our Master of Laws program.</p>
                <h2>Request personalized information</h2>
                <p id="second_p">Leave us your email and you will receive details about:</p>
                <div class="tenth_section_grid_info_grid">
                    <div class="tenth_section_grid_info_grid_img"><img src="../img_sp/maestria_derecho/tenth_section_1.png"></div>
                    <div class="tenth_section_grid_info_grid_info">
                        <ul>
                            <li>Admission process and requirements for the master's program.</li>
                            <li>Curriculum designed for leaders in the legal field.</li>
                            <li>Available financing options and scholarships.</li>
                            <li>Academic calendar and flexible schedules.</li>
                            <li>Payment modalities tailored to your needs.</li>
                        </ul>
                    </div>
                </div>
                
                <div class="tenth_section_grid_info_form">
                    <div class="tenth_section_grid_info_form_elements">
                        <input type="email" id="email" name="email" placeholder="correo@ejemplo.com" required>
                    </div>
                    <div class="tenth_section_grid_info_form_elements">
                        <input type="tel" id="telefono" name="telefono" placeholder="Número de teléfono" required>
                    </div>
                    <div class="tenth_section_grid_info_form_elements">
                        <a href="javascript:void(0)" class="download_button"><strong>Download <i class="fa-solid fa-chevron-right"></i></strong></a>
                    </div>
                </div>
            </div>

            <div class="tenth_section_grid_img">
                <img src="../img_sp/maestria_derecho/tenth_section.png">
            </div>
        </div>
    </section>





    <section class="eleventh_section">
        <div class="eleventh_section_title">
            <h2>At ISAN, we offer safe spaces that enhance academic and personal development.</h2>
        </div>
        <div class="eleventh_section_info">
            <h2>ISAN</h2>
            <p>Take a virtual tour of our facilities</p>
            <a href="../sp/instalaciones.php"><strong>Perform tour <i class="fa-solid fa-chevron-right"></i></strong></a>
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
                    <h3>Bachelor's Degrees with Access to Great Opportunities</h3>
                    <p>Study Law or Accounting and gain access to great professional opportunities thanks to our comprehensive education...</p>
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
                    <p>Designed to develop highly skilled leaders, following international standards of academic and professional excellence...</p>
                </div>
                <div class="eighth_section_second_div_button">
                    <a href="javascript:void(0)"><strong>Read more <i class="fa-solid fa-arrow-right"></i></strong></a>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'block';

    modal.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal(modalId);
        }
    });
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = 'none';
}

</script>
<?php include_once("../rp_en/footer_en.php") ?>
</html>