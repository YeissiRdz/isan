<!DOCTYPE html>
<html lang="es-MX">
<link rel="stylesheet" href="../styles_sp/contaduria.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<script src="sp.js"></script>
<?php include_once("../rp/head.php") ?>
<?php include_once("../rp/navbar.php") ?>
<body>

    <section class="first_section_niveles_educativos">
                <div class="first_section_niveles_educativos_img" style="background-image: url(../img_sp/contaduria/portada.png);"></div>
                <div class="first_section_niveles_educativos_portada">
                    <h2 class="first_section_niveles_educativos_title">Licenciatura en Contaduría Pública ISAN</h2>
                    <p class="first_section_niveles_educativos_sibtitle">Formamos profesionales listos para administrar y gestionar instituciones de prestigio.</p>
                </div>
    </section>

    <section class="second_section">
        <div class="second_section_grid">
            <div class="second_section_grid_info">
                <h2>Nuestros egresados han destacado al ser reconocidos por su <strong>excelencia académica y profesional en instituciones de prestigio a nivel mundial.</strong></h2>
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
                <h2>En ISAN, los estudiantes en Contaduría tienen la oportunidad de participar en actividades complementarias a su formación integral, como:</h2>
                <div class="third_section_info_grid">
                    <div class="third_section_info_grid_actividades_1">
                        <ul>
                            <li>Talleres de liderazgo</li>
                            <li>Habilidades de negociación</li>
                            <li>Resolución de conflictos</li>
                            <li>Oratoria y debate</li>
                            <li>Cursos de planeación financiera</li>
                        </ul>
                    </div>
                    <div class="third_section_info_grid_actividades_1">
                        <ul>
                            <li>Simulaciones empresariales</li>
                            <li>Análisis de casos contables reales</li>
                            <li>Proyectos de responsabilidad social</li>
                            <li>Talleres de ética profesional</li>
                            <li>Conferencias con expertos del sector</li>
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
                <h2>Descarga nuestro folleto informativo donde conocerás sobre:</h2>
                <div class="fourth_section_grid_info_grid">
                    <div class="fourth_section_grid_info_grid_ul">
                        <ul>
                            <li><i class="fa-solid fa-circle"></i> Modelo Educativo</li>
                            <li><i class="fa-solid fa-circle"></i> Licenciaturas</li>
                        </ul>
                    </div>
                    <div class="fourth_section_grid_info_grid_ul second_ul">
                        <ul>
                            <li><i class="fa-solid fa-circle"></i> Maestrías</li>
                            <li><i class="fa-solid fa-circle"></i> Y más...</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fourth_section_grid_forms">
                <p>Compártenos tu correo y recibe el folleto</p>
                <form action="#" method="POST" class="email_form">
                    <input type="email" name="email" placeholder="correo@ejemplo.com.mx*" required>
                    <button type="submit">Enviar</button>
                </form>
                <a href="javascript:void(0)" class="privacy_notice">Aviso de privacidad</a>
            </div>
        </div>
    </section>



    <section class="fifth_section">
        <div class="fifth_section_grid">
            <div class="fifth_section_grid_img">
                <img src="../img_sp/preparatoria_abierta/sixth_section.png">
            </div>
            <div class="fifth_section_grid_info">
                <p><strong>Horario ISAN:</strong> 7:30 am a 3:00 pm</p>
                <p><strong>Horario extendido:</strong> 3:00 pm a 4:30 pm</p>
            </div>
            <div class="fifth_section_grid_button">
                <a href="javascript:void(0)">Agenda una Cita</a>
            </div>
        </div>
    </section>


    <section class="sixth_section">
        <div class="sixth_section_grid">
            <div class="sixth_section_grid_img">
                <img src="../img_sp/derecho/sixth_section.png" alt="Imagen">
            </div>
            <div class="sixth_section_grid_info">
                <h2>En la Licenciatura en Contaduría ISAN, ofrecemos una formación integral en un entorno dinámico y profesional:</h2>
                <div class="sixth_section_grid_info_wrap">
                    <div class="sixth_section_grid_info_box" onclick="openModal(null,'sixth_section_modal1')">
                        <img src="../img_sp/derecho/sixth_section_1.png" alt="Icono Enseñanza Especializada">
                        <p>Enseñanza especializada</p>
                    </div>
                    <div class="sixth_section_grid_info_box" onclick="openModal(null,'sixth_section_modal2')">
                        <img src="../img_sp/derecho/sixth_section_2.png" alt="Icono Aprendizaje Activo">
                        <p>Aprendizaje práctico</p>
                    </div>
                    <div class="sixth_section_grid_info_box" onclick="openModal( null, 'sixth_section_modal3')">
                        <img src="../img_sp/derecho/sixth_section_3.png" alt="Icono Aprendizaje Crítico">
                        <p>Desarrollo de pensamiento crítico</p>
                    </div>
                    <div class="sixth_section_grid_info_box" onclick="openModal(null, 'sixth_section_modal4')">
                        <img src="../img_sp/derecho/sixth_section_4.png" alt="Icono Preparación global">
                        <p>Preparación global</p>
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
            <h2>Enseñanza especializada</h2>
            <p>ISAN proporciona una formación sólida en áreas clave de la contaduría, como contabilidad financiera, auditoría, fiscalidad y gestión de costos.</p>
            <ul>
                <li>Contabilidad financiera y fiscal.</li>
                <li>Auditoría y control interno.</li>
                <li>Gestión de costos y presupuestos.</li>
                <li>Normas de información financiera (NIF).</li>
            </ul>
        </div>
    </div>

    <div id="sixth_section_modal2" class="sixth_section_modal">
        <div class="sixth_section_modal-content">
            <span class="sixth_section_close" onclick="closeModal('sixth_section_modal2')">&times;</span>
            <img src="../img_sp/derecho/sixth_section_modal_2.png">
            <h2>Aprendizaje Práctico</h2>
            <p>El programa incluye actividades que preparan a los estudiantes para enfrentar retos financieros reales mediante herramientas y metodologías contables.</p>
            <ul>
                <li>Simulaciones contables.</li>
                <li>Elaboración de estados financieros.</li>
                <li>Análisis de casos empresariales.</li>
                <li>Uso de software contable avanzado.</li>
            </ul>
        </div>
    </div>

    <div id="sixth_section_modal3" class="sixth_section_modal">
        <div class="sixth_section_modal-content">
            <span class="sixth_section_close" onclick="closeModal('sixth_section_modal3')">&times;</span>
            <img src="../img_sp/derecho/sixth_section_modal_3.png">
            <h2>Desarrollo de Pensamiento Crítico</h2>
            <p>ISAN fomenta el análisis financiero profundo y el diseño de estrategias económicas basadas en datos.</p>
            <ul>
                <li>Evaluación de riesgos financieros.</li>
                <li>Resolución de problemas contables.</li>
                <li>Optimización de recursos económicos.</li>
                <li>Análisis estratégico de datos.</li>
            </ul>
        </div>
    </div>

    <div id="sixth_section_modal4" class="sixth_section_modal">
        <div class="sixth_section_modal-content">
            <span class="sixth_section_close" onclick="closeModal('sixth_section_modal4')">&times;</span>
            <img src="../img_sp/derecho/sixth_section_modal_3.png">
            <h2>Perspectiva Global</h2>
            <p>El programa integra una visión internacional de la contaduría, abordando normativas y estándares globales como las IFRS.</p>
            <ul>
                <li>Contabilidad internacional.</li>
                <li>Normas IFRS y su aplicación.</li>
                <li>Impacto de mercados globales en finanzas.</li>
                <li>Estrategias financieras multiculturales.</li>
            </ul>
        </div>
    </div>




    <section class="seventh_section">
        <h2><strong>¡LA EDUCACIÓN TE ABRE PUERTAS!</strong> Como en el caso de Daniela</h2>
        <div class="seventh_section_grid">
            <div class="seventh_section_grid_info">
                <p>Queremos que nuestros alumnos sean líderes en su entorno, por lo que fomentamos valores y competencias clave mediante actividades como:</p>
                <ul>
                    <li>Trabajo colaborativo en proyectos interdisciplinarios</li>
                    <li>Desarrollo de habilidades de comunicación efectiva</li>
                    <li>Fomento del pensamiento crítico y la toma de decisiones</li>
                    <li>Participación en actividades culturales y sociales</li>
                </ul>
            </div>
            <div class="seventh_section_grid_video">
                <video controls poster="../img_sp/contaduria/seventh_section.png" class="third_section_grid_himno_video">
                    <source src="../img_sp/modelo_educativo/third_section_video.mp4" type="video/mp4">
                    Tu navegador no soporta la reproducción de video. Por favor, actualiza tu navegador.
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
                        <h2>Admisiones</h2>
                        <p>Comienza el proceso de admisión a ISAN y conoce:</p>
                        <ul>
                            <li>Proceso de admisión</li>
                            <li>Requisitos de ingreso</li>
                            <li>Becas</li>
                        </ul>
                    </div>
                    <div class="ninth_section_content_2">
                        <button>Solicitar cita</button>
                    </div>
                </div>
            </div>
            <div class="ninth_section_info">
                <h2><strong>Becas y</strong>
                <br>Convenios</h2>
                <p>Descuento a colaboradores de empresas y estudiantes provenientes de colegios con convenio.</p>
                <a href="javascriot:void(0)"><strong>Más Información <i class="fa-solid fa-chevron-right"></i></strong></a>
            </div>
        </div>
    </section>

    <section class="tenth_section">
        <h2>¡Bienvenido a construir una etapa diferente
        en uno de los mejores institutos en México!</h2>
        <div class="tenth_section_grid">
            <div class="tenth_section_grid_item" style="background-image: url(../img_sp/contaduria/tenth_section_1.png);">
                <div class="tenth_section_grid_item_info">
                    <p>Instalaciones Educativas<br><span>ISAN</span></p>
                    <div class="tenth_section_grid_item_meta">
                        <a href="#" onclick="openModal(event, 'modal4', 'video4')"><i class="fa-solid fa-circle-play"></i></a>
                        <span>Video de 1 min.</span>
                    </div>
                </div>
            </div>
            <div class="tenth_section_grid_item" style="background-image: url(../img_sp/contaduria/tenth_section_2.png);">
                <div class="tenth_section_grid_item_info">
                    <p>Orientación Vocacional <br><span>ISAN</span></p>
                    <div class="tenth_section_grid_item_meta">
                        <a href="#" onclick="openModal(event, 'modal4', 'video4')"><i class="fa-solid fa-circle-play"></i></a>
                        <span>Video de 1 min.</span>
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
                        <span>Video de 1 min.</span>
                    </div>
                </div>
            </div>
            <div class="tenth_section_grid_item" style="background-image: url(../img_sp/contaduria/tenth_section_4.png);">
                <div class="tenth_section_grid_item_info">
                    <p>Contabilidad Financiera <br><span>ISAN</span></p>
                    <div class="tenth_section_grid_item_meta">
                        <a href="#" onclick="openModal(event, 'modal4', 'video4')"><i class="fa-solid fa-circle-play"></i></a>
                        <span>Video de 1 min.</span>
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
                Tu navegador no soporta la reproducción de videos.
            </video>
        </div>
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal2', 'video2')">&times;</span>
            <video id="video2" width="640" height="360" controls>
                <source src="../img_sp/derecho/tenth_section_2.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de videos.
            </video>
        </div>
    </div>

    <div id="modal3" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal3', 'video3')">&times;</span>
            <video id="video3" width="640" height="360" controls>
                <source src="../img_sp/derecho/tenth_section.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de videos.
            </video>
        </div>
    </div>

    <div id="modal4" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal4', 'video4')">&times;</span>
            <video id="video4" width="640" height="360" controls>
                <source src="../img_sp/derecho/tenth_section_2.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de videos.
            </video>
        </div>
    </div>


    <section class="eleventh_section">
        <div class="eleventh_section_title">
            <h2>En ISAN, ofrecemos espacios seguros que potencian el desarrollo académico y personal.</h2>
        </div>
        <div class="eleventh_section_info">
            <h2>ISAN</h2>
            <p>Realiza un recorrido virtual por nuestras instalaciones</p>
            <a href="../sp/instalaciones.php"><strong>Realizar recorrido <i class="fa-solid fa-chevron-right"></i></strong></a>
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