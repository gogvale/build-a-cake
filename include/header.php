<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title> <?= $title ?? "Build a Cake!" ?> - Carioca Lanches®</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/reset.css" />
    <link rel="stylesheet" href="CSS/header.css" />
</head>

<?php $fileName = $_SERVER['PHP_SELF']; ?>


<body>
    <header>
        <div class="pink banner">
            <h2>Build a Cake</h2>
            <a href="#">Idioma</a>
        </div>
        <div class="yellow banner">
            <nav>
                <a <?php if ($fileName == '/index.php') echo 'class="active"'; ?> href="/">Inicio</a>
                <a <?php if ($fileName == '/nosotros.php') echo 'class="active"'; ?> href="nosotros.php">Nosotros</a>
                <a <?php if ($fileName == '/galeria.php') echo 'class="active"'; ?> href="galeria.php">Galería</a>
                <!-- <a <?php if ($fileName == '/build-it.php') echo 'class="active"'; ?> href="build-it.php">Build It!</a> -->
            </nav>
            <div style="visibility:hidden" class="buttons">
                <a href="#">
                    <figure>
                        <img src="./IMG/greencake.svg" alt="Green Cake" />
                        <figcaption>
                            Registarse
                        </figcaption>
                    </figure>
                </a>

                <a href="#">
                    <figure>
                        <img src="./IMG/pinkcake.svg" alt="Pink Cake" />
                        <figcaption>
                            Inicio de Sesión
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
    </header>