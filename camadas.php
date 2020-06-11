<?php
$title = "Pastel Camadas";
include 'include/header.php';
?>
<form action="form.php">
    <input hidden type="text" name="tipo" value="camada">
    <label for="num_camadas">
        <input required type="number" value="1" name="num_camadas" min="1" max="3" id="num_camadas" onchange="updateCamadasPastel()">
        N° de Camadas
    </label><br>
    <label for="masa_1">
        Masa #1
        <select required name="masa_1" id="m1">
            <option value="chocolate">Chocolate</option>
            <option value="morango">Morango</option>
            <option value="creme">Creme</option>
            <option value="beijinho">Beijinho</option>
            <option value="cajeta">Cajeta</option>
        </select>
    </label>
    <label for="cob_1">
        Cobertura #1
        <select required disabled name="cob_1" id="c1">
            <option selected disabled value=""></option>
            <option value="chocolate">Chocolate</option>
            <option value="morango">Morango</option>
            <option value="creme">Creme</option>
            <option value="beijinho">Beijinho</option>
            <option value="cajeta">Cajeta</option>
        </select><br>
    </label>
    <label for="masa_2">
        Masa #2
        <select required disabled name="masa_2" id="m2">
            <option selected disabled value=""></option>
            <option value="chocolate">Chocolate</option>
            <option value="morango">Morango</option>
            <option value="creme">Creme</option>
            <option value="beijinho">Beijinho</option>
            <option value="cajeta">Cajeta</option>
        </select>
    </label>
    <label for="cob_2">
        Cobertura #2
        <select required disabled name="cob_2" id="c2">
            <option disabled selected value=""></option>
            <option value="chocolate">Chocolate</option>
            <option value="morango">Morango</option>
            <option value="creme">Creme</option>
            <option value="beijinho">Beijinho</option>
            <option value="cajeta">Cajeta</option>
        </select><br>
    </label>
    <label for="masa_3">
        Masa #3
        <select required disabled name="masa_3" id="m3">
            <option selected disabled value=""></option>
            <option value="chocolate">Chocolate</option>
            <option value="morango">Morango</option>
            <option value="creme">Creme</option>
            <option value="beijinho">Beijinho</option>
            <option value="cajeta">Cajeta</option>
        </select>
    </label>
    <label for="calda">
        Calda
        <select required name="calda" id="calda">
            <option selected disabled value=""></option>
            <option value="chocolate">Chocolate</option>
            <option value="morango">Morango</option>
            <option value="creme">Creme</option>
            <option value="beijinho">Beijinho</option>
            <option value="cajeta">Cajeta</option>
        </select><br>
    </label>

    <input type="submit" value="Enviar">
</form>

<script>
    function enable(id) {
        // console.log("enable " + id);
        document.querySelector("select#" + id).disabled = false;
    }

    function disable(id) {
        // console.log("disable " + id);
        document.querySelector("select#" + id).disabled = true;
    }

    function updateCamadasPastel() {
        const camadas = document.querySelector("input#num_camadas").value;
        // console.log(camadas);

        if (camadas == 1) {
            disable("c1");
            disable("c2");
            disable("m2");
            disable("m3");
        } else if (camadas == 2) {
            enable("c1");
            enable("m2");
            disable("c2");
            disable("m3");
        } else {
            enable("c1");
            enable("c2");
            enable("m2");
            enable("m3");
        }
    }
</script>
<?php include 'include/footer.php' ?>