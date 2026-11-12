<?php
require_once "read-config.php";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Recepten</title>
</head>
<body>

<h1>Alle recepten</h1>

<?php foreach ($results as $result): ?>

    <article>
        <h2><?= htmlspecialchars($result['title']) ?></h2>

<!--        <p>-->
<!--            <strong>ID:</strong>-->
<!--            --><?php //= htmlspecialchars($result['id']) ?>
<!--        </p>-->

        <?php if (!empty($result['image'])): ?>
            <img
                    src="<?= htmlspecialchars($result['image']) ?>"
                    alt="<?= htmlspecialchars($result['title']) ?>"
                    width="300"
            >
        <?php endif; ?>

        <p>
            <strong>Auteur:</strong>
            <?= htmlspecialchars($result['author']) ?>
        </p>

        <p>
            <strong>Recept:</strong><br>
            <?= nl2br(htmlspecialchars($result['recept'])) ?>
        </p>


        <hr>
    </article>

<?php endforeach; ?>

</body>
</html>