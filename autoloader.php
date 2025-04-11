<?php 

function model_autoloader($class) { 
    $path = 'app/models/' . $class . '.php'; 
    if (file_exists($path)) { 
        require_once $path; 
    } 
} 
   
spl_autoload_register('model_autoloader');
