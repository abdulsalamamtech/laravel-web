<?php 

function returnTo($path = 'public'){
    return header('location:/'. $path);
}

returnTo('public');