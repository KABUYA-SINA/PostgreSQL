<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="./styles/base/base.css" />
    <link rel='stylesheet' href="./styles/pages/all_main.css" />
    <link rel='stylesheet' href="./styles/layout/header.css" />
    <link rel='stylesheet' href="./styles/layout/footer.css" />
    <link rel='stylesheet' href="./styles/layout/container.css" />
    <script def src="https://kit.fontawesome.com/9f6d671c04.js" crossorigin="anonymous"></script>
    <title>Zero Co. - Inscription</title>
</head>

<body>
    <div class="container">
        <?php require_once('./component/header.php'); ?>
        <main class="main-signin">
            <div class="title">
                <h2>Inscription</h2>
            </div>
            <form action="../back/registerPost.php" method="POST" class="form-group">
                <!-- <label for="pseudo">Pseudo </label> -->
                <input type="text" name="pseudo" required class="for-form" placeholder="Pseudo">

                <!-- <label for="name">Nom </label> -->
                <input type="text" name="name" required class="for-form" placeholder="Nom">

                <!-- <label for="surname">Surname </label> -->
                <input type="text" name="surname" required class="for-form" placeholder="Surname">

                <!-- <label for="email">Adresse email </label> -->
                <input type="email" name="email" required class="for-form" placeholder="Adresse email">

                <!-- <label for="password">Mot de passe </label> -->
                <input type="password" name="password" required class="for-form" placeholder="Mot de passe">

                <input type="submit" value="S’inscrire" class="btn">
            </form>
        </main>
        <?php require_once('./component/footer.php'); ?>
    </div>
</body>

</html>