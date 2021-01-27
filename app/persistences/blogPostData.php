<?php

function lastBlogPosts($pdo)
{
    $statement=$pdo->prepare("SELECT title,authors.name
FROM posts INNER JOIN authors ON authors_idauthors=idauthors
ORDER BY date_start DESC
LIMIT 10");
    $statement->execute();
    $result=$statement->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}