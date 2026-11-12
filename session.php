<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    header("Location: inlog.php");
    exit();
}
$username = $_SESSION['username'];
?>
