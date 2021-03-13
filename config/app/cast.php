<?php
if(isset($_GET['playgroundurl'])) {
   ?>
   body {
  --playback-logo-image: url("<?= $_GET['playgroundurl'] ?>");
}
cast-media-player {
  --theme-hue: 100;
  --progress-color: rgb(0, 255, 0);
  --splash-image: url("<?= $_GET['playgroundurl'] ?>");
  --splash-size: cover;
}
   <?php
}
?>