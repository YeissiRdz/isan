<!DOCTYPE html>
<html lang="en-us">
<link rel="stylesheet" href="../styles_sp/contaduria.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<script src="sp.js"></script>

<body>

    <section class="first_section_niveles_educativos">
                <div class="first_section_niveles_educativos_img" style="background-image: url(../img_sp/contaduria/portada.png);"></div>
                <div class="first_section_niveles_educativos_portada">
                    <h2 class="first_section_niveles_educativos_title">Bachelor's Degree in Public Accounting ISAN</h2>
                    <p class="first_section_niveles_educativos_sibtitle">We train professionals ready to administer and manage prestigious institutions.</p>
                </div>
    </section>

    <section class="second_section">
        <div class="second_section_grid">
            <div class="second_section_grid_info">
                <h2>Our graduates have excelled by being recognized for their <strong>academic and professional excellence in prestigious institutions worldwide.</strong></h2>
            </div>
            <div class="second_section_grid_img">
                <img src="../img_sp/contaduria/seventh_section_licenciatura.png">
            </div>
        </div>
    </section>


    <section class="third_section">
        <div class="third_section_grid">
            <div class="third_section_img">
                <img src="../img_sp/contaduria/third_section.jpg">
            </div>
            <div class="third_section_info">
                <h2>At ISAN, students in Accounting have the opportunity to participate in complementary activities to their integral formation, such as:</h2>
                <div class="third_section_info_grid">
                    <div class="third_section_info_grid_actividades_1">
                        <ul>
                            <li>Leadership workshops</li>
                            <li>Negotiation skills</li>
                            <li>Conflict resolution</li>
                            <li>Public speaking and debate</li>
                            <li>Financial planning courses</li>
                        </ul>
                    </div>
                    <div class="third_section_info_grid_actividades_1">
                        <ul>
                            <li>Business simulations</li>
                            <li>Analysis of real accounting cases</li>
                            <li>Social responsibility projects</li>
                            <li>Professional ethics workshops</li>
                            <li>Conferences with industry experts</li>
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
                    <button type="submit">Send</button>
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
        <div class="sixth_section_grid">
            <div class="sixth_section_grid_img">
                <img src="../img_sp/derecho/sixth_section.png" alt="Imagen">
            </div>
            <div class="sixth_section_grid_info">
                <h2>In the ISAN Accounting Degree, we offer comprehensive training in a dynamic and professional environment:</h2>
                <div class="sixth_section_grid_info_wrap">
                    <div class="sixth_section_grid_info_box" onclick="openModal(null,'sixth_section_modal1')">
                        <img src="../img_sp/derecho/sixth_section_1.png" alt="Icono Enseñanza Especializada">
                        <p>Specialized teaching</p>
                    </div>
                    <div class="sixth_section_grid_info_box" onclick="openModal(null,'sixth_section_modal2')">
                        <img src="../img_sp/derecho/sixth_section_2.png" alt="Icono Aprendizaje Activo">
                        <p>Practical learning</p>
                    </div>
                    <div class="sixth_section_grid_info_box" onclick="openModal( null, 'sixth_section_modal3')">
                        <img src="../img_sp/derecho/sixth_section_3.png" alt="Icono Aprendizaje Crítico">
                        <p>Development of critical thinking</p>
                    </div>
                    <div class="sixth_section_grid_info_box" onclick="openModal(null, 'sixth_section_modal4')">
                        <img src="../img_sp/derecho/sixth_section_4.png" alt="Icono Preparación global">
                        <p>Global preparation</p>
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
            <h2>Specialized Teaching</h2>
            <p>ISAN provides solid training in key accounting areas such as financial accounting, auditing, taxation, and cost management.</p>
            <ul>
                <li>Financial and tax accounting.</li>
                <li>Auditing and internal control.</li>
                <li>Cost and budget management.</li>
                <li>Financial Reporting Standards (NIF).</li>
            </ul>
        </div>
    </div>

    <div id="sixth_section_modal2" class="sixth_section_modal">
        <div class="sixth_section_modal-content">
            <span class="sixth_section_close" onclick="closeModal('sixth_section_modal2')">&times;</span>
            <img src="../img_sp/derecho/sixth_section_modal_2.png">
            <h2>Practical Learning</h2>
            <p>The program includes activities that prepare students to face real financial challenges through accounting tools and methodologies.</p>
            <ul>
                <li>Accounting simulations.</li>
                <li>Preparation of financial statements.</li>
                <li>Business case analysis.</li>
                <li>Use of advanced accounting software.</li>
            </ul>
        </div>
    </div>

    <div id="sixth_section_modal3" class="sixth_section_modal">
        <div class="sixth_section_modal-content">
            <span class="sixth_section_close" onclick="closeModal('sixth_section_modal3')">&times;</span>
            <img src="../img_sp/derecho/sixth_section_modal_3.png">
            <h2>Development of Critical Thinking</h2>
            <p>ISAN promotes in-depth financial analysis and the design of economic strategies based on data.</p>
            <ul>
                <li>Assessment of financial risks.</li>
                <li>Resolution of accounting issues.</li>
                <li>Optimization of economic resources.</li>
                <li>Strategic data analysis.</li>
            </ul>
        </div>
    </div>

    <div id="sixth_section_modal4" class="sixth_section_modal">
        <div class="sixth_section_modal-content">
            <span class="sixth_section_close" onclick="closeModal('sixth_section_modal4')">&times;</span>
            <img src="../img_sp/derecho/sixth_section_modal_3.png">
            <h2>Global Perspective</h2>
            <p>The program integrates an international perspective on accounting, addressing global standards and regulations such as IFRS.</p>
            <ul>
                <li>International accounting.</li>
                <li>IFRS standards and their application.</li>
                <li>Impact of global markets on finance.</li>
                <li>Multicultural financial strategies.</li>
            </ul>
        </div>
    </div>




    <section class="seventh_section">
        <h2><strong>EDUCATION OPENS DOORS!</strong> As in the case of Daniela</h2>
        <div class="seventh_section_grid">
            <div class="seventh_section_grid_info">
                <p>We want our students to be leaders in their environment, so we promote values and key competencies through activities such as:</p>
                <ul>
                    <li>Collaborative work in interdisciplinary projects</li>
                    <li>Development of effective communication skills</li>
                    <li>Promotion of critical thinking and decision making.</li>
                    <li>Participation in cultural and social activities</li>
                </ul>
            </div>
            <div class="seventh_section_grid_video">
                <video controls poster="../img_sp/contaduria/seventh_section.png" class="third_section_grid_himno_video">
                    <source src="../img_sp/modelo_educativo/third_section_video.mp4" type="video/mp4">
                    Your browser does not support video playback. Please upgrade your browser.
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
                        <p>Start the admission process to ISAN and get to know:</p>
                        <ul>
                            <li>Admission process</li>
                            <li>Entry requirements</li>
                            <li>Scholarships</li>
                        </ul>
                    </div>
                    <div class="ninth_section_content_2">
                        <button>Request an appointment</button>
                    </div>
                </div>
            </div>
            <div class="ninth_section_info">
                <h2><strong>Scholarships and</strong>
                <br>Agreements</h2>
                <p>Discount for company collaborators and students from schools with an agreement.</p>
                <a href="javascriot:void(0)"><strong>More Information <i class="fa-solid fa-chevron-right"></i></strong></a>
            </div>
        </div>
    </section>

    <section class="tenth_section">
        <h2>Welcome to build a different stage
        in one of the best institutes in Mexico!</h2>
        <div class="tenth_section_grid">
            <div class="tenth_section_grid_item" style="background-image: url(../img_sp/contaduria/tenth_section_1.png);">
                <div class="tenth_section_grid_item_info">
                    <p>Educational Facilities<br><span>ISAN</span></p>
                    <div class="tenth_section_grid_item_meta">
                        <a href="#" onclick="openModal(event, 'modal4', 'video4')"><i class="fa-solid fa-circle-play"></i></a>
                        <span>1 min video.</span>
                    </div>
                </div>
            </div>
            <div class="tenth_section_grid_item" style="background-image: url(../img_sp/contaduria/tenth_section_2.png);">
                <div class="tenth_section_grid_item_info">
                    <p>Vocational Guidance <br><span>ISAN</span></p>
                    <div class="tenth_section_grid_item_meta">
                        <a href="#" onclick="openModal(event, 'modal4', 'video4')"><i class="fa-solid fa-circle-play"></i></a>
                        <span>1 min video.</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="tenth_section_grid">
            <div class="tenth_section_grid_item" style="background-image: url(../img_sp/contaduria/tenth_section_3.png);">
                <div class="tenth_section_grid_item_info">
                    <p>Formación Económica <br><span>ISAN</span></p>
                    <div class="tenth_section_grid_item_meta">
                        <a href="#" onclick="openModal(event, 'modal4', 'video4')"><i class="fa-solid fa-circle-play"></i></a>
                        <span>1 min video.</span>
                    </div>
                </div>
            </div>
            <div class="tenth_section_grid_item" style="background-image: url(../img_sp/contaduria/tenth_section_4.png);">
                <div class="tenth_section_grid_item_info">
                    <p>Financial Accounting <br><span>ISAN</span></p>
                    <div class="tenth_section_grid_item_meta">
                        <a href="#" onclick="openModal(event, 'modal4', 'video4')"><i class="fa-solid fa-circle-play"></i></a>
                        <span>1 min video.</span>
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
            <p>Take a virtual tour of our facilities</p>
            <a href="../sp/instalaciones.php"><strong>Perform tour <i class="fa-solid fa-chevron-right"></i></strong></a>
        </div>
    </section>


    <section class="eighth_section">
        <div class="eighth_section_grid">
            <div class="eighth_section_grid_div" id="eighth_section_grid_div_id1">
                <h2>ISAN Blog</h2>
                <p>News about school activities, <strong>articles about educational trends and tips</strong> for each of our students.</p>
            </div>

            <div class="eighth_section_grid_div eighth_section_second_div" id="eighth_section_grid_div_id2">
                <div class="eighth_section_second_div_img">
                    <img src="../img_sp/preparatoria_abierta/eighth_section.png">
                </div>
                <div>
                    <h3>Bachelor's degrees with access to great opportunities</h3>
                    <p>Study Law or Accounting and gain access to great professional opportunities thanks to our comprehensive training...</p>
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
                    <h3>ISAN Masters</h3>
                    <p>Designed to develop highly qualified leaders, following international standards of academic and professional excellence...</p>
                </div>
                <div class="eighth_section_second_div_button">
                    <a href="javascript:void(0)"><strong>Read more <i class="fa-solid fa-arrow-right"></i></strong></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>