<!DOCTYPE html>
<html lang="es_mx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Políticas de Privacidad</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles_sp/no_al_bullying.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>

<body>
    <section class="first_section_politicas">
        <div class="first_section_politicas_grid">
            <div class="first_section_politicas_grid_text">
                <p>ISAN</p>
                <h2>#NoalBullying</h2>
            </div>
            <div class="first_section_politicas_grid_img">
                <img src="../img_sp/politicas_de_privacidad/portada.png">
            </div>
        </div>
    </section>

    <ol class="container-nb" style="--length: 5" role="list">
        <li class="list-li" style="--i: 1">
            <h3 class="list-h">Conciencia e Identificación</h3>
            <p>Recopila información detallada sobre los incidentes de bullying, incluyendo fechas, lugares y personas involucradas. Reporta el comportamiento a las autoridades correspondientes, como administradores escolares o equipos de recursos humanos.</p>
            <p class="list-p"><strong>El primer paso para combatir el bullying es reconocer sus señales, ya sea físico, verbal o ciberbullying. Esto incluye identificar agresiones como golpes, insultos, burlas o mensajes ofensivos en línea. Es clave observar cambios en las víctimas, como aislamiento, tristeza o heridas visibles. Fomentar una comunicación abierta es esencial para que las víctimas puedan compartir sus experiencias sin temor. Crear espacios de confianza y enseñar a detectar estas señales ayuda a prevenir que las situaciones empeoren. Además, educar sobre los efectos del bullying promueve empatía, respeto e inclusión en la comunidad.</strong></p>
        </li>
        <li class="list-li" style="--i: 2">
            <h3 class="list-h">Recolección de Información y Reporte</h3>
            <p>Obtener el consentimiento explícito de los padres o tutores antes de recolectar, almacenar o compartir datos personales de los estudiantes.</p>
            <p class="list-p"><strong>Lleva un registro detallado de los incidentes de bullying para abordar la situación con evidencia clara. Esto incluye anotar fechas, lugares y nombres de las personas involucradas, tanto víctimas como testigos. Documentar los detalles ayuda a comprender el alcance del problema y brinda un respaldo sólido al momento de tomar acción. Es fundamental reportar este comportamiento a las autoridades correspondientes, como administradores escolares, equipos de recursos humanos o cualquier instancia responsable. Una intervención oportuna basada en información precisa permite implementar medidas efectivas para proteger a las víctimas y prevenir futuros casos de acoso.</strong></p>
        </li>
        <li class="list-li" style="--i: 3">
            <h3 class="list-h">Apoyo e Intervención</h3>
            <p>Brinda apoyo emocional a la víctima e involucra a consejeros o profesionales capacitados para ayudar en su recuperación. Aborda el comportamiento del agresor de manera constructiva para evitar que se repita.</p>
            <p class="list-p"><strong>Ofrece apoyo emocional inmediato a la víctima, asegurándote de que se sienta escuchada y comprendida. Involucra a consejeros, psicólogos o profesionales capacitados para proporcionar ayuda en su proceso de recuperación y fortalecer su bienestar emocional. Es igualmente importante abordar el comportamiento del agresor de manera constructiva, buscando entender las causas detrás de sus acciones. Trabajar con el agresor a través de orientación o programas de reeducación ayuda a prevenir que este tipo de conductas se repita, fomentando un entorno de respeto y convivencia.</strong></p>
        </li>
        <li class="list-li" style="--i: 4">
            <h3 class="list-h">Educación y Prevención</h3>
            <p>Implementa programas contra el bullying, talleres y campañas para educar sobre la importancia del respeto, la empatía y la diversidad.</p>
            <p class="list-p"><strong>Establece programas específicos contra el bullying que promuevan una cultura de respeto y convivencia. Organiza talleres interactivos y campañas educativas que destaquen la importancia de valores como la empatía, la tolerancia y la aceptación de la diversidad. Estas iniciativas deben estar dirigidas tanto a estudiantes como a docentes y familias, fomentando un enfoque comunitario para prevenir el acoso. Al sensibilizar a todos los involucrados, se crea un entorno más inclusivo y seguro para todos.</strong></p>
        </li>
        <li class="list-li" style="--i: 5">
            <h3 class="list-h">Monitoreo y Seguimiento</h3>
            <p>Realiza verificaciones regulares con todas las partes involucradas para garantizar que el bullying haya cesado y que tanto la víctima como el agresor estén recibiendo el apoyo adecuado.</p>
            <p class="list-p"><strong>Lleva a cabo verificaciones periódicas con todas las partes involucradas para asegurarte de que el bullying haya cesado por completo. Esto incluye reuniones de seguimiento con la víctima para evaluar su bienestar emocional y su integración en el entorno, así como con el agresor para supervisar su progreso y cumplimiento de las medidas correctivas. El monitoreo continuo garantiza que ambas partes reciban el apoyo necesario, ya sea emocional, educativo o conductual, promoviendo un entorno seguro y respetuoso a largo plazo.</strong></p>
        </li>
    </ol>

    <script src="../scripts/politicas_de_privacidad.js"></script>
</body>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const items = document.querySelectorAll(".list-li");

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = `slideIn 0.6s ease-out forwards ${entry.target.style.getPropertyValue("--i") * 0.2}s`;
                    observer.unobserve(entry.target);
                }
            });
        });

        items.forEach((item) => observer.observe(item));

        items.forEach((item) => {
            const header = item.querySelector(".list-h");

            header.addEventListener("mouseover", () => {
                header.style.color = "hsl(219, 61%, 55%)"; 
            });

            header.addEventListener("mouseout", () => {
                header.style.color = "rgb(70, 70, 70)"; 
            });


            item.addEventListener("click", () => {
                const content = item.querySelector(".list-p");
                content.style.display = content.style.display === "none" ? "block" : "none";
            });
        });
    });
</script>

</html>