<?php

function classAutoLoader($class)
{
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";
    if (file_exists($the_path) && !class_exists($class)) {
        require($the_path);
    } else {
        die("This file name {$class}.php was not found");
    }
}

spl_autoload_register('classAutoLoader');
//fnction to redirect the user to another page
function redirect($location){
header("Loction: {$location}");
}