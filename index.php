<!DOCTYPE html>
<html lang="es">

<head>
  <?php include('./src/includes/basic.php'); ?>

  <!-- CSS -->
  <link rel="stylesheet" href="./src/css/inicio.css" />
</head>

<body>
  <?php include('./src/includes/header.php'); ?>
  <main>
    <div class="portada">
      <div class="fondo">
        <div class="logo">
          <img src="./src/img/logo.png" />
        </div>
        <h1>ESCUELA DE EDUCACIÓN SECUNDARIA TÉCNICA Nº1</h1>
        <h1>"MANUEL BELGRANO"</h1>
        <h1>TRES DE FEBRERO</h1>
      </div>
    </div>
    <div class="carouselContainer">
      <h1>ESPECIALIDADES</h1>
      <div class="carousel">
        <img src="./src/img/CICLO-BASICO.png" alt="Imagen 1" class="active" />
        <img src="./src/img/TECNICA-EN-INF.png" alt="Imagen 2" />
        <img src="./src/img/PROGRAMACION3.png" alt="Imagen 3" />
        <img src="./src/img/MAESTRO-2.png" alt="Imagen 3" />
      </div>
      <div class="carouselBtns">
        <button class="carousel-btn previous">Anterior</button>
        <button class="carousel-btn next">Siguiente</button>
      </div>
    </div>
  </main>
  <?php include('./src/includes/footer.php'); ?>
</body>
<script src="./src/js/carousel.js"></script>

</html>