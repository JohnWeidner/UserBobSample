<?php

error_reporting(E_ERROR);

function __autoload($class_name) {
    $class_name = str_replace('\\', DIRECTORY_SEPARATOR, $class_name);
    $class_name = strtolower($class_name);
    $filename = "./$class_name.php";
    if (file_exists($filename))
        include_once $filename;
}
