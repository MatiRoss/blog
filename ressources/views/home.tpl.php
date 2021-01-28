<?php if (empty($posts)): ?>
    <p> "Il n'y a aucun article qui correspond à votre recherche"</p>
<?php else: ?>
    <?php foreach ($posts as $row): ?>
        <h2><?= $row['title'] ?></h2>
        <p>par</p>
        <h3><?= $row['name'] ?></h3>
    <?php endforeach; ?>
<?php endif; ?>
