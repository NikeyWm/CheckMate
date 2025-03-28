<?php

try {
    $dsn = "mysql:host=localhost;dbname=checkmate;charset=utf8";

    $pdo = new PDO($dsn, 'root', '');
} catch (PDOException $e) {
    die("Fehler beim Verbindungsaufbau mit der Datenbank");
}

?>