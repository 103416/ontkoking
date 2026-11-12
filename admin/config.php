<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $pdo = new PDO("sqlite:../database.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}