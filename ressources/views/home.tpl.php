<?php
$posts = lastBlogPosts($pdo);
if (empty($posts)) {
    echo "Aucun article à afficher";
} else {
    foreach ($posts as $row) {
        echo "<li>" . $row['title'] . " - " . $row['name'] . "</li>";
    }
}