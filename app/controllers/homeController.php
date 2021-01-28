<?php

require 'app/persistences/blogPostData.php';
$posts = lastBlogPosts($pdo);
include 'ressources/views/home.tpl.php';

