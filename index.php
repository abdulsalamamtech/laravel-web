<?php 

function redirect($path = "/public/index.php"){
    header('Location: '. $path);
    die();
}

redirect("/public/index.php");