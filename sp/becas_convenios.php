<!DOCTYPE html>
<html lang="es_MX">

<link rel="stylesheet" href="../styles_sp/becas_convenios.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<script src="sp.js"></script>
<?php include_once("../rp/head.php") ?>
<?php include_once("../rp/navbar.php") ?>

<body>

    <section class="first_section_niveles_educativos">
        <div class="first_section_niveles_educativos_img" style="background-image: url(../img_sp/becas_convenios/portada.png);"></div>
        <div class="first_section_niveles_educativos_portada">
            <h2 class="first_section_niveles_educativos_title">Becas y convenios</h2>
            <p class="first_section_niveles_educativos_sibtitle">Educación de calidad al alcance de todos</p>
        </div>
    </section>

    <section class="second_section">
        <div class="second_section_div">
            <h2>ISAN tiene convenios con instituciones y empresas de prestigio que ofrecen becas exclusivas y apoyos financieros para nuestros estudiantes.</h2>
        </div>
    </section>


    <section class="third_section">
        <div class="third_section_grid">
            <div class="third_section_grid_info">
                <h3>Estos convenios brindan oportunidades de formación y colaboración de alto nivel, ampliando las opciones de crecimiento profesional.</h3>
                <div class="third_section_grid_table1">
                    <a href="https://www.cam.ac.uk/" target="_blank"><img src="../img_sp/becas_convenios/cambridge.png"></a>
                    <a href="https://www.fundacionglobal.org/" target="_blank"><img src="../img_sp/becas_convenios/global.png"></a>
                    <a href="https://www.esad.pt/pt" target="_blank"><img src="../img_sp/becas_convenios/esad.png"></a>
                </div>
                <div class="third_section_grid_table2">
                    <a href="http://macsanluispotosi.com/" target="_blank"><img src="../img_sp/becas_convenios/mac.png"></a>
                    <a href="https://www.microsoft.com/es-es/education" target="_blank"><img src="../img_sp/becas_convenios/microsoft.webp"></a>
                    <a href="https://edu.google.com/intl/ALL_mx/" target="_blank"><img src="../img_sp/becas_convenios/google.png"></a>
                </div>
                <a id="second_a" href="javascript:void(0)" class="cta">Ver todas las empresas <i class="fa-solid fa-arrow-right"></i></a>
            </div>


            <div class="third_section_grid_img">
                <video controls poster="../img_sp/becas_convenios/second_section.png" class="third_section_grid_himno_video">
                    <source src="../img_sp/modelo_educativo/third_section_video.mp4" type="video/mp4">
                    Tu navegador no soporta la reproducción de video. Por favor, actualiza tu navegador.
                </video>
            </div>
        </div>
    </section>



    <section class="fourth_section">
        <div class="fourth_section_main">
            <h2>Impulsamos el Futuro Educativo de Nuestros Estudiantes a través de una Educación Continua y de Calidad</h2>

            <div class="fourth_section_main_modals">
                <a href="javascript:void(0)" class="fourth_section_main_modals_div" onclick="openModal('modal1')">Otros Convenios</a>
                <a href="javascript:void(0)" class="fourth_section_main_modals_img" onclick="openModal('modal1')"><img src="../img_sp/becas_convenios/triangulo.svg"></a>
                <a href="javascript:void(0)" class="fourth_section_main_modals_div" onclick="openModal('modal2')">Importancia de los Convenios</a>
                <a href="javascript:void(0)" class="fourth_section_main_modals_img" onclick="openModal('modal2')"><img src="../img_sp/becas_convenios/triangulo.svg"></a>
            </div>

            <div class="fourth_section_main_fondo">
                <img src="../img_sp/becas_convenios/Isan.png">
            </div>
        </div>
    </section>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal1')">&times;</span>
            <div class="modal-content_title">
                <h2>Convenios de ISAN</h2>
            </div>
            <div class="modal-content_list">
                <div class="modal-content_list_1">
                    <ul>
                        <li>Consejo de la Judicatura Federal</li>
                        <li>Asociación Nacional de Abogados de Empresa</li>
                        <li>Procuraduría General de la República</li>
                        <li>Barra Mexicana de Abogados</li>
                    </ul>
                </div>
                <div class="modal-content_list_1">
                    <ul>
                        <li>Instituto Mexicano de Contadores Públicos</li>
                        <li>Asociación de Contadores Públicos Certificados</li>
                        <li>Cámara Nacional de Comercio</li>
                        <li>Instituto Nacional de Administración Pública</li>
                    </ul>
                </div>
                <div class="modal-content_list_1">
                    <ul>
                        <li>Cámara Nacional de la Industria de Transformación</li>
                        <li>Asociación de Bancos de México</li>
                        <li>Instituto Nacional de Estadística y Geografía</li>
                        <li>Confederación Patronal de la República Mexicana</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2')">&times;</span>
            <div class="modal-content_title">
                <h2>¿Por qué los Convenios?</h2>
            </div>
            <div class="modal-content_text">
                <p>
                Los convenios académicos y empresariales son esenciales para el desarrollo profesional, ofreciendo beneficios exclusivos y oportunidades de crecimiento. Algunas de sus principales características incluyen:</p>
                <ul class="modal-content_list_1">
                    <li>Acceso a becas y programas especializados para estudiantes destacados.</li>
                    <li>Participación en talleres, certificaciones y actividades prácticas.</li>
                    <li>Vinculación directa con empresas líderes en áreas como Derecho y Contaduría.</li>
                    <li>Fortalecimiento de habilidades alineadas con las demandas del mercado laboral.</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="sixth_secction">
        <div class="sixth_section_gid">
            <div class="sixth_section_grid_video">
                <video controls poster="../img_sp/becas_convenios/sixth_section_video.png" class="third_section_grid_himno_video">
                    <source src="../img_sp/modelo_educativo/third_section_video.mp4" type="video/mp4">
                    Tu navegador no soporta la reproducción de video. Por favor, actualiza tu navegador.
                </video>
            </div>
            <div class="sixth_section_grid_info">
                <h2>En ISAN, ofrecemos oportunidades de apoyo académico y profesional a través de convenios con empresas.</h2>
                <p><span>Gracias a nuestras alianzas, los estudiantes pueden acceder a becas de excelencia y programas de desarrollo profesional con empresas líderes.</p>
                <div class="sixth_section_grid_info_container">
                    <div class="sixth_section_grid_info_container_logo_box">
                        <img src="../img_sp/becas_convenios/sixth_section_empresas_1.svg" alt="Logo 1">
                    </div>
                    <div class="sixth_section_grid_info_container_logo_box">
                        <img src="../img_sp/becas_convenios/sixth_section_empresas_2.svg" alt="Logo 2">
                    </div>
                    <div class="sixth_section_grid_info_container_logo_box">
                        <img src="../img_sp/becas_convenios/sixth_section_empresas_3.svg" alt="Logo 3">
                    </div>
                    <div class="sixth_section_grid_info_container_logo_box">
                        <img src="../img_sp/becas_convenios/sixth_section_empresas_4.svg" alt="Logo 4">
                    </div>
                    <div class="sixth_section_grid_info_container_logo_box">
                        <img src="../img_sp/becas_convenios/sixth_section_empresas_5.svg" alt="Logo 5">
                    </div>
                    <div class="sixth_section_grid_info_container_logo_box">
                        <img src="../img_sp/becas_convenios/sixth_section_empresas_6.svg" alt="Logo 6">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="seventh_section">
        <div class="seventh_section_grid">
            <img class="seventh_section_grid_img" src="../img_sp/becas_convenios/seventh_section.png" alt="Cita">
            <div class="seventh_section_grid_div"></div>
        </div>
        <div class="seventh_section_anuncio">
            <h2>Agenda una cita en alguno de nuestros campus:</h2>
            <ul>
                <li>Conoce las instalaciones del Colegio</li>
                <li>Platica con alguno de nuestros profesores</li>
                <li>Resuelve todas tus dudas y comienza el proceso de admisión al colegio</li>
            </ul>
            <a href="../sp/instalaciones.php"><strong>Visita el Campus <i class="fa-solid fa-arrow-right"></i></strong></a>
        </div>
    </section>





    <section class="eighth_section">
        <div class="eighth_section_grid">
            <div class="eighth_section_grid_div" id="eighth_section_grid_div_id1">
                <h2>Blog ISAN</h2>
                <p>Noticias sobre actividades del colegio, <strong>artículos sobre tendencias educativas y tips</strong> para cada uno de nuestro alumnos.</p>
            </div>

            <div class="eighth_section_grid_div eighth_section_second_div" id="eighth_section_grid_div_id2">
                <div class="eighth_section_second_div_img">
                    <img src="../img_sp/preparatoria_abierta/eighth_section.png">
                </div>
                <div>
                    <h3>Licenciaturas con acceso a grandes oportunidades</h3>
                    <p>Estudia Derecho o Contaduría y accede a grandes oportunidades profesionales gracias a nuestra formación integral...</p>
                </div>
                <div class="eighth_section_second_div_button">
                    <a href="javascript:void(0)"><strong>Leer más <i class="fa-solid fa-arrow-right"></i></strong></a>
                </div>
            </div>

            <div class="eighth_section_grid_div eighth_section_second_div" id="eighth_section_grid_div_id3">
                <div class="eighth_section_second_div_img">
                    <img src="../img_sp/preparatoria_abierta/eighth_section.png">
                </div>
                <div>
                    <h3>Maestrías ISAN</h3>
                    <p>Diseñadas para formar líderes altamente capacitados, siguiendo estándares internacionales de excelencia académica y profesional...</p>
                </div>
                <div class="eighth_section_second_div_button">
                    <a href="javascript:void(0)"><strong>Leer más <i class="fa-solid fa-arrow-right"></i></strong></a>
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
<?php include_once("../rp/footer.php") ?>
</html>