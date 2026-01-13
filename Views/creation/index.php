<?php

declare(strict_types=1);
/** @var App\Entities\Creation[] $creations */
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Créations</title>
</head>

<body>
    <h1>Liste des créations</h1>
    <ul>
        <?php foreach ($creations as $c): ?>
            <li>
                <a href="?controller=creation&action=show&id=<?= htmlspecialchars((string)$c->getIdCreation(), ENT_QUOTES, 'UTF-8') ?>">
                    <?= htmlspecialchars($c->getTitle(), ENT_QUOTES, 'UTF-8') ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>