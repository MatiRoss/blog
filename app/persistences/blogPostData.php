<?php

// Fonction qui prépare une requête SQL(Afficher les 10 derniers articles du blog), l'execute puis affiche le resultat
function lastBlogPosts($pdo)
{
    $statement = $pdo->prepare("SELECT title,authors.name
FROM posts INNER JOIN authors ON authors_idauthors=idauthors
ORDER BY date_start DESC
LIMIT 10");
    $statement->execute();
    $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}

//Fonction qui retourne un article et son auteur
function blogPostById($pdo, $idposts)
{
    $statement = $pdo->prepare("SELECT title, authors.name FROM posts INNER JOIN authors ON authors_idauthors=idauthors WHERE idposts=$idposts");
    $statement->execute();
    $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}

//Fonction qui retourne les commentaires de l'article avec l'auteur
function commentsByBlogPost($pdo, $idposts)
{
    $statement = $pdo->query("SELECT text, authors.name FROM comments INNER JOIN authors ON authors_idauthors=idauthors WHERE posts_idposts=$idposts");
    $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
}

//Fonction qui crée un article
function blogPostCreate($pdo)
{
    $statement = $pdo->prepare("INSERT INTO `posts` (title, text,date_start,date_end,importance,authors_idauthors) VALUES (:titre, :texte, :datedepart, :datefin, :degree, :idauthors");
    $statement->bindParam(':titre', $title);
    $statement->bindParam(':texte', $text);
    $statement->bindParam(':datedepart', $datestart);
    $statement->bindParam(':datefin', $dateend);
    $statement->bindParam(':degree', $importance);
    $statement->bindParam(':idauthors', $idauthors);
    $statement->execute();
    return "Votre article a été ajouté avec succès";
}
