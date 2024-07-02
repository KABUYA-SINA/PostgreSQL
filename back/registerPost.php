<?php

try {

    $pdo = new PDO("pgsql:XXXXXXXXXX YOUR CONNECTION ID ");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!isset(($_POST['pseudo'])) || !isset(($_POST['name']))   || !isset(($_POST['surname']))  || !isset(($_POST['email'])) || !isset(($_POST['password']))) {

        echo "Merci de vous tourner vers la page de connexion ou la page d'inscription. S'il vous plaît";
        return;
    } else {

        //Récupérer les données du formulaire d’inscription 

        $pseudoForm = $_POST['pseudo'];
        $nameForm = $_POST['name'];
        $surnameForm = $_POST['surname'];
        $emailForm = $_POST['email'];
        $passwordForm = $_POST['password'];

        //preparation requête
        $statement = $pdo->prepare(
            'INSERT INTO users (pseudo, name, surname, email, password)
        VALUES(:pseudo, :name, :surname, :email, :password)'
        );

        $statement->bindValue(':pseudo', $pseudoForm);
        $statement->bindValue(':name', $nameForm);
        $statement->bindValue(':surname', $surnameForm);
        $statement->bindValue(':email', $emailForm);
        // Hash du mot de passe en utilisant BCRYPT
        $statement->bindValue(':password', password_hash($passwordForm, PASSWORD_BCRYPT));

        if ($statement->execute()) {
            echo "Votre inscription a été validée avec succès";
        } else {
            echo "Une erreur s'est produite lors de votre inscription.";
        }
    }
} catch (PDOException) {
    echo "Il y a eu une erreur lors de votre connexion. Merci de réessayer ultérieurement";
}
