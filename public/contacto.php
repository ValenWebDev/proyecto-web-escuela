<?php
    $pageTitle = 'Contacto';
    $pageSlug  = 'page--contacto';
    include '../includes/header.php';
?>

<main class="contacto | u-container">

    <!-- ===== Datos de contacto ===== -->
    <section class="contacto__card reveal">

        <h2 class="contacto__heading">Dirección</h2>
        <p  class="contacto__text">
            Nicaragua&nbsp;3516,&nbsp;Santos&nbsp;Lugares,<br>
            Buenos&nbsp;Aires,&nbsp;Argentina
        </p>

        <h2 class="contacto__heading">Teléfono</h2>
        <p  class="contacto__text">4712 – 6983&nbsp;/&nbsp;4757-2546</p>

        <h2 class="contacto__heading">Correo</h2>
        <p  class="contacto__text">eest1tresdefebrero@abc.gob.ar</p>

        <h2 class="contacto__heading">
            Información y Asesoramiento&nbsp;(inscripciones)
        </h2>
        <p  class="contacto__text">oficinadealumnost1tfeb@gmail.com</p>

    </section>

    <!-- ===== Mapa Google ===== -->
    <section class="contacto__map reveal">
        <h2 class="contacto__map-heading">Ubicación de la técnica</h2>

        <div class="contacto__map-frame">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13136.180883257915!2d-58.54699!3d-34.603018!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb78cddd75295%3A0x61f318d2a3648383!2sEscuela%20de%20Educaci%C3%B3n%20T%C3%A9cnica%20N%C2%BA%201%20%22Manuel%20Belgrano%22!5e0!3m2!1ses!2sus!4v1685250909152!5m2!1ses!2sus"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen
            ></iframe>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>


