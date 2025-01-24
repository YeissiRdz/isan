<!DOCTYPE html>
<html lang="es-MX">
<link rel="stylesheet" href="../styles_sp/maestria_contaduria.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<script src="sp.js"></script>
<?php include_once("../rp/head.php") ?>
<?php include_once("../rp/navbar.php") ?>
<body>

    <section class="first_section_niveles_educativos">
                <div class="first_section_niveles_educativos_img" style="background-image: url(../img_sp/maestria_contaduria/portada.png);"></div>
                <div class="first_section_niveles_educativos_portada">
                    <h2 class="first_section_niveles_educativos_title">Mestria en Contaduría ISAN</h2>
                    <p class="first_section_niveles_educativos_sibtitle">Formamos expertos en derecho con habilidades estratégicas para liderar en entornos jurídicos complejos y globales.</p>
                </div>
    </section>

    <section class="second_special_section">
        <div class="second_special_section_grid">
            <div class="second_special_section_grid_info">
                <h2>Metodología de Estudio</h2>
                <p>Nuestra Maestría en Contaduría combina excelencia académica y aplicación práctica, formando profesionales capaces de resolver los retos financieros con enfoques estratégicos e innovadores.</p>
                <ul>
                    <li><i class="fa-solid fa-square-check"></i> Estudio de casos prácticos para analizar y resolver problemas contables y financieros reales.</li>
                    <li><i class="fa-solid fa-square-check"></i> Grupos reducidos que garantizan atención personalizada y un aprendizaje colaborativo.</li>
                </ul>
                <h3>El cupo máximo por salón es de 20 alumnos</h3>
            </div>

            <div class="second_special_section_grid_img">
                <img src="../img_sp/maestria_contaduria/second_special_section.png">
            </div>
        </div>
    </section>


    <section class="second_section">
        <div class="second_section_grid">
            <div class="second_section_grid_info">
                <h2>Nuestra Maestría en Contaduría ofrece una perspectiva global sobre las <strong>normativas y tendencias que están transformando el ámbito financiero y contable.</strong></h2>
            </div>
            <div class="second_section_grid_img">
                <img src="../img_sp/maestria_derecho/second_section.png">
            </div>
        </div>
    </section>

    <section class="third_special_section">
        <h2>Panorama General</h2>
        <div class="third_special_section_grid">
            <div class="third_special_section_grid_divs" onclick="openModal('modal1')">
                <div class="third_special_section_grid_divs_img">
                    <img src="../img_sp/maestria_contaduria/third_special_section_1.png" alt="Imagen 1">
                </div>
                <div class="third_special_section_grid_divs_info">
                    <h3>Contabilidad Financiera</h3>
                    <p>Dominio de normativas contables internacionales (IFRS), análisis de estados financieros y toma de decisiones empresariales.</p>
                </div>
            </div>

            <div class="third_special_section_grid_divs" onclick="openModal('modal2')">
                <div class="third_special_section_grid_divs_img">
                    <img src="../img_sp/maestria_contaduria/third_special_section_2.png" alt="Imagen 2">
                </div>
                <div class="third_special_section_grid_divs_info">
                    <h3>Auditoría y Control</h3>
                    <p>Profundización en auditorías internas y externas, evaluación de riesgos y diseño de controles financieros eficientes.</p>
                </div>
            </div>

            <div class="third_special_section_grid_divs" onclick="openModal('modal3')">
                <div class="third_special_section_grid_divs_img">
                    <img src="../img_sp/maestria_contaduria/third_special_section_3.png" alt="Imagen 3">
                </div>
                <div class="third_special_section_grid_divs_info">
                    <h3>Fiscalidad y Estrategia</h3>
                    <p>Especialización en normativas fiscales nacionales e internacionales, planeación tributaria y optimización de recursos empresariales.</p>
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
                <h2>¡Contabilidad Financiera!</h2>
                <p>¡Establece una base sólida en contabilidad global!</p>
                <p>Estudia normativas internacionales (IFRS), realiza análisis avanzados de estados financieros y toma decisiones estratégicas basadas en datos financieros precisos.</p>
                <ul>
                    <li><i class="fa-regular fa-calendar-days"></i> Inicio del módulo: 12 de marzo, 2025.</li>
                    <li><i class="fa-solid fa-clock"></i> Duración: 5 meses</li>
                    <li><i class="fa-solid fa-location-dot"></i> Modalidad: Presencial y en línea</li>
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
                <h2>¡Auditoría y Control!</h2>
                <p>¡Asegura la transparencia y el cumplimiento!</p>
                <p>Aprende a realizar auditorías internas y externas, diseña sistemas de control financiero y evalúa riesgos para garantizar la eficiencia operativa.</p>
                <ul>
                    <li><i class="fa-regular fa-calendar-days"></i> Inicio del módulo: 20 de julio, 2025</li>
                    <li><i class="fa-solid fa-clock"></i> Duración: 6 meses</li>
                    <li><i class="fa-solid fa-location-dot"></i> Modalidad: Presencial con prácticas supervisadas</li>
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
                <h2>¡Fiscalidad y Estrategia!</h2>
                <p>¡Optimiza los recursos y cumple con las normativas!</p>
                <p>Especialízate en legislación fiscal nacional e internacional, desarrolla estrategias tributarias efectivas y maximiza la eficiencia de los recursos empresariales.</p>
                <ul>
                    <li><i class="fa-regular fa-calendar-days"></i> Inicio del módulo: 8 de noviembre, 2025</li>
                    <li><i class="fa-solid fa-clock"></i> Duración: 4 meses</li>
                    <li><i class="fa-solid fa-location-dot"></i> Modalidad: En línea con talleres interactivos</li>
                </ul>
            </div>
        </div>
    </div>
