<?php

require_once "config.php";

$id = $_GET["id"] ?? null;

if (!$id) {
    die("Geen ID opgegeven.");
}

$stmt = $pdo->prepare("DELETE FROM recepten WHERE id = ?");
$stmt->execute([$id]);

header("Location: index.php");
exit;