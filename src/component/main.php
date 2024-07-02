<?php

try {

    $pdo = new PDO('pgsql:XXXXXXXXXX YOUR CONNECTION ID ');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupérer les utilisateurs 
    $query = "SELECT * FROM users";
    $stmt = $pdo->query($query);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //Afficher les utilisateurs
    foreach ($users as $user) {
        echo "<br>";
        echo "Nom : " . $user['name'] . "<br>";
        echo "Prenom : " . $user['surname'] . "<br>";
        echo "<br>";
    }
} catch (PDOException) {
    echo "Utilisez la page d'acceuil";
}
