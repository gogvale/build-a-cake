<?php
if(
    !isset($_POST['name']) ||
    !isset($_POST['phone']) ||
    !isset($_POST['city']) 
) die("Ocurrió un problema, intenta nuevamente más tarde.");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Build-a-Cake</title>
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
</head>

<body>
<?php

require "resources/Email.php";
require "resources/Ciudades.php";
require "resources/Cart.php";

function sanitize_input($string)
{
    return htmlspecialchars($string, ENT_QUOTES);
}

$name =  sanitize_input($_POST['name']);
$from =  sanitize_input($_POST['email']);
$phone =  sanitize_input($_POST['phone']);

if(isset($_POST['mobile']))
    $mobile =  "celular";
else
    $mobile = "fijo"; 

$message =  sanitize_input($_POST['details']);
$city_id =  sanitize_input($_POST['city']);


$item_list = join(PHP_EOL,$cart->name_price());

$body = <<<EOL
Nombre: {$name}
Celular: {$phone} ({$mobile})
Correo: {$from}
Ciudad: {$ciudades[$city_id]}

Productos:
{$item_list}

Total: \${$cart->total()}

Detalles adicionales:
{$message}

EOL;

$email = new Email("Nuevo Pedido - Build-a-cake", $body, $from);
$email_sent = $email->send_email();
?>

    <div style="padding: 10em;">
        <h1 class="text-center">
            <?php if ($email_sent) : ?> 
                ¡Mensaje enviado con éxito!
            <?php else : ?>
                Ocurrió un problema, intenta nuevamente más tarde.
            <?php endif ?>
        </h1>
        <p class="text-center">Da click <a href="../clean_cart.php">aquí</a> para regresar a la página inicial</p>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="../assets/js/script.min.js"></script>
</body>

</html>