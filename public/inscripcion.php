<?php
    $pageTitle = 'Inscripción';
    $pageSlug  = 'page--inscripcion';
    include '../includes/header.php';
?>

<main class="inscripcion | u-container">

    <section class="card reveal">
        <h1 class="card__title">Pre-Inscripción a la técnica</h1>

        <p class="card__note" role="alert">
            ⚠️ Para completar la inscripción imprimí el formulario y acercalo a la escuela para validar la inscripción.
        </p>

        <div class="card__actions">
            <a href="https://forms.gle/eAgWz3ocyMV7dtkh9"
                target="_blank"
                class="btn btn--primary"
                aria-label="Abrir formulario de pre-inscripción online (se abre en una pestaña nueva)">
                    📝 Formulario online
            </a>

            <a href="../docs/PLANILLA INSCRIPCION -SECUNDARIA actualizada.pdf" download class="btn">
                ⬇️ Planilla de inscripción (PDF)
            </a>

            <a href="../docs/Autorización de uso de imagen ESTUDIANTES.pdf" download class="btn">
                ⬇️ Autorización de uso de imagen (PDF)
            </a>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>


