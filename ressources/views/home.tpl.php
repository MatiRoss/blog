<?php $idposts=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);?>
<?php if (empty($posts)): ?>
    <p> "Il n'y a aucun article qui correspond à votre recherche"</p>
<?php else: ?>
    <?php foreach ($posts as $row): ?>
        <a href="/index.php?action=blogpost&id=<?= $row['idposts']?>"<h2><?=$row['title']?></h2></a>
        <p>par</p>
        <h3><?= $row['name'] ?></h3>
    <?php endforeach; ?>
<?php endif; ?>
