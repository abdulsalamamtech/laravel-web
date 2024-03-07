<?php 

function redirectTo($path = "/public/index.php"){
    header('Location: '. $path);
    die();
}

redirectTo("/public/index.php");