<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <title> <?= $title ?? "Build a Cake!" ?> - Carioca Lanches®</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/CSS/reset.css" />
    <link rel="stylesheet" href="/CSS/header.css" />
</head>

<?php
$fileName = basename($_SERVER['PHP_SELF']);
$subdomain = explode('/', $_SERVER['PHP_SELF'])[1];
?>

<body>
    <header>
        <div class="pink banner">
            <a href="index.php">
                <h2>Build a Cake</h2>
            </a>
            <div>
                <select name="language" id="language" onchange="document.location.href='/'+this.value+'/<?= $fileName ?>'">
                    <option <?php if ($subdomain == 'index.php') echo 'selected' ?> disabled value="">🌐</option>
                    <option <?php if ($subdomain == 'pt-br') echo 'selected' ?> value="pt-br">🇧🇷</option>
                    <option <?php if ($subdomain == 'es-mx') echo 'selected' ?> value="es-mx">🇲🇽</option>
                    <option <?php if ($subdomain == 'en') echo 'selected' ?> value="en">🇺🇸</option>
                </select>
            </div>
        </div>
    </header>