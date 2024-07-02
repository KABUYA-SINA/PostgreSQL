<?php

try {

    $pdo = new PDO("pgsql:XXXXXXXXXX YOUR CONNECTION ID ");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (!isset(($_POST['email'])) || !isset(($_POST['password']))) {

        echo "Merci d'utiliser la page de connexion ou la page d'inscription.";
        return;
    } else {

        //Récupérer les données du formulaire de connexion

        $emailForm = $_POST['email'];
        $passwordForm = $_POST['password'];

        //Récupérer les utilisateurs

        $statement = $pdo->prepare('SELECT * FROM users WHERE email = :email');
        $statement->bindValue(':email', $emailForm);
        $statement->execute();

        //Est-ce que l’utilisateur (mail) existe ?

        if ($statement->execute()) {
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            if ($user === false) {
                echo "Utilisateur introuvable, êtes-vous sûr de votre mail ou mot de passe ?";
            } else {
                if (password_verify($passwordForm, $user['password'])) {
                    echo "Connexion réussie ! Bienvenue " . $user['surname'];
                } else {
                    echo 'Identifiants ou mot de passe non valides';
                }
            }
        }
    }
} catch (PDOException) {

    echo "Une erreur s'est produite lors de votre connexion. Veuillez réessayer ultérieurement.";
}
