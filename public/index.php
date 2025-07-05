<?php
    $pageTitle = 'Inicio';
    $pageSlug  = 'page--home';
    include '../includes/header.php';
?>

<!-- HERO ------------------------------------------------>
<section class="hero | u-flex-center u-text-center">
    <img class="hero__logo" src="/src/assets/img/logo.webp" alt="Logo EEST Nº1">
    <h1 class="hero__title">Escuela de Educación Secundaria Técnica Nº1</h1>
    <p class="hero__subtitle">&quot;Manuel Belgrano&quot; · Tres de Febrero</p>
</section>

<!-- ESPECIALIDADES -------------------------------------->
<section class="specialties | u-container">
    <h2 class="specialties__heading">Especialidades</h2>

    <div class="specialties__carousel js-carousel">
        <img class="specialties__slide is-active" src="/src/assets/img/CICLO-BASICO.webp"  alt="Ciclo básico">
        <img class="specialties__slide" src="/src/assets/img/TECNICA-EN-INF.webp" alt="Técnica en Informática">
        <img class="specialties__slide" src="/src//assets/img/PROGRAMACION3.webp"  alt="Programación">
        <img class="specialties__slide" src="/src//assets/img/MAESTRO-2.webp" alt="M.M.O.">
    </div>

    <button class="specialties__btn specialties__btn--prev js-prev">Anterior</button>
    <button class="specialties__btn specialties__btn--next js-next">Siguiente</button>
</section>

<?php include '../includes/footer.php'; ?>
<script src="/src/assets/scripts/app.js" defer></script>

