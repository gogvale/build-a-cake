<?php
require 'include/mailSender.php';
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

$r = $_REQUEST;

$name = $r['name'];
$email = $r['email'];
$phone1 = $r['phone-1'];
$phone2 = $r['phone-2'];

mailSender("Test", $_REQUEST);