</div>




    <section class="third_section">
        <div class="third_section_grid">
            <div class="third_section_info">
                <h2>En nuestra Maestría en Contaduría, los estudiantes desarrollan sus habilidades y conocimientos a través de actividades como:</h2>
                <div class="third_section_info_grid">
                    <div class="third_section_info_grid_actividades_1">
                        <ul>
                            <li>Seminarios en normativas internacionales (IFRS y NIF).
                            </li>
                            <li>Simulaciones de auditorías y análisis de casos financieros.</li>
                            <li>Talleres de interpretación de estados financieros y planeación fiscal.</li>
                        </ul>
                    </div>
                    <div class="third_section_info_grid_actividades_1">
                        <ul>
                            <li>Capacitación en herramientas tecnológicas avanzadas para la gestión contable.</li>
                            <li>Conferencias con expertos en finanzas, auditoría y fiscalidad.</li>
                            <li>Visitas a instituciones financieras y organismos fiscales.</li>
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
        <h2>Brinda a tu carrera la oportunidad de transformarse con una experiencia académica y profesional inolvidable.</h2>
    </section>


    <section class="seventh_section">
        <div class="seventh_card large" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_1.png');">
            <div class="seventh_content">
                <h3>Biblioteca Contable Especializada</h3>
                <p>Acceso a herramientas avanzadas y bases de datos financieras actualizadas.</p>
            </div>
        </div>
        <div class="seventh_card large" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_2.png');">
            <div class="seventh_content">
                <h3>Intercambios Académicos</h3>
                <p>Participa en programas internacionales con instituciones líderes en contaduría y finanzas.</p>
            </div>
        </div>
        <div class="seventh_card tall" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_3.png');">
            <div class="seventh_content">
                <h3>Seminarios y Conferencias</h3>
                <p>Asiste a eventos con expertos reconocidos en el ámbito jurídico.</p>
            </div>
        </div>
        <div class="seventh_card wide" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_4.png');">
            <div class="seventh_content">
                <h3>Seminarios y Conferencias</h3>
                <p>Asiste a eventos con expertos en normativas contables y estrategias fiscales.</p>
            </div>
        </div>
        <div class="seventh_card tall" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_5.png');">
            <div class="seventh_content">
                <h3>Visitas a Firmas y Organismos Financieros</h3>
                <p>Explora el funcionamiento de empresas auditoras y organismos financieros de prestigio.</p>
            </div>
        </div>
        <div class="seventh_card wide" style="background-image: url('../img_sp/maestria_contaduria/seventh_section_6.png');">
            <div class="seventh_content">
                <h3>Asesoría Personalizada</h3>
                <p>Recibe orientación académica para impulsar tu desarrollo profesional.</p>
            </div>
        </div>
    </section> 



    <section class="ninth_section">
        <h2>¡Liderando el cambio, impulsando la excelencia financiera!</h2>
        <div class="ninth_section_grid">
            <div class="ninth_section_grid_info">
                <p>En ISAN, nuestra Maestría en Contaduría forma profesionales de alto nivel para enfrentar los desafíos contables y financieros del siglo XXI, promoviendo valores y competencias avanzadas a través de:</p>
                <ul>
                    <li>Especialización en planeación fiscal y auditorías.</li>
                    <li>Habilidades avanzadas en análisis financiero.</li>
                    <li>Participación en foros y talleres internacionales.</li>
                    <li>Estudio de normativas contables globales.</li>
                </ul>
            </div>
            <div class="ninth_section_grid_video">
                <video controls poster="../img_sp/maestria_derecho/ninth_section.png" class="ninth_section_grid_himno_video">
                    <source src="../img_sp/maestria_derecho/ninth_section.mp4" type="video/mp4">
                    Tu navegador no soporta la reproducción de video. Por favor, actualiza tu navegador.
                </video>
            </div>
        </div>
    </section>



    <section class="tenth_section">
        <div class="tenth_section_grid">
            <div class="tenth_section_grid_info">
                <p>Invierte en tu desarrollo profesional con nuestra Maestría en Derecho</p>
                <h2>Solicita información personalizada</h2>
                <p id="second_p">Déjanos tu correo y recibirás detalles sobre:</p>
                <div class="tenth_section_grid_info_grid">
                    <div class="tenth_section_grid_info_grid_img"><img src="../img_sp/maestria_derecho/tenth_section_1.png"></div>
                    <div class="tenth_section_grid_info_grid_info">
                        <ul>
                            <li>Proceso de admisión y requisitos para la maestría.</li>
                            <li>Plan de estudios diseñado para líderes del ámbito jurídico.</li>
                            <li>Opciones de financiamiento y becas disponibles.</li>
                            <li>Calendario académico y horarios flexibles.</li>
                            <li>Modalidades de pago adaptadas a tus necesidades.</li>
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
                        <a href="javascript:void(0)" class="download_button"><strong>Descargar <i class="fa-solid fa-chevron-right"></i></strong></a>
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