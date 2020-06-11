<?php
// $title = "Lorem Ipsum";
include 'include/header.php';
?>
<form action="form.php">
    <input hidden type="text" name="tipo" value="canudo">

    <label for="masa_1">
        Masa
        <select required name="masa_1">
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
            <option value="chocolate">Chocolate</option>
            <option value="morango">Morango</option>
            <option value="creme">Creme</option>
            <option value="beijinho">Beijinho</option>
            <option value="cajeta">Cajeta</option>
        </select><br>
    </label>
    <input type="submit" value="Next">
</form>
<?php include 'include/footer.php' ?>