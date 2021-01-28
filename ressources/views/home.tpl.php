
<?php

if (empty($posts)) {
    echo "Il n'y a aucun article qui correspond à votre recherche";
} else {
    foreach ($posts as $row) {
        echo "<li>" . $row['title'] . " - par " . $row['name'] . "</li>";
    }
}