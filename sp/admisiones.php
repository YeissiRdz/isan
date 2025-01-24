<!DOCTYPE html>
<html lang="es_mx">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles_sp/admisiones.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<?php include_once("../rp/head.php") ?>
<?php include_once("../rp/navbar.php") ?>


<body>
   <div class="page">
      <!-- tabs -->
      <div class="pcss3t pcss3t-effect-scale pcss3t-theme-1">
         <input type="radio" name="pcss3t" checked id="tab1" class="tab-content-first">
         <label for="tab1"><i class="fa-solid fa-dice-one"></i>Preparatoria</label>

         <input type="radio" name="pcss3t" id="tab2" class="tab-content-2">
         <label for="tab2"><i class="fa-solid fa-dice-two"></i>Licenciaturas</label>

         <input type="radio" name="pcss3t" id="tab3" class="tab-content-3">
         <label for="tab3"><i class="fa-solid fa-dice-three"></i>Maestrías</label>

         <ul>
            <li class="tab-content tab-content-first typography">
               <h2 class="h2">Proceso de Admisión para Preparatoria</h2>
               <p class="p-a">El proceso de admisión para preparatoria está diseñado para evaluar el desempeño académico previo, así como las habilidades personales del aspirante. Nuestro objetivo es asegurar una integración adecuada a un entorno educativo exigente.</p>
               <h2 class="h2">Requisitos de Admisión</h2>
               <p class="p-a">Para iniciar el proceso, el estudiante debe presentar:</p>
               <ul>
                  <li>Historial académico de secundaria</li>
                  <li>Acta de nacimiento</li>
                  <li>Comprobante de domicilio</li>
                  <li>Examen de conocimientos generales</li>
               </ul>
               <h2 class="h2">Evaluación Académica</h2>
               <p class="p-a">El estudiante deberá presentar una evaluación diagnóstica que incluye matemáticas, comprensión lectora e inglés. Esta prueba nos permite determinar el nivel de preparación y necesidades educativas.</p>
               <p class="p-a">Una vez completada la evaluación, el comité de admisiones revisará los resultados y programará una entrevista personal con el estudiante y sus padres.</p>
               <h2 class="h2">Entrevista Personal</h2>
               <p class="p-a">Durante la entrevista se abordan temas como intereses personales, planes a futuro y compromiso con el aprendizaje.</p>
               <p class="text-right"><em>Más detalles sobre el proceso de admisión en <a href="../sp/preparatoria.php" target="_blank">Preparatoria</a>.</em></p>
            </li>

            <li class="tab-content tab-content-2 typography">
               <h2 class="h2">Proceso de Admisión para Licenciaturas</h2>
               <p class="p-a">El proceso de admisión a licenciaturas busca seleccionar estudiantes con un perfil académico sólido y vocación hacia la carrera elegida. La admisión se realiza mediante un proceso estructurado en varias etapas.</p>
               <h2 class="h2">Etapas del Proceso</h2>
               <p class="p-a">El proceso consta de las siguientes etapas:</p>
               <ol>
                  <li>Registro en línea y entrega de documentación</li>
                  <li>Examen de admisión</li>
                  <li>Entrevista con el comité académico</li>
                  <li>Curso de inducción</li>
               </ol>
               <h2 class="h2">Requisitos</h2>
               <p class="p-a">Para postularse, el aspirante debe presentar:</p>
               <ul>
                  <li>Certificado de bachillerato</li>
                  <li>CURP</li>
                  <li>Carta de motivos</li>
                  <li>Comprobante de pago de inscripción</li>
               </ul>
               <h2 class="h2">Examen de Admisión</h2>
               <p class="p-a">El examen de admisión evalúa habilidades matemáticas, comprensión lectora, redacción y razonamiento lógico. Es fundamental obtener un puntaje mínimo para ser considerado en la siguiente etapa.</p>
               <p class="text-right"><em>Más detalles sobre el proceso de admisión en <a href="../sp/derecho.php" target="_blank">Licenciatura en derecho</a>.</em></p>
               <p class="text-right"><em>Más detalles sobre el proceso de admisión en <a href="../sp/contaduria.php" target="_blank">Licenciatura en contaduría</a>.</em></p>
            </li>

            <li class="tab-content tab-content-3 typography">
               <h2 class="h2">Proceso de Admisión para Maestrías</h2>
               <p class="p-a">Las maestrías están dirigidas a profesionales que buscan fortalecer sus conocimientos y competencias en áreas específicas de su campo de estudio. El proceso de admisión evalúa la experiencia profesional y los objetivos académicos del aspirante.</p>
               <h2 class="h2">Requisitos de Admisión</h2>
               <p class="p-a">Para ingresar a nuestros programas de maestría, el aspirante debe cumplir con los siguientes requisitos:</p>
               <ul>
                  <li>Título de licenciatura</li>
                  <li>Cédula profesional</li>
                  <li>Currículum actualizado</li>
                  <li>Carta de recomendación</li>
                  <li>Ensayo de intenciones</li>
               </ul>
               <h2 class="h2">Entrevista con el Comité Académico</h2>
               <p class="p-a">El proceso incluye una entrevista en la que se analiza la trayectoria profesional, las aspiraciones académicas y la compatibilidad con el programa seleccionado.</p>
               <h2 class="h2">Evaluación de Competencias</h2>
               <p class="p-a">Se aplicará una prueba de conocimientos generales y específicos relacionados con el área de estudio. Esta evaluación asegura que el estudiante cuenta con la base necesaria para cursar la maestría.</p>
               <p class="text-right"><em>Más detalles sobre el proceso de admisión en <a href="../sp/maestria_derecho.php" target="_blank">Maestría en derecho</a>.</em></p>
               <p class="text-right"><em>Más detalles sobre el proceso de admisión en <a href="../sp/maestria_contaduria.php" target="_blank">Maestría en contaduría</a>.</em></p>
            </li>
         </ul>

      </div>
      <!--/ tabs -->
   </div>

</body>

<?php include_once("../rp/footer.php") ?>

</html>