<?php

require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $title = $_POST["title"];
    $author = $_POST["author"];
    $recept = $_POST["recept"];

    $image = null;

    if (!empty($_FILES["image"]["name"])) {

        $uploadDir = "../images/";

        $fileName = basename($_FILES["image"]["name"]);
        $filePath = $uploadDir . $fileName;

        move_uploaded_file(
            $_FILES["image"]["tmp_name"],
            $filePath
        );

        $image = "../images/" . $fileName;
    }

    $stmt = $pdo->prepare("
        INSERT INTO recepten (title, author, recept, image)
        VALUES (:title, :author, :recept, :image)
    ");

    $stmt->execute([
        ":title" => $title,
        ":author" => $author,
        ":recept" => $recept,
        ":image" => $image
    ]);
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Toevoegen</title>
</head>

<body>
<h1>Nieuw recept</h1>
<form method="POST" enctype="multipart/form-data">
    <label>
        Titel:
        <input type="text" name="title" required>
    </label>
    <br><br>
    <label>
        Auteur:
        <input type="text" name="author" required>
    </label>
    <br><br>
    <label>
        Recept:
        <br>
        <textarea name="recept" rows="10" cols="50" required></textarea>
    </label>
    <br><br>
    <label>
        Afbeelding:
        <input type="file" name="image" accept="image/*">
    </label>
    <br><br>
    <button type="submit">
        Recept toevoegen
    </button>
</form>
<br>
<a href="index.php">Terug</a>

</body>
</html>