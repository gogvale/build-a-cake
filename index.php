<!-- Detects browser language and redirect to apropriate subdomain -->
<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$acceptLang = ["en", "pt-br", "es-mx"];
$lang = in_array($lang, $acceptLang) ? $lang : 'en';
$url = "{$lang}/index.php";
header("Location: $url");
