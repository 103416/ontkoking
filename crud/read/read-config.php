<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    $pdo = new PDO("sqlite:database.sqlite");
}catch (PDOException $e){
    echo "Error: ".$e->getMessage();
}
//$id = $_GET["id"];
$stmt = $pdo->prepare("SELECT * FROM recepten");
$stmt->execute();

$results = $stmt->fetchAll();
var_dump($results);


foreach ($results as $result) {

}