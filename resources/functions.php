<?php

function non_hidden($string)
{
    return $string[0] != ".";
}

function list_images($dir)
{
    // Open a known directory, and proceed to read its contents
    $dir_list = [];
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                $dir_list[] =  $file;
            }
            closedir($dh);
        }
    }
    $dir_list = array_filter($dir_list, "non_hidden");
    return $dir_list;
}

$gallery_path = "./assets/img/Galery/";
$gallery_array = list_images($gallery_path);
sort($gallery_array);

// echo "<pre>";
// var_dump($gallery_array);
// echo "</pre>";
