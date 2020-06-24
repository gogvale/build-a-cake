<?php
include 'include/header.php';
?>
<?php
$sabores_masa = [
    ["brown", "Chocolate", "chocolate"],
    ["red", "Red Velvet", "red_velvet"]
];
?>
<link rel="stylesheet" href="CSS/form.css">
<form action="form.php">
    <!-- camada/canudo -->
    <div class="flow">

        <div>
            <p>Selecciona el tipo de pastel:</p>
            <input required type="radio" name="formato" id="canudo">
            <label for="canudo">
                <img src="IMG/canudo.svg" alt="canudo">
            </label>
            <input type="radio" name="formato" id="camadas">
            <label for="camadas">
                <img src="IMG/camadas.svg" alt="camadas">
            </label>
        </div>
        <!-- tamanho -->
        <div>
            <p>Selecciona el tamaño:</p>

            <input required type="radio" name="tamanho" id="cm12">
            <label for="cm12">12cm</label>
            <input type="radio" name="tamanho" id="cm16">
            <label for="cm16">16cm</label>
            <input type="radio" name="tamanho" id="cm22">
            <label for="cm22">22cm</label>
        </div>
    </div>

    <!-- # camadas  + sabor masa  + tamanho  -->
    <!-- recheios -->
    <!-- cobertura -->
    <!-- toppings -->
    <?php for ($j = 0; $j < 3; $j++) : ?>
        <div class="flow">

            <div id="<?= "masa" . $j ?>" class="masa-pastel"></div>
            <select name="<?= 'masa' . $j ?>">
                <?php foreach ($sabores_masa as $i => $value) : ?>

                    <option style="background-color: <?= $value[0] ?>; color:white;" value="<?= $value[2]; ?>">
                        <span>&#9711;</span> |
                        <?= $value[1] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
    <?php endfor ?>

</form>
<?php include 'include/footer.php' ?>