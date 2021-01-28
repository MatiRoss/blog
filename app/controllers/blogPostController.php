<?php

require 'app/persistences/blogPostData.php';
$idposts=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$post = blogPostById($pdo, $idposts);
$comment=commentsByBlogPost($pdo, $idposts);
require './ressources/views/blogPost.tpl.php';