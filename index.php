<?php
// $title = "Lorem Ipsum";
require 'include/header.php';
?>
<style>
    div {
        display: inline-flex;
        border: 1px black solid;
        text-align: center;
    }

    a {
        text-decoration: none;
    }
</style>
<h1>Build a cake</h1>
<p>Seleccionar opción:</p>
<br>
<div>
    <a href="#">
        <img name="cake1" class="card" title="catalogo" src="IMG/Cake.Canudo.svg">
        <br> Catálogo
    </a>
</div>
<div>
    <a href="build-cake.php">
        <img class="card" title="construir tu pastel" src="IMG/Cake.camadas.svg">
        <br> Crear Pastel
    </a>
</div>


<?php require 'include/footer.php' ?>