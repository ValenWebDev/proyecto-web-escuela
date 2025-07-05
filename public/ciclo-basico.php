<?php
    $pageTitle = 'Ciclo Básico';
    $pageSlug  = 'page--ciclo-basico';
    include '../includes/header.php';
?>

<main class="historia | u-container"><!-- reutilizamos la misma grid -->

    <!-- ===== Título principal ===== -->
    <section class="historia__intro">
        <h1 class="historia__title especialidad__title">CICLO BÁSICO</h1>
    </section>

    <!-- ===== Fundamentación ===== -->
    <section class="historia__intro">
        <h2 class="historia__subtitle especialidad__subtitle">Fundamentación</h2>

<?php
$parrafos = [
    'A partir del ciclo lectivo 2009, la Educación Secundaria Técnica es una de las alternativas de la Modalidad Educación Técnico Profesional, en el marco de la Educación Secundaria obligatoria.',
    'Esta formación técnica es una unidad pedagógica organizada en una formación común y una formación orientada, que responderá a las áreas del conocimiento, del mundo social y del trabajo, como lo expresa la Resolución Nº 5040/08.',
    'La Educación Secundaria Técnica se organizará en dos ciclos: el ciclo básico técnico de tres años de duración, común a todas las instituciones de educación secundaria técnica, y el ciclo superior técnico de cuatro años de duración.',
    'Al finalizar el 7° (séptimo) año, los egresados obtendrán el título de Técnico con la especificación de la orientación que corresponda, de nivel secundario.',
    'Los propósitos del Nivel Secundario direccionan los saberes para la Formación Técnica Específica del ciclo básico. En relación con la vinculación de los saberes del mundo del trabajo, se propone para los tres primeros años el conocimiento del sistema socio-productivo local …',
    'Esto implica incluir al trabajo como objeto de conocimiento para permitir a los alumnos reconocer, problematizar y cuestionar el mundo socio-productivo en el cual están inmersos y al cual se incorporarán.',
    'En relación con la formación ciudadana, se pretende promover …',
    'En relación con la adquisición de saberes para continuar sus estudios, es necesario que los alumnos comprendan la producción de conocimientos científicos y tecnológicos …',
    'Es por ello que, desde la Formación Técnica Específica, en el ciclo básico se plantea …',
    'En este sentido, una de las características principales de la Formación Específica en el ciclo Básico es favorecer el desarrollo de capacidades …'
];

foreach ($parrafos as $p) {
    echo "<p class=\"historia__paragraph\">$p</p>";
    }
    ?>
    </section>

    <!-- ===== Capacidades ===== -->
    <section class="historia__intro">
        <h2 class="historia__subtitle">
        Al finalizar el taller del ciclo básico técnico, los alumnos deberán haber desarrollado capacidades para:
        </h2>

        <ul class="historia__paragraph">
        <li>Organizar, gestionar y desempeñarse dentro de un equipo de trabajo.</li>
        <li>Diseñar y construir objetos, servicios y/o mecanismos planificando los procesos y tomando decisiones en función de la predicción de los resultados.</li>
        <li>Seleccionar y utilizar correctamente las herramientas, máquinas, materiales e instrumentos, en relación con la problemática a resolver.</li>
        <li>Prever los riesgos personales y ambientales, poniendo en práctica las normas de seguridad e higiene.</li>
        <li>Gestionar su propio aprendizaje de forma organizada y metódica, respetando las características propias para el abordaje de cada área del conocimiento.</li>
        </ul>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
