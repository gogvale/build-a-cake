<?php

if(
    !isset($_POST['email']) ||
    ctype_space($_POST['email']) ||
    !isset($_POST['message'])  ||
    ctype_space($_POST['message']) 
) die("Ocurrió un error, intenta nuevamente más tarde.");
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

require "Email.php";

function sanitize_input($string)
{
    return htmlspecialchars($string, ENT_QUOTES);
}

$name =  sanitize_input($_POST['name']);
$from =  sanitize_input($_POST['email']);
$phone =  sanitize_input($_POST['phone']);
$message =  sanitize_input($_POST['message']);


$body = <<<EOL
Nombre: {$name}
Correo: {$from}
Celular: {$phone}

Mensaje:
{$message}

EOL;

$email = new Email("Contáctanos - Build-a-cake", $body, $from);
$email_sent = $email->send_email();
?>

<?php if ($email_sent) : ?>
    <div style="padding: 10em;">
        <h1 class="text-center">¡Mensaje enviado con éxito!</h1>
        <p class="text-center">Da click <a href="../index.php">aquí</a> para regresar a la página inicial</p>
    </div>
<?php else : ?>
    <div style="padding: 10em;">
        <h1 class="text-center">Ocurrió un problema</h1>
        <p class="text-center">Da click <a href="../index.php">aquí</a> para regresar a la página inicial</p>
    </div>
<?php endif ?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="../assets/js/script.min.js"></script>
</body>

</html>