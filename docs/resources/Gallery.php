<?php
class Gallery{

    public $path;
    public $array;


    function __construct($path = "./assets/img/Gallery/")
    {
        $this->path = $path;
        $this->array = $this->list_images();
        sort($this->array);
    }

    
    function list_images(): array
    {
        // Open a known directory, and proceed to read its contents
        $dir = $this->path;
        $dir_list = [];
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    $dir_list[] =  $file;
                }
                closedir($dh);
            }
        }
        $dir_list = array_filter($dir_list, function($string)
            {
                return $string[0] != ".";
            });
        return $dir_list;
    }
}

$gallery = new Gallery();
