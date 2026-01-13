<?php

declare(strict_types=1);
/** @var App\Entities\Creation $creation */
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($creation->getTitle(), ENT_QUOTES, 'UTF-8') ?></title>
</head>

<body>
    <p><a href="?controller=creation&action=index">← Retour</a></p>
    <h1><?= htmlspecialchars($creation->getTitle(), ENT_QUOTES, 'UTF-8') ?></h1>
    <p>
        <strong>Date :</strong>
        <?= htmlspecialchars($creation->getCreatedAt()->format('Y-m-d H:i:s'), ENT_QUOTES, 'UTF-8') ?>
    </p>
    <p><?= nl2br(htmlspecialchars($creation->getDescription(), ENT_QUOTES, 'UTF-8')) ?></p>
    <p><em>Image :</em> <?= htmlspecialchars($creation->getPicture(), ENT_QUOTES, 'UTF-8') ?></p>
</body>

</html>