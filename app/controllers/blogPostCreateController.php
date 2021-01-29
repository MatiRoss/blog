<?php

require 'app/persistences/blogPostData.php';
$title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
$text = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
$datestart = filter_input(INPUT_POST, 'datestart', FILTER_SANITIZE_STRING);
$dateend = filter_input(INPUT_POST, 'dateend', FILTER_SANITIZE_STRING);
$idauthors = filter_input(INPUT_POST, 'authorid', FILTER_SANITIZE_NUMBER_INT);

if ($title != false) {
    $tab = array(
        'title' => $title,
        'content' => $text,
        'datestart' => $datestart,
        'dateend' => $dateend,
        'authorid' => $idauthors,
    );
    if (filter_has_var(INPUT_POST, 'submit')) {
        $createpost = blogPostCreate($pdo, $tab);
        echo "L'article a été créé avec succès";

    }
}
require 'ressources/views/blogPostCreate.tpl.php';