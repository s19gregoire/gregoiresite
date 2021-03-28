<?php
session_start();
require '../config/bdd.php';
ini_set("display_errors", 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regardez vos films</title>
    <meta name="description" content="regardez le meilleur du contenue en ligne, vodart ">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/player.css">
</head>
<body>
<?php
require '../snips/navbar/navbar.php';
?>
<div class="container-player">
    <div>
       <iframe src="https://iframe.mediadelivery.net/embed/1252/<?= $_GET['id'] ?>?autoplay=true" loading="lazy" style="border: none;" allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;" allowfullscreen="true"></iframe>
        <div class="info-bar">
            <h2>Views :</h2>
        </div>
    </div>
    <div>
        <?php
        $view = $bdd->prepare("SELECT * FROM video WHERE identifiant NOT IN (?)");
        $view->execute(array($_GET['id']));
        while($data = $view->fetch()) {
            ?>
            <div class="pict">
                <a href="player.php?id=<?= $data['identifiant'] ?>"><img src='https://vz-0ca559bd-780.b-cdn.net/<?= $data['profile_image'] ?>/thumbnail.jpg'></a>
            </div>



            <?php
        }
        ?>
    </div>
    </div>
</body>
</html>
