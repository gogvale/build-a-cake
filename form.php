<?php
$title = "Formulario de Pruebas";
include 'include/header.php';
?>

<form method="POST" action="sendMail.php">
    <label for="name">Nombre</label>
    <input required type="text" name="name">
    <br>
    <label for="email">Email</label>
    <input required type="email" name="email" id="email">
    <br>
    <label for="phone-1">Telefono de Contacto 1</label>
    <input required type="tel" name="phone-1" id="phone-1">
    <br>
    <label for="phone-2">Telefono de Contacto 2</label>
    <input type="tel" name="phone-2" id="phone-2">
    <br>
    <input type="submit" value="Enviar">
</form>
<?php include 'include/footer.php' ?>