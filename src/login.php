<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="./styles/pages/all_main.css" />
    <link rel='stylesheet' href="./styles/base/base.css" />
    <link rel='stylesheet' href="./styles/layout/header.css" />
    <link rel='stylesheet' href="./styles/layout/footer.css" />
    <link rel='stylesheet' href="./styles/layout/container.css" />
    <script def src="https://kit.fontawesome.com/9f6d671c04.js" crossorigin="anonymous"></script>
    <title>Zero Co. - Connexion</title>
</head>

<body>
    <div class="container">
        <?php require_once('./component/header.php'); ?>
        <main class="main-login">
            <div class="title">
                <h2>Connexion</h2>
            </div>
            <form action="../back/loginPost.php" method="POST" class="form-group">
                <!-- <label for="email">Adresse email </label> -->
                <input type="email" name="email" required class="for-form" placeholder="Adresse email" />
                <!-- <label for="password">Mot de passe </label> -->
                <input type="password" name="password" required class="for-form" placeholder="Mot de passe" />
                <!-- BUTTON -->
                <div class="submit">
                    <input type="submit" value="Se connecter" class="btn" />
                </div>
            </form>
        </main>
        <?php require_once('./component/footer.php'); ?>
    </div>
</body>

</html>