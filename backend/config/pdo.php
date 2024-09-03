<?php
    try {
        $host = 'localhost';
        $dbname = 'test_bdd';
        $username = 'root';
        $password = '';

        // Connexion à la base de données
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo "<p class='alert alert-danger'>Erreur : " . htmlspecialchars($e->getMessage()) . "</p>";
    }
?>