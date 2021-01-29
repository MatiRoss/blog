<!DOCTYPE html>
<html>
<head>
    <title>Publier un article</title>
    <meta charset="utf-8">
</head>
<body>
<form method="POST" action="/index.php?action=createpost">
    <input type="text" name="title" placeholder="Titre" /><br />
    <textarea name="content" placeholder="Contenu de l'article"></textarea><br />
    <p>Date de publication</p>
    <input type="date" name="datestart"><br>
    <p>Date de fin de publication</p>
    <input type="date" name="dateend"><br>
    <input type="number" name="authorid" placeholder="Votre id"><br>
    <input type="submit" value="Publier l'article" name="submit"/>
</form>
<br />

</body>
</html>