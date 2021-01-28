<?php

require 'app/persistences/blogPostData.php';
$title = filter_input(INPUT_GET, 'title', FILTER_SANITIZE_STRING);
$text = filter_input(INPUT_GET, 'text', FILTER_SANITIZE_STRING);
$date_start = filter_input(INPUT_GET, 'datestart', FILTER_SANITIZE_STRING);
$date_end = filter_input(INPUT_GET, 'dateend', FILTER_SANITIZE_STRING);
$importance = filter_input(INPUT_GET, 'importance', FILTER_SANITIZE_STRING);
$idauthor = filter_input(INPUT_GET, 'idauthor', FILTER_SANITIZE_STRING);
$createpost = blogPostCreate($pdo);
include 'ressources/views/blogPostCreate.tpl.php';