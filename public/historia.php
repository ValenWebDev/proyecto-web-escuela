<?php
    $pageTitle = 'Historia';
    $pageSlug  = 'page--historia';
    include '../includes/header.php';
?>

    <main class="historia | u-container">
    <section class="historia__intro reveal">
        <h1 class="historia__title">
        Breve historia de la E.E.S.T. Nº1 “Manuel Belgrano”, Distrito Tres de Febrero.
        </h1>

        <?php
        $parrafos = [
            'Los inicios de la escuela se remontan al año 1936, cuando se crea la Escuela Profesional de Artes y Oficios, emplazada en la calle Neuquén 3019, de la localidad de Sáenz Peña, distrito de Tres de Febrero.',
            'Comienza a desarrollarse como institución escolar de rama media técnica y agraria en el año 1978, con el plan Polivalente.',
            'Surge como escuela técnica, con la modalidad Construcciones, en el año 1981, compartiendo aún edificio con la Escuela Primaria Nº 19 "Antártida Argentina".',
            'El 20 de junio del año 1988, se coloca la piedra fundamental en el actual predio que ocupa la escuela en la calle Nicaragua y Anchordoqui, en Nicaragua 3516 de la localidad de Santos Lugares, perteneciente al mismo distrito.',
            'Durante los años que van desde 1990, se desarrolla el plan dual hasta el año 1996, en el cual se cierra para dar paso a la apertura de la especialidad "Bienes y Servicios", incorporando la orientación de Informática en el año 1997.',
            'En este año, con la implementación de la Ley Federal de Educación, se realizan las articulaciones con las escuelas primarias 19 y 14, manteniendo el tercer ciclo que por ley se cumplimentaba y el ciclo de 3 años con las dos especialidades: Maestro Mayor de Obra e Informática.',
            'En el año 2008, toda la comunidad educativa del establecimiento ya se instala en el pequeño edificio ubicado en el actual predio.',
            'La escuela creció en matrícula y permitió desarrollar una nueva especialidad en el año 2012, en respuesta al requerimiento de la comunidad: Técnico en Programación.',
            'Actualmente, con el impulso de las nuevas obras y la Ley de Educación Técnica, la institución cuenta con las especialidades de: Técnico en Informática Profesional y Personal, Técnico en Programación y Técnico en Maestro Mayor de Obra.'
        ];
        foreach ($parrafos as $p) {
            echo "<p class=\"historia__paragraph\">$p</p>";
        }
        ?>
    </section>

    <section class="historia__video reveal">
        <h2 class="historia__subtitle">RECORRIDO</h2>
        <div class="video-frame">
        <video controls>
            <source src="/src/assets/videos/Recorrido.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
        </div>
    </section>

    <section class="historia__video reveal">
        <h2 class="historia__subtitle">
        ¿Te gustaría conocer más acerca de la educación técnica?
        </h2>
        <div class="video-frame">
        <video controls>
            <source src="/src/assets/videos/Presentacion.mp4" type="video/mp4">
            Tu navegador no soporta la etiqueta de video.
        </video>
        </div>
    </section>
    </main>

<?php include '../includes/footer.php'; ?>
<link rel="stylesheet" href="/styles/pages/historia.css">


