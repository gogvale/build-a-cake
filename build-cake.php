<?php
// $title = "Lorem Ipsum";
include 'include/header.php';
?>

<form action="paso2.php">
    <label for="tipo">
        <input required checked type="radio" active name="tipo" value="canudo">Canudo
        <input required type="radio" name="tipo" value="camada">Camada
    </label>
    <br>
    <input type="submit" value="Siguiente">
</form>

<?php include 'include/footer.php' ?>