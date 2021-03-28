<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <link rel="stylesheet" href="css/index.css">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link rel="stylesheet" href="asset/fontawesome-pro-5.15.1-web/css/all.min.css">
          <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
               <?php include "gregoire/navbar/top.php"; ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gneve.eu shareyour video online</title>
</head>
<body>
<?php
  include "snips/navbar/navbar.php";
  ?>

<div class="welcome-text">
    <li>Share your art and get your share.</li>
    <li>Make quality content, not quantity.</li>
</div>

<div class="container">
   <div class="player-iframe">
    <div style="position: relative; padding-top: 56.69291338582677%;"><iframe src="https://iframe.mediadelivery.net/embed/1252/a976806b-e8c6-4895-bca1-17c05150d823?autoplay=true" loading="lazy" style="border: none; position: absolute; top: 0; height: 100%; width: 100%;" allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;" allowfullscreen="true"></iframe></div>
</div>
    <button class="subscribe-button" style="border : none;">SUBSCRIBE</button>
   <div class="container-bg-present">
        <div class="icon">
            <i class="far fa-image-polaroid"></i>
            <h2>High video quality</h2>
        </div>
        <div class="icon">
            <i class="fad fa-head-side-headphones"></i>
            <h2>No audio compression</h2>
        </div>
        <div class="icon">
            <i class="fad fa-tv"></i>
            <h2>View on your TV ( compatible chromecast )</h2>
        </div>
        <div class="icon">
            <i class="fad fa-play"></i>
            <h2>Fast loading</h2>
        </div>
       </div>
   </div>
</div>
</body>
</html>