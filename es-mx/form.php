<?php
$title = "Formulario de Pruebas";
require_once '../include/header.php';
require_once 'nav.php';

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
    <div hidden>
        <input type="text" name="tipo" value="<?= $_REQUEST['tipo'] ?>">
        <?php if ($_REQUEST['tipo'] == 'canudo') $_REQUEST['num_camadas'] = "1";  ?>
        <input type="number" name="num_camadas" value="<?= $_REQUEST['num_camadas'] ?>">

        <input type="text" name="masa_1" value="<?= $_REQUEST['masa_1'] ?>">
        <input type="text" name="calda" value="<?= $_REQUEST['calda'] ?>">

        <?php if ($_REQUEST['num_camadas'] > 1) : ?>
            <input type="text" name="masa_2" value="<?= $_REQUEST['masa_2'] ?>">
            <input type="text" name="cob_1" value="<?= $_REQUEST['cob_1'] ?>">
            <?php if ($_REQUEST['num_camadas'] > 2) : ?>
                <input type="text" name="masa_3" value="<?= $_REQUEST['masa_3'] ?>">
                <input type="text" name="cob_2" value="<?= $_REQUEST['cob_2'] ?>">
            <?php endif ?>
        <?php endif ?>

    </div>
    <input type="submit" value="Enviar">
</form>
<?php include '../include/footer.php' ?>