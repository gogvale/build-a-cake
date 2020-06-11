<?php
$tipo =  $_REQUEST['tipo'];
if ($tipo == 'canudo') {
    header("Location: ./canudo.php");
    exit;
} else {
    header("Location: ./camadas.php");
    exit;
}
