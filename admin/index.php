<?php

require_once "config.php";

$stmt = $pdo->query("
    SELECT id, title, author, recept, image
    FROM recepten
    ORDER BY id DESC
");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Admin - Recepten</title>
</head>
<link rel="stylesheet" href="../style.css">

<body>
<a href="../index.php">Terug naar home</a>
<h1>Admin panel</h1>
<a href="create.php">Recept toevoegen</a>
<hr>
<?php foreach ($results as $result): ?>
    <article>
        <h2><?= htmlspecialchars($result['title']) ?></h2>

        <p><strong>ID: </strong><?= htmlspecialchars($result['id']) ?></p>
        <p><strong>Auteur: </strong><?= htmlspecialchars($result['author']) ?></p>

        <?php if (!empty($result['image'])): ?>
            <img src="../<?= htmlspecialchars($result['image']) ?>" width="200" alt="">
        <?php endif; ?>

        <p><?= nl2br(htmlspecialchars($result['recept'])) ?></p>

        <a href="update.php?id=<?= $result['id'] ?>">Bewerken</a>
        <br>
        <a href="delete.php?id=<?= $result['id'] ?>" onclick="return confirm('Weet je zeker dat je dit recept wilt verwijderen?')">Verwijderen</a>
        <hr>
    </article>
<?php endforeach; ?>

</body>
</html>