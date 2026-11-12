<?php

require_once "config.php";

$id = $_GET["id"] ?? null;

if (!$id) {
    die("Geen ID opgegeven.");
}

$stmt = $pdo->prepare("SELECT * FROM recepten WHERE id = ?");
$stmt->execute([$id]);

$recipe = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$recipe) {
    die("Recept niet gevonden.");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = $_POST["title"];
    $author = $_POST["author"];
    $recept = $_POST["recept"];

    $stmt = $pdo->prepare("
        UPDATE recepten
        SET title = ?, author = ?, recept = ?
        WHERE id = ?
    ");

    $stmt->execute([
        $title,
        $author,
        $recept,
        $id
    ]);

    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Recept aanpassen</title>
</head>

<body>
<h1>Recept aanpassen</h1>

<form method="POST">
    <label>
        Titel:
        <input type="text" name="title" value="<?= htmlspecialchars($recipe["title"]) ?>" required>
    </label>
    <br><br>
    <label>
        Auteur:
        <input type="text" name="author" value="<?= htmlspecialchars($recipe["author"]) ?>" required>
    </label>
    <br><br>
    <label>
        Recept:
        <br>
        <textarea name="recept" rows="10" cols="50" required><?= htmlspecialchars($recipe["recept"]) ?></textarea>
    </label>
    <br><br>
    <button type="submit">Opslaan</button>
</form>
<br>
<a href="index.php">Terug</a>

</body>
</html>