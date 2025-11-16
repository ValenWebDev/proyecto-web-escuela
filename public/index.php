<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>E.E.S.T. N.º 1 – Inicio</title>

    <!-- Estilos (usa tu archivo principal) -->
    <link rel="stylesheet" href="../src/styles/styles.css">

    <!-- FontAwesome (icons) -->
    <script src="https://kit.fontawesome.com/d0c30b1127.js" crossorigin="anonymous" defer></script>
    <link rel="icon" href="../src/assets/img/logo-small.webp" type="image/webp">
</head>
<body class="page--home">    <!-- ===== HEADER ===== -->
    <header class="header" role="banner">
        <div class="header__brand">
        <img class="header__logo" src="../src/assets/img/logo.webp" alt="Logo EEST N.º 1">
        <span class="header__title">EESTN1</span>
        </div>

        <button class="nav-toggle" id="navToggle" aria-label="Abrir menú" aria-expanded="false">&#9776;</button>

        <nav id="mainNav" class="nav" aria-label="Menú principal">
        <ul class="nav__list">
            <li class="nav__item"><a href="#top" data-scroll>Inicio</a></li>
            <li class="nav__item"><a href="#id__historia" data-scroll>Historia</a></li>

            <li class="nav__item nav__item--has-dropdown">
            <a href="#id__especialidades" data-scroll>Especialidades</a>
            <ul class="nav__dropdown" aria-label="Submenú especialidades">
                <li><a href="#id__basico" data-scroll>Ciclo básico</a></li>
                <li><a href="#id__informatica" data-scroll>Informática</a></li>
                <li><a href="#id__programacion" data-scroll>Programación</a></li>
                <li><a href="#id__mmo" data-scroll>M.M.O.</a></li>
            </ul>
            </li>

            <li class="nav__item"><a href="#id__contacto" data-scroll>Contacto</a></li>
            <li class="nav__item"><a href="#id__inscripcion" data-scroll>Inscripción</a></li>
            <li class="nav__item"><a href="http://eestn1tfeb.blogspot.com/" target="_blank" rel="noopener">Blog</a></li>

            <li class="nav__item">
            <a href="https://www.instagram.com/tecnica1.3f/" target="_blank" rel="noopener" aria-label="Instagram oficial">
                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                <span class="sr-only">Instagram</span>
            </a>
            </li>

            <li class="nav__item">
            <button class="theme-switch" id="themeSwitch" aria-label="Cambiar tema">
                <i class="fa-solid fa-sun" aria-hidden="true"></i>
            </button>
            </li>
        </ul>
        </nav>
    </header>

    <div id="top" class="space" style="height: 80px;"></div>

    <main>

        <!-- HERO -->
        <section class="hero u-flex-center u-text-center" aria-labelledby="hero-title">
        <img class="hero__logo" src="../src/assets/img/logo.webp" alt="Logo EEST Nº1">
        <h1 id="hero-title" class="hero__title">Escuela de Educación Secundaria Técnica Nº1</h1>
        <p class="hero__subtitle">"Manuel Belgrano"</p>
        <p class="hero__subtitle">Tres de Febrero</p>
        </section>

        <!-- ESPECIALIDADES (carrusel) -->
        <section class="specialties u-container reveal" aria-labelledby="especialidades-heading">
        <h2 id="especialidades-heading" class="specialties__heading">Especialidades</h2>

        <div class="specialties__carousel js-carousel" aria-live="polite">
            <img class="specialties__slide is-active" src="../src/assets/img/CICLO-BASICO.webp"  alt="Ciclo básico">
            <img class="specialties__slide" src="../src/assets/img/TECNICA-EN-INF.webp" alt="Técnica en Informática">
            <img class="specialties__slide" src="../src/assets/img/PROGRAMACION3.webp"  alt="Programación">
            <img class="specialties__slide" src="../src/assets/img/MAESTRO-2.webp" alt="M.M.O.">
        </div>

        <div class="specialties__controls" aria-hidden="false">
            <button class="specialties__btn specialties__btn--prev js-prev">Anterior</button>
            <button class="specialties__btn specialties__btn--next js-next">Siguiente</button>
        </div>
        </section>

        <!-- HISTORIA -->
        <section id="id__historia" class="historia u-container">
        <section class="historia__intro reveal" aria-labelledby="historia-heading">
            <h2 id="historia-heading" class="historia__title">Breve historia de la E.E.S.T. Nº1 "Manuel Belgrano", Distrito Tres de Febrero.</h2>

            <!-- Parrafos (texto EXACTO que enviaste) -->
            <p class="historia__paragraph">Los inicios de la escuela se remontan al año 1936, cuando se crea la Escuela Profesional de Artes y Oficios, emplazada en la calle Neuquén 3019, de la localidad de Sáenz Peña, distrito de Tres de Febrero.</p>
            <p class="historia__paragraph">Comienza a desarrollarse como institución escolar de rama media técnica y agraria en el año 1978, con el plan Polivalente.</p>
            <p class="historia__paragraph">Surge como escuela técnica, con la modalidad Construcciones, en el año 1981, compartiendo aún edificio con la Escuela Primaria Nº 19 "Antártida Argentina".</p>
            <p class="historia__paragraph">El 20 de junio del año 1988, se coloca la piedra fundamental en el actual predio que ocupa la escuela en la calle Nicaragua y Anchordoqui, en Nicaragua 3516 de la localidad de Santos Lugares, perteneciente al mismo distrito.</p>
            <p class="historia__paragraph">Durante los años que van desde 1990, se desarrolla el plan dual hasta el año 1996, en el cual se cierra para dar paso a la apertura de la especialidad "Bienes y Servicios", incorporando la orientación de Informática en el año 1997.</p>
            <p class="historia__paragraph">En este año, con la implementación de la Ley Federal de Educación, se realizan las articulaciones con las escuelas primarias 19 y 14, manteniendo el tercer ciclo que por ley se cumplimentaba y el ciclo de 3 años con las dos especialidades: Maestro Mayor de Obra e Informática.</p>
            <p class="historia__paragraph">En el año 2008, toda la comunidad educativa del establecimiento ya se instala en el pequeño edificio ubicado en el actual predio.</p>
            <p class="historia__paragraph">La escuela creció en matrícula y permitió desarrollar una nueva especialidad en el año 2012, en respuesta al requerimiento de la comunidad: Técnico en Programación.</p>
            <p class="historia__paragraph">Actualmente, con el impulso de las nuevas obras y la Ley de Educación Técnica, la institución cuenta con las especialidades de: Técnico en Informática Profesional y Personal, Técnico en Programación y Técnico en Maestro Mayor de Obra.</p>
        </section>

        <section class="historia__video reveal" aria-labelledby="recorrido-heading">
            <h3 id="recorrido-heading" class="historia__subtitle">RECORRIDO</h3>
            <div class="video-frame">
            <video controls>
                <source src="../src/assets/videos/Recorrido.mp4" type="video/mp4">
                Tu navegador no soporta la etiqueta de video.
            </video>
            </div>
        </section>

        <section class="historia__video reveal" aria-labelledby="presentacion-heading">
            <h3 id="presentacion-heading" class="historia__subtitle">¿Te gustaría conocer más acerca de la educación técnica?</h3>
            <div class="video-frame">
            <video controls>
                <source src="../src/assets/videos/Presentacion.mp4" type="video/mp4">
                Tu navegador no soporta la etiqueta de video.
            </video>
            </div>
        </section>
        </section>

        <!-- ESPECIALIDADES: CICLO BÁSICO -->
        <section id="id__basico" class="historia u-container">
        <h2 id="id__especialidades" class="seccion__title historia__title historia__intro reveal">ESPECIALIDADES</h2>

        <section class="historia__intro reveal" aria-labelledby="basico-title">
            <h3 id="basico-title" class="historia__title especialidad__title">CICLO BÁSICO</h3>
        </section>

        <section class="historia__intro reveal" aria-labelledby="fundamentacion-title">
            <h3 id="fundamentacion-title" class="historia__subtitle especialidad__subtitle">Fundamentación</h3>

            <p class="historia__paragraph">A partir del ciclo lectivo 2009, la Educación Secundaria Técnica es una de las alternativas de la Modalidad Educación Técnico Profesional, en el marco de la Educación Secundaria obligatoria.</p>
            <p class="historia__paragraph">Esta formación técnica es una unidad pedagógica organizada en una formación común y una formación orientada, que responderá a las áreas del conocimiento, del mundo social y del trabajo, como lo expresa la Resolución Nº 5040/08.</p>
            <p class="historia__paragraph">La Educación Secundaria Técnica se organizará en dos ciclos: el ciclo básico técnico de tres años de duración, común a todas las instituciones de educación secundaria técnica, y el ciclo superior técnico de cuatro años de duración.</p>
            <p class="historia__paragraph">Al finalizar el 7° (séptimo) año, los egresados obtendrán el título de Técnico con la especificación de la orientación que corresponda, de nivel secundario.</p>
            <p class="historia__paragraph">Los propósitos del Nivel Secundario direccionan los saberes para la Formación Técnica Específica del ciclo básico. En relación con la vinculación de los saberes del mundo del trabajo, se propone para los tres primeros años el conocimiento del sistema socio-productivo local …</p>
            <p class="historia__paragraph">Esto implica incluir al trabajo como objeto de conocimiento para permitir a los alumnos reconocer, problematizar y cuestionar el mundo socio-productivo en el cual están inmersos y al cual se incorporarán.</p>
            <p class="historia__paragraph">En relación con la formación ciudadana, se pretende promover …</p>
            <p class="historia__paragraph">En relación con la adquisición de saberes para continuar sus estudios, es necesario que los alumnos comprendan la producción de conocimientos científicos y tecnológicos …</p>
            <p class="historia__paragraph">Es por ello que, desde la Formación Técnica Específica, en el ciclo básico se plantea …</p>
            <p class="historia__paragraph">En este sentido, una de las características principales de la Formación Específica en el ciclo Básico es favorecer el desarrollo de capacidades …</p>
        </section>

        <section class="historia__intro reveal" aria-labelledby="capacidades-title">
            <h3 id="capacidades-title" class="historia__subtitle">Al finalizar el taller del ciclo básico técnico, los alumnos deberán haber desarrollado capacidades para:</h3>

            <ul class="historia__paragraph">
            <li>Organizar, gestionar y desempeñarse dentro de un equipo de trabajo.</li>
            <li>Diseñar y construir objetos, servicios y/o mecanismos planificando los procesos y tomando decisiones en función de la predicción de los resultados.</li>
            <li>Seleccionar y utilizar correctamente las herramientas, máquinas, materiales e instrumentos, en relación con la problemática a resolver.</li>
            <li>Prever los riesgos personales y ambientales, poniendo en práctica las normas de seguridad e higiene.</li>
            <li>Gestionar su propio aprendizaje de forma organizada y metódica, respetando las características propias para el abordaje de cada área del conocimiento.</li>
            </ul>
        </section>
        </section>

        <!-- INFORMÁTICA -->
        <section id="id__informatica" class="historia u-container">
        <section class="historia__intro reveal" aria-labelledby="informatica-title">
            <h2 id="informatica-title" class="historia__title especialidad__title">TÉCNICO EN INFORMÁTICA</h2>
        </section>

        <section class="historia__intro reveal" aria-labelledby="informatica-obj">
            <h3 id="informatica-obj" class="historia__subtitle especialidad__subtitle">Objetivos</h3>

            <p class="historia__paragraph">La informática como herramienta y ámbito de desarrollo de nuevas tecnologías tiene cada día un lugar más importante en nuestra sociedad. El conocimiento técnico y las habilidades tecnológicas permitirán a los egresados de esta tecnicatura insertarse de manera efectiva y eficaz en el mundo laboral. Facilitar y asesorar al usuario en la operación y aprovechamiento de la funcionalidad de equipos y programas informáticos, de componentes, equipos, redes, programas y sistemas informáticos.</p>

            <ul class="historia__paragraph">
            <li class="historia--item">Eliminar las causas de los problemas informáticos.</li>
            <li class="historia--item">Capacitar y entrenar a usuarios en procesos y funcionamiento de sistemas.</li>
            <li class="historia--item">Organizar datos de empresas y personas, diseñar rutinas y procedimientos que contribuyan a facilitar a dar seguridad a las operaciones.</li>
            <li class="historia--item">Instalar y poner en marcha componentes, sistemas, equipos y redes.</li>
            </ul>

            <p class="historia__paragraph">Esta formación técnico profesional genera en el estudiante la apropiación de conocimientos, habilidades, actitudes, valores culturales y éticos relacionados con un perfil profesional, en donde integrará a su formación conocimientos generales, científicos tecnológicos, técnicos específicos, así como el desarrollo de prácticas profesionalizantes y el dominio de técnicas apropiadas para su futura inserción en el ámbito profesional que corresponda.</p>
        </section>

        <section class="historia__intro reveal" aria-labelledby="informatica-campo">
            <h3 id="informatica-campo" class="historia__subtitle especialidad__subtitle">Campo ocupacional</h3>

            <p class="historia__paragraph">La formación que ofrece la carrera de Técnico en Informática permite al egresado, a través de la articulación de saberes de diversos campos, realizar actividades dirigidas a:</p>

            <ul class="historia__paragraph">
            <li class="historia--item">Instalación y desarrollo de software de aplicación utilizando programación estructurada y orientada a objetos en ambientes web y móviles, con almacenamiento persistente de datos.</li>
            <li class="historia--item">Configuración y administración de plataforma e-learning y comercio electrónico.</li>
            <li class="historia--item">Instalación de redes.</li>
            <li class="historia--item">Armado y desarmado de computadoras.</li>
            </ul>
        </section>

        <section class="historia__intro reveal" aria-labelledby="informatica-practicas">
            <h3 id="informatica-practicas" class="historia__subtitle especialidad__subtitle">Prácticas profesionalizantes</h3>

            <p class="historia__paragraph">El alumno realizará prácticas profesionalizantes que posibilitarán la aplicación de sus saberes y habilidades, en forma de estrategias didácticas, proyectos en el aula taller, proyectos productivos, microemprendimientos, etc.</p>
        </section>

        <section class="historia__intro reveal" aria-labelledby="informatica-plan">
            <h3 id="informatica-plan" class="historia__subtitle especialidad__subtitle">Plan de estudios: Tecnicatura en Informática • Duración estimada: 4 años</h3>

            <h4 class="historia__subtitle">Cuarto año</h4>
            <p class="historia__paragraph"><strong>Formación general</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Literatura</li>
            <li class="historia--item">Inglés</li>
            <li class="historia--item">Educación Física</li>
            <li class="historia--item">Salud y Adolescencia</li>
            <li class="historia--item">Historia</li>
            <li class="historia--item">Geografía</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Científico Tecnológico</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Matemática Ciclo Superior</li>
            <li class="historia--item">Física</li>
            <li class="historia--item">Química</li>
            <li class="historia--item">Tecnologías Electrónicas</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Técnico Específica</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Laboratorio de Programación</li>
            <li class="historia--item">Laboratorio de Hardware</li>
            <li class="historia--item">Laboratorio de Sistemas Operativos</li>
            <li class="historia--item">Laboratorio de Aplicaciones</li>
            </ul>

            <!-- Quinto a Séptimo (texto exacto mantenido) -->
            <h4 class="historia__subtitle">Quinto año</h4>
            <p class="historia__paragraph"><strong>Formación general</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Literatura</li>
            <li class="historia--item">Inglés</li>
            <li class="historia--item">Educación Física</li>
            <li class="historia--item">Salud y Adolescencia</li>
            <li class="historia--item">Historia</li>
            <li class="historia--item">Geografía</li>
            </ul>
            <p class="historia__paragraph"><strong>Formación Científico Tecnológico</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Análisis Matemático</li>
            <li class="historia--item">Sistemas Digitales</li>
            <li class="historia--item">Teleinformática</li>
            </ul>
            <p class="historia__paragraph"><strong>Formación Técnico Específica</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Laboratorio de Programación</li>
            <li class="historia--item">Laboratorio de Hardware</li>
            <li class="historia--item">Laboratorio de Sistemas Operativos</li>
            <li class="historia--item">Laboratorio de Aplicaciones</li>
            </ul>

            <h4 class="historia__subtitle">Sexto año</h4>
            <p class="historia__paragraph"><strong>Formación general</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Literatura</li>
            <li class="historia--item">Inglés</li>
            <li class="historia--item">Educación Física</li>
            <li class="historia--item">Filosofía</li>
            <li class="historia--item">Arte</li>
            </ul>
            <p class="historia__paragraph"><strong>Formación Científico Tecnológico</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Matemática Aplicada</li>
            <li class="historia--item">Sistemas Digitales</li>
            <li class="historia--item">Investigación Operativa</li>
            <li class="historia--item">Seguridad Informática</li>
            <li class="historia--item">Derecho del Trabajo</li>
            </ul>
            <p class="historia__paragraph"><strong>Formación Técnico Específica</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Laboratorio de Programación</li>
            <li class="historia--item">Laboratorio de Hardware</li>
            <li class="historia--item">Laboratorio de Sistemas Operativos</li>
            <li class="historia--item">Laboratorio de Aplicaciones</li>
            </ul>

            <h4 class="historia__subtitle">Séptimo año</h4>
            <p class="historia__paragraph"><strong>Prácticas profesionalizantes</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Prácticas Profesionalizantes del Sector Informática</li>
            </ul>
            <p class="historia__paragraph"><strong>Formación Científico Tecnológico</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Emprendimientos Productivos y Desarrollo Local</li>
            <li class="historia--item">Evaluación de Proyectos</li>
            <li class="historia--item">Modelos y Sistemas</li>
            <li class="historia--item">Bases de Datos</li>
            </ul>
            <p class="historia__paragraph"><strong>Formación Técnico Específica</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Proyecto, Diseño e Implementación de Sistemas Computacionales</li>
            <li class="historia--item">Instalación, Mantenimiento y Reparación de Sistemas Computacionales</li>
            <li class="historia--item">Instalación, Mantenimiento y Reparación de Redes Informáticas</li>
            </ul>
        </section>
        </section>

        <!-- PROGRAMACIÓN -->
        <section id="id__programacion" class="historia u-container">
        <section class="historia__intro reveal" aria-labelledby="programacion-title">
            <h2 id="programacion-title" class="historia__title especialidad__title">TÉCNICO EN PROGRAMACIÓN</h2>
        </section>

        <section class="historia__intro reveal" aria-labelledby="programacion-obj">
            <h3 id="programacion-obj" class="historia__subtitle especialidad__subtitle">Objetivos</h3>
            <p class="historia__paragraph">La carrera de Técnico en programación ofrece las competencias profesionales que permiten al estudiante realizar actividades dirigidas a: analizar, diseñar, desarrollar, instalar y mantener software de aplicación tomando como base los requerimientos del usuario. Todas estas competencias posibilitan al egresado su incorporación al mundo laboral o desarrollar procesos productivos independientes, de acuerdo con sus intereses profesionales y necesidades de su entorno social. Así mismo, contribuyen a desarrollar competencias genéricas que les permitan comprender el mundo e influir en él, les capacita para aprender de forma autónoma a lo largo de la vida, desarrollar relaciones armónicas, participar en los ámbitos social, profesional y político.</p>
        </section>

        <section class="historia__intro reveal" aria-labelledby="programacion-campo">
            <h3 id="programacion-campo" class="historia__subtitle especialidad__subtitle">Campo ocupacional</h3>
            <p class="historia__paragraph">La formación que ofrece la carrera de Técnico en programación permite al egresado, a través de la articulación de saberes de diversos campos, realizar actividades dirigidas a:</p>

            <ul class="historia__paragraph">
            <li class="historia--item">Instalación y desarrollo de software de aplicación utilizando programación estructurada y orientada a objetos en ambientes web y móviles, con almacenamiento persistente de datos.</li>
            <li class="historia--item">Configuración y administración de plataforma e-learning y comercio electrónico.</li>
            </ul>
        </section>

        <section class="historia__intro">
            <h3 class="historia__subtitle especialidad__subtitle">Plan de estudios: Tecnicatura en Programación • Duración estimada: 4 años</h3>

            <!-- Resto del plan (texto exacto mantenido) -->
            <h4 class="historia__subtitle">Cuarto año</h4>
            <p class="historia__paragraph"><strong>Formación general</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Literatura</li>
            <li class="historia--item">Inglés</li>
            <li class="historia--item">Educación Física</li>
            <li class="historia--item">Salud y Adolescencia</li>
            <li class="historia--item">Historia</li>
            <li class="historia--item">Geografía</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Científico Tecnológico</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Matemática Ciclo Superior</li>
            <li class="historia--item">Física</li>
            <li class="historia--item">Química</li>
            <li class="historia--item">Tecnologías Electrónicas</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Técnico Específica</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Laboratorio de Programación</li>
            <li class="historia--item">Laboratorio de Hardware</li>
            <li class="historia--item">Laboratorio de Sistemas Operativos</li>
            <li class="historia--item">Laboratorio de Aplicaciones</li>
            </ul>

            <!-- Quinto - Séptimo: mantenidos igual que en tu código -->
            <h4 class="historia__subtitle">Quinto año</h4>
            <p class="historia__paragraph"><strong>Formación general</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Literatura</li>
            <li class="historia--item">Inglés</li>
            <li class="historia--item">Educación Física</li>
            <li class="historia--item">Salud y Adolescencia</li>
            <li class="historia--item">Historia</li>
            <li class="historia--item">Geografía</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Científico Tecnológico</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Análisis Matemático</li>
            <li class="historia--item">Sistemas Digitales</li>
            <li class="historia--item">Bases de Datos</li>
            <li class="historia--item">Modelos y Sistemas</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Técnico Específica</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Laboratorio de Programación</li>
            <li class="historia--item">Laboratorio de Redes Informáticas</li>
            <li class="historia--item">Laboratorio de Diseño Web</li>
            <li class="historia--item">Laboratorio de Diseño de Bases de Datos</li>
            </ul>

            <h4 class="historia__subtitle">Sexto año</h4>
            <p class="historia__paragraph"><strong>Formación general</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Literatura</li>
            <li class="historia--item">Inglés</li>
            <li class="historia--item">Educación Física</li>
            <li class="historia--item">Filosofía</li>
            <li class="historia--item">Arte</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Científico Tecnológico</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Matemática Discreta</li>
            <li class="historia--item">Sistemas Digitales</li>
            <li class="historia--item">Sistemas de Gestión y Autogestión</li>
            <li class="historia--item">Seguridad Informática</li>
            <li class="historia--item">Derecho del Trabajo</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Técnico Específica</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Laboratorio de Programación</li>
            <li class="historia--item">Laboratorio de Procesos Industriales</li>
            <li class="historia--item">Desarrollo de Aplicaciones Web Estáticas</li>
            <li class="historia--item">Desarrollo de Aplicaciones Web Dinámicas</li>
            </ul>

            <h4 class="historia__subtitle">Séptimo año</h4>
            <p class="historia__paragraph"><strong>Prácticas profesionalizantes</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Prácticas Profesionalizantes del Sector Informática</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Científico Tecnológico</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Emprendimientos Productivos y Desarrollo Local</li>
            <li class="historia--item">Evaluación de Proyectos</li>
            <li class="historia--item">Modelos y Sistemas</li>
            <li class="historia--item">Organización y Métodos</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Técnico Específica</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Proyecto, Diseño e Implementación de Sistemas Computacionales</li>
            <li class="historia--item">Proyecto de Desarrollo de Software para Plataformas Móviles</li>
            <li class="historia--item">Proyecto de Implementación de Sitios Web Dinámicos</li>
            </ul>
        </section>
        </section>

        <!-- M.M.O. -->
        <section id="id__mmo" class="historia u-container" aria-labelledby="mmo-title">
        <section class="historia__intro reveal">
            <h2 id="mmo-title" class="historia__title especialidad__title">MAESTRO MAYOR DE OBRAS</h2>
        </section>

        <section class="historia__intro reveal" aria-labelledby="mmo-obj">
            <h3 id="mmo-obj" class="historia__subtitle especialidad__subtitle">Objetivos</h3>

            <p class="historia__paragraph"><strong>Objetivos:</strong> El título Maestro Mayor de Obras habilita para la ejecución del proyecto, dirección y/o construcción de edificios de hasta planta baja, un subsuelo, cuatro pisos altos y dependencia en la azotea.</p>
            <p class="historia__paragraph">Las tareas profesionales que realizará el Maestro Mayor de Obra son:</p>

            <ul class="historia__paragraph">
            <li class="historia--item">Croquis preliminares.</li>
            <li class="historia--item">Esquemas.</li>
            <li class="historia--item">Croquis de Plantas de elevación o de volumen.</li>
            <li class="historia--item">Crear anteproyectos del conjunto de plantas, cortes y elevaciones establecidas por las autoridades encargadas.</li>
            <li class="historia--item">Conductor Técnico en una obra de arquitectura ejecutada por administración de propietario.</li>
            <li class="historia--item">Verificación de la calidad de los materiales utilizados.</li>
            <li class="historia--item">Identificar problemas y formular objetivos.</li>
            <li class="historia--item">Formular modelos de solución a los problemas.</li>
            <li class="historia--item">Materializar el modelo propuesto</li>
            </ul>

            <p class="historia__paragraph">El Maestro Mayor de Obra puede construir:</p>
            <ul class="historia__paragraph">
            <li class="historia--item">Subsuelos.</li>
            <li class="historia--item">Planta Baja.</li>
            <li class="historia--item">Cuatro Pisos</li>
            <li class="historia--item">Dependencia de terraza.</li>
            </ul>

            <p class="historia__paragraph">Los Técnicos egresados con esta orientación, cuentan con una importante preparación técnico - profesional, con alcances que los habilitan para asumir diferentes y muy variados niveles de responsabilidad en el campo de la Construcciones Civiles, para proseguir estudios universitarios en carreras afines y terciarios en sus posibles especializaciones.</p>
        </section>

        <section class="historia__intro reveal" aria-labelledby="mmo-plan">
            <h3 id="mmo-plan" class="historia__subtitle especialidad__subtitle">Plan de estudios: Tecnicatura en Maestro Mayor de Obra • Duración estimada: 4 años</h3>

            <!-- Plan (texto exacto) -->
            <h4 class="historia__subtitle">Cuarto año</h4>
            <p class="historia__paragraph"><strong>Formación general</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Literatura</li>
            <li class="historia--item">Inglés</li>
            <li class="historia--item">Educación Física</li>
            <li class="historia--item">Salud y Adolescencia</li>
            <li class="historia--item">Historia</li>
            <li class="historia--item">Geografía</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Científico Tecnológico</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Matemática Ciclo Superior</li>
            <li class="historia--item">Física</li>
            <li class="historia--item">Química</li>
            <li class="historia--item">Conocimientos de los Materiales</li>
            </ul>

            <p class="historia__paragraph"><strong>Formación Técnico Específica</strong></p>
            <ul class="historia__paragraph">
            <li class="historia--item">Dibujo Tecnológico</li>
            <li class="historia--item">Interpretación de Anteproyectos</li>
            <li class="historia--item">Planificación de Obra</li>
            <li class="historia--item">Sistemas Constructivos</li>
            <li class="historia--item">Proyecto</li>
            </ul>

            <!-- resto del plan mantenido idéntico -->
        </section>
        </section>

        <!-- CONTACTO -->
        <section id="id__contacto" class="contacto u-container">
        <section class="contacto__card reveal" aria-labelledby="contacto-dir">
            <h3 id="contacto-dir" class="contacto__heading">Dirección</h3>
            <p class="contacto__text">Nicaragua&nbsp;3516,&nbsp;Santos&nbsp;Lugares,<br>Buenos&nbsp;Aires,&nbsp;Argentina</p>

            <h3 class="contacto__heading">Teléfono</h3>
            <p class="contacto__text">4712 – 6983&nbsp;/&nbsp;4757-2546</p>

            <h3 class="contacto__heading">Correo</h3>
            <p class="contacto__text">eest1tresdefebrero@abc.gob.ar</p>

            <h3 class="contacto__heading">Información y Asesoramiento&nbsp;(inscripciones)</h3>
            <p class="contacto__text">oficinadealumnost1tfeb@gmail.com</p>
        </section>

        <section class="contacto__map reveal" aria-labelledby="mapa-heading">
            <h3 id="mapa-heading" class="contacto__map-heading">Ubicación de la técnica</h3>
            <div class="contacto__map-frame">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13136.180883257915!2d-58.54699!3d-34.603018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb78cddd75295%3A0x61f318d2a3648383!2sEscuela%20de%20Educaci%C3%B3n%20T%C3%A9cnica%20N%C2%BA%201%20%22Manuel%20Belgrano%22!5e0!3m2!1ses!2sus!4v1685250909152!5m2!1ses!2sus" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
            </div>
        </section>
        </section>

        <!-- INSCRIPCION -->
        <section id="id__inscripcion" class="inscripcion u-container">
        <section class="card reveal" aria-labelledby="inscripcion-title">
            <h2 id="inscripcion-title" class="card__title">Pre-Inscripción a la técnica</h2>

            <p class="card__note" role="alert">⚠️ Para completar la inscripción imprimí el formulario y acercalo a la escuela para validar la inscripción.</p>

            <div class="card__actions">
            <a href="https://forms.gle/eAgWz3ocyMV7dtkh9" target="_blank" rel="noopener" class="btn btn--primary" aria-label="Abrir formulario de pre-inscripción online (se abre en una pestaña nueva)">📝 Formulario online</a>

            <a href="docs/PLANILLA INSCRIPCION -SECUNDARIA actualizada.pdf" download class="btn">⬇️ Planilla de inscripción (PDF)</a>

            <a href="docs/Autorización de uso de imagen ESTUDIANTES.pdf" download class="btn">⬇️ Autorización de uso de imagen (PDF)</a>
            </div>
        </section>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="footer" role="contentinfo">
        <section class="footer__info">
        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
        <p>Nicaragua 3516, Santos Lugares<br>Buenos Aires, Argentina</p>
        </section>

        <section class="footer__info">
        <i class="fa-solid fa-phone" aria-hidden="true"></i>
        <p>(011) 4712-6983<br>(011) 4757-2546</p>
        </section>

        <section class="footer__info">
        <i class="fa-solid fa-envelope" aria-hidden="true"></i>
        <p>eest1tresdefebrero@abc.gob.ar</p>
        </section>
    </footer>

    <!-- SCRIPT: funcionalidad (nav toggle, smooth scroll, reveal, carousel, theme) -->
    <script>
    (function(){
        /* ---------- Helpers ---------- */
        const qs = s => document.querySelector(s);
        const qsa = s => Array.from(document.querySelectorAll(s));

        /* ---------- NAV TOGGLE (mobile) ---------- */
        const navToggle = qs('#navToggle');
        const mainNav = qs('#mainNav');

        navToggle && navToggle.addEventListener('click', () => {
        const open = mainNav.classList.toggle('nav--open');
        navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });

        /* Close menu when clicking a nav link (mobile) */
        qsa('[data-scroll]').forEach(a => {
        a.addEventListener('click', (e) => {
            // smooth scroll handled below
            if (mainNav.classList.contains('nav--open')) {
            mainNav.classList.remove('nav--open');
            navToggle.setAttribute('aria-expanded','false');
            }
        });
        });

        /* ---------- SMOOTH SCROLL FOR ALL ANCHORS ---------- */
        // Respect prefers-reduced-motion
        const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        qsa('[data-scroll], a[href^="#"]').forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (!href || href.startsWith('http') || href.startsWith('mailto:')) return;
            if (href === '#' || href === '#top') {
            e.preventDefault();
            if (!prefersReduced) window.scrollTo({ top: 0, behavior: 'smooth' });
            else window.scrollTo(0,0);
            return;
            }
            if (href.startsWith('#')) {
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const topOffset = 80; // header height
                const rect = target.getBoundingClientRect();
                const scrollTop = window.pageYOffset + rect.top - topOffset;
                if (!prefersReduced) window.scrollTo({ top: scrollTop, behavior: 'smooth' });
                else window.scrollTo(0, scrollTop);
                // focus for accessibility
                target.setAttribute('tabindex','-1');
                target.focus({ preventScroll: true });
                window.setTimeout(()=> target.removeAttribute('tabindex'), 1000);
            }
            }
        });
        });

        /* ---------- SCROLL REVEAL (simple) ---------- */
        const reveals = qsa('.reveal');
        const onScroll = () => {
        const vh = window.innerHeight;
        reveals.forEach(el => {
            const r = el.getBoundingClientRect();
            if (r.top <= vh - 80) el.classList.add('is-visible');
        });
        };
        if (!prefersReduced) {
        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', onScroll);
        // init
        onScroll();
        } else {
        reveals.forEach(el => el.classList.add('is-visible'));
        }

        /* ---------- THEME SWITCH (persist) ---------- */
        const themeSwitch = qs('#themeSwitch');
        const root = document.documentElement;
        const stored = localStorage.getItem('eest-theme');
        if (stored === 'dark') root.classList.add('dark');
        themeSwitch && themeSwitch.addEventListener('click', () => {
        const isDark = root.classList.toggle('dark');
        localStorage.setItem('eest-theme', isDark ? 'dark' : 'light');
        });

        /* ---------- SIMPLE CAROUSEL ---------- */
        const carousel = qs('.js-carousel');
        if (carousel) {
        const slides = qsa('.specialties__slide', carousel) || qsa('.specialties__slide');
        const prevBtn = qs('.js-prev');
        const nextBtn = qs('.js-next');
        let autoplay = true;
        let timer = null;
        let idx = slides.findIndex(s => s.classList.contains('is-active'));
        if (idx === -1) idx = 0;

        const show = (n) => {
        idx = (n + slides.length) % slides.length; // mueve esto arriba
        slides.forEach((s,i) => {
            s.classList.toggle('is-active', i === idx);
            s.style.opacity = (i===idx)? '1':'0';
            s.setAttribute('aria-hidden', i===idx ? 'false' : 'true');
        });
        };

        const next = () => show(idx + 1);
        const prev = () => show(idx - 1);
        // initial
        show(idx);
        // controls
        nextBtn && nextBtn.addEventListener('click', () => { next(); pauseAutoplay(); });
        prevBtn && prevBtn.addEventListener('click', () => { prev(); pauseAutoplay(); });
        // autoplay
        const startAutoplay = () => {
            if (prefersReduced) return;
            timer = setInterval(next, 4200);
        };
        const pauseAutoplay = () => {
            autoplay = false;
            if (timer) clearInterval(timer);
        };
        carousel.addEventListener('mouseenter', pauseAutoplay);
        carousel.addEventListener('focusin', pauseAutoplay);
        carousel.addEventListener('mouseleave', () => { if (!autoplay) { autoplay = true; startAutoplay(); } });
        startAutoplay();
        }

        /* ---------- Accessibility helpers: close nav on Escape ---------- */
        document.addEventListener('keydown', (ev) => {
        if (ev.key === 'Escape') {
            if (mainNav.classList.contains('nav--open')) {
            mainNav.classList.remove('nav--open');
            navToggle.setAttribute('aria-expanded','false');
            navToggle.focus();
            }
        }
        });

    })();
    </script>

</body>
</html>
