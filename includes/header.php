<!-- header.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EEST N.º 1 – <?= $pageTitle ?? 'Inicio'; ?></title>

    <link rel="stylesheet" href="../src/styles/styles.css">
    <link rel="icon" href="../src/assets/img/logo.webp" type="image/webp">
    <script src="https://kit.fontawesome.com/d0c30b1127.js" crossorigin="anonymous"></script>
</head>

<body class="<?= $pageSlug ?? 'page--home'; ?>">
<header class="header">
    <div class="header__brand">
        <img class="header__logo" src="../src/assets/img/logo.webp" alt="Logo EEST N.º 1">
        <span class="header__title">EESTN1</span>
    </div>

    <button class="nav-toggle" id="navToggle" aria-label="Abrir menú" aria-expanded="false">&#9776;</button>

    <nav class="nav" id="mainNav" aria-label="Menú principal">
        <ul class="nav__list">
            <li class="nav__item"><a href="../public/index.php">Inicio</a></li>
            <li class="nav__item"><a href="../public/historia.php">Historia</a></li>

            <li class="nav__item nav__item--has-dropdown">
                <a href="#">Especialidades</a>
                <ul class="nav__dropdown">
                    <li><a href="../public/ciclo-basico.php">Ciclo básico</a></li>
                    <li><a href="../public/informatica.php">Informática</a></li>
                    <li><a href="../public/programacion.php">Programación</a></li>
                    <li><a href="../public/mmo.php">M.M.O.</a></li>
                </ul>
            </li>

            <li class="nav__item"><a href="../public/contacto.php">Contacto</a></li>
            <li class="nav__item"><a href="../public/inscripcion.php">Inscripción</a></li>
            <li class="nav__item"><a href="http://eestn1tfeb.blogspot.com/" target="_blank">Blog</a></li>

            <!-- Instagram -->
            <li class="nav__item">
                <a href="https://www.instagram.com/tecnica1.3f/" target="_blank" aria-label="Instagram oficial">
                    <i class="fa-brands fa-instagram"></i> <span class="sr-only">Instagram</span>
                </a>
            </li>

            <!-- Tema claro/oscuro -->
            <li class="nav__item">
                <button class="theme-switch" id="themeSwitch" aria-label="Cambiar tema">
                    <i class="fa-solid fa-sun"></i>
                </button>
            </li>
        </ul>
    </nav>
</header>
<div class="space"></div>

<main class="main">
