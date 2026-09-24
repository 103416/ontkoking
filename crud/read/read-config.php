<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $pdo = new PDO("sqlite:../../database.sqlite");
}catch (PDOException $e){echo "Error: ".$e->getMessage();}

$id = $_POST["id"];
$title = $_POST["title"];
$author = $_POST["author"];
$recept = $_POST["recept"];

$stmt = $pdo->prepare("SELECT * FROM recepten");
$stmt->execute([
    ':ID' => $id,
    ':title' => $title,
    ':author' => $author,
    ':recept' => $recept
]);

$results = $stmt->fetchAll();