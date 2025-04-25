<?php 

class View { 
 
    public static function render($layout, $content, $data) { 
        if(is_array($data)) { 
            extract($data); 
        } 
 
        $content = 'app/views/' . $content . '.php'; 
 
        include "app/views/layouts/$layout.php";
    } 
     
     
} 