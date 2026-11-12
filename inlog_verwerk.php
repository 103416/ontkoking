<?php
session_start();
require 'config.php';

$resultaat = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (strlen($username) > 0 && strlen($password) > 0) {
        $wwhash = sha1($password);

        try {
            $query = "SELECT * FROM users WHERE username = :nm AND password = :pw";
            $stmt = $conn->prepare($query);
            $stmt->execute(['nm' => $username, 'pw' => $wwhash]);
            $resultaten = $stmt->fetchAll();

            if (count($resultaten) > 0) {
                $_SESSION['username'] = $username;
                $_SESSION['level'] = $resultaten[0]['level'];
                
                header("Location: index.php");
                exit();
            } else {
                $resultaat = "Naam of wachtwoord onjuist.";
            }
        } catch (PDOException $e) {
            $resultaat = "Databasefout: " . $e->getMessage();
        }
    } else {
        $resultaat = "Vul alle velden in.";
    }
} else {
    header("Location: inlog.php");
    exit();
}

include 'views/inlog_verwerk_view.php';
?>
