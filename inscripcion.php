<!DOCTYPE html>
<html lang="es">

<head>
  <?php include('./src/includes/basic.php'); ?>

  <!-- CSS -->
  <link rel="stylesheet" href="./src/css/inscripcion.css" />
</head>

<body>
  <?php include('./src/includes/header.php'); ?>
  <main>
    <div class="datos">
      <h1>Pre-Inscripción a la técnica</h1>
      <p class="nota">Nota: Para completar la inscripción deberá imprimir el formulario completo y acercarlo a la escuela para validar la inscripción.</p>
      <div class="formulario">
        <a class="campoBoton" href="https://forms.gle/eAgWz3ocyMV7dtkh9" target="_blank">Formulario de Pre-Inscripción Online</a>
        <a class="campoBoton" id="descargar" href="./src/archives/PLANILLA INSCRIPCIÓN - SECUNDARIA actualizada.pdf" download>Descargar formulario de inscripción</a>
        <a class="campoBoton" id="descargar" href="./src/archives/Autorización de uso de imagen ESTUDIANTES.pdf" download>Descargar formulario de autorización de uso de imagen</a>
      </div>
    </div>
  </main>
  <?php include('./src/includes/footer.php'); ?>
</body>

</html>