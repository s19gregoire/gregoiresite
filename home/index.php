<!DOCTYPE html>
<?php
ini_set('display_errors', 1);
include "../config/bdd.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/fontawesome-pro-5.15.1-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Roboto;" rel="stylesheet">
<link rel="stylesheet" href="../css/index.css">
<link rel="stylesheet" href="../css/homepage.css">
    <title>View video online</title>
</head>
<body>
    <div class="menu">

        <ul>
        <h1 class="name-logo">Fullstreamly</h1>
        <li><a href="about.php">A propos</a></li>
        <li><a href="abonnement.php">abonnement</a></li>
        <li><a href="api/">Documentation pour développeurs</a></li>
        </ul>
    </div>
    <div class="container">
        <h1>Titre a la une</h1>
        <div class="imagedata">
            <?php
            $view = $bdd->prepare("SELECT * FROM video");
            $view->execute();
            while($data = $view->fetch()) {
                ?>
                <div class="pict">
                <a href="player.php?id=<?= $data['identifiant'] ?>"><img src='https://vz-0ca559bd-780.b-cdn.net/<?= $data['profile_image'] ?>/thumbnail.jpg'></a>
                    <p class="showed">Test</p>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</body>
</html>