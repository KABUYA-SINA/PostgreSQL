<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="./styles/layout/container.css" />
    <link rel='stylesheet' href="./styles/base/base.css" />
    <link rel='stylesheet' href="./styles/layout/main.css" />
    <link rel='stylesheet' href="./styles/layout/header.css" />
    <link rel='stylesheet' href="./styles/layout/footer.css" />
    <link rel='stylesheet' href="./styles/pages/all_main.css" />
    <script def src="https://kit.fontawesome.com/9f6d671c04.js" crossorigin="anonymous"></script>
    <title>Zero Co.</title>
</head>

<body>
    <div class="container">
        <?php require_once "./component/header.php"; ?>
        <main class="main">

            <div class="main__content">
                <span class="main__title">Zero Co.</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia earum placeat qui eveniet alias,
                    iure ipsam excepturi commodi numquam, temporibus asperiores minus! Dolore, quaerat! Dignissimos nostrum dolore minus debitis corporis.
                </p>

                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. Quisquam
                </p>
                <div>
                    <?php require_once("./component/main.php"); ?>

                </div>
            </div>

        </main>
        <?php require_once "./component/footer.php"; ?>
    </div>
</body>

</html>