<?php
declare(strict_types=1);
echo "aaaaaaaaaaaaaa";
$metaTitle = "CV de Mati Ross";
$metaDescription = "Bienvenue sur mon CV en ligne";
include 'header.php';
if (isset($_GET['action'])) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if ($action == 'hobby') {
        require(__DIR__ . '/pages/hobby.php');
    } else if ($action == 'contact') {
        require(__DIR__ . '/pages/contact.php');
    } else {
        require(__DIR__ . '/pages/404.php');
    }

} else {
    require 'pages/cv.php';
}

include 'footer.php';