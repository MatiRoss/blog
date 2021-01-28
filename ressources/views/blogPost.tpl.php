<?php if (!empty($post)): ?>
    <?php foreach ($post as $row): ?>
        <h2><?= $row['title'] ?></h2>
        <p>par</p>
        <h3><?= $row['name'] ?></h3>
    <?php endforeach; ?>
<?php else: ?>
    <p> "Il n'y a aucun article qui correspond à votre recherche"</p>
<?php endif; ?>

<?php if (empty($comment)): ?>
    <p>Aucun commentaire</p>
<?php else: ?>
    <?php foreach ($comment as $row): ?>
        <p><?= $row['text'] ?></p>
        <p>par</p>
        <h3><?= $row['name'] ?></h3>
    <?php endforeach; ?>
<?php endif; ?>
