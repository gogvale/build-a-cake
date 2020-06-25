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

<?php $fileName = basename($_SERVER['PHP_SELF']);
?>
<pre>
    <?=
        $fileName;
    ?>
</pre>

<body>
    <header>
        <div class="pink banner">
            <h2>Build a Cake</h2>
            <div>
                <select name="language" id="language" onchange="document.location.href='/'+this.value+'/<?= $fileName ?>'">
                    <option selected disabled value="">🌐</option>
                    <a href="/pt-br/#">
                        <option value="pt-br">🇧🇷</option>
                    </a>
                    <option value="es-mx">🇲🇽</option>
                    <option value="en">🇺🇸</option>
                </select>
            </div>
        </div>
    </header>