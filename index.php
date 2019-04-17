<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Faq</title>
    <?php include 'function.php'; ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- NAVBAR -->
    <nav>
      <div class="up-side">
        <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="">
        <span class="title">Privacy e Termini</span>
      </div>
      <div class="down-side">
        <div class="left-side">
          <ul>
            <li>Introduzione</li>
            <li>Norme sulla Privacy</li>
            <li>Termini di servizio</li>
            <li>Tecnologie</li>
            <li>Domande Frequenti</li>
          </ul>
        </div>
        <div class="right-side">
          <span>Account Google</span>
        </div>
      </div>
    </nav>
    <!-- /NAVBAR -->
    <div class="container">
      <?php
        getQA($faq);
       ?>
    </div>
  </body>
</html>
