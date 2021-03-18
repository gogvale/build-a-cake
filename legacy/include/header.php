<!DOCTYPE html>
<html lang="es">
<?php
$fileName = basename($_SERVER['PHP_SELF']);
$subdomain = explode('/', $_SERVER['PHP_SELF'])[1];
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <title> <?= $title ?? "Build a Cake!" ?> - Carioca Lanches®</title>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet" />
    <?php if ($subdomain == "es-mx") : ?>
        <meta name="description" content="Arma aquí su pastel personalizado. Elige masa base, relleno, cobertura y topping, a su gusto dentre las variadas opciones.">
        <meta name="keywords" content="Pastel,Reposteria,Pay,Postre,Cumpleaños,Aniversario,Extras,Dulce,Cajeta,Fiesta,Kit Fiesta,Brigadeiro,Brasileña,Naked cake,Piñata,Build a cake,Convívio,Conmemoración">
    <?php elseif ($subdomain == "pt-br") :  ?>
        <meta name="description" content="Construa seu bolo personalizado aqui. Escolha base de massa, recheio, cobertura e cobertura, ao seu gosto entre as várias opções.">
        <meta name="keywords" content="Bolo, Confeitaria, Pague, Sobremesa, Aniversário, Aniversário, Extras, Doce, Doce de Leite, Festa, Kit de festa, Brigadeiro, Brasileiro, Bolo nu, Festa infantil, Construa um bolo, Convivio, Comemoração">
    <?php else :  ?>
        <meta name="description" content="Build your personalized cake here. Choose dough base, filling, coverage and topping, to your liking among the various options.">
        <meta name="keywords" content="Cake, Confectionery, Pie, Dessert, Birthday, Anniversary, Extras, Sweet, Milk candy, Fiesta, Party Kit, Brigadeiro, Brazilian, Naked cake, Piñata, Build a cake, Convívio, Commemoration">
    <?php endif ?>
    <meta name="robots" content="">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="Spanish">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="/CSS/reset.css" />
    <link rel="stylesheet" href="/CSS/header.css" />
</head>

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