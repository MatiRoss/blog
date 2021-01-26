<?php
error_reporting(E_ALL);
ini_set('display_errors',true);
ini_set('html_errors',false);
ini_set('display_startup_errors',true);
ini_set('log_errors',false);

//Appel de la BDD
require 'config/database.php';

$map = [
    'home' => 'homeController.php',
    'post' => 'post.php',
    '404' => '404.php',
];
if (filter_has_var(INPUT_GET, 'action')) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if (!isset($map[$action])) {
        $action = '404';
    }
    $fichier = $map[$action];
} else {
    $action = 'home';
}
include 'app/controllers/' . $fichier;