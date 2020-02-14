<?php
include("dagdelen.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">    <meta charset="utf-8">
    <title>Goede morgen/middag/avond/nacht</title>

  </head>
  <body>

    <div class="center">
      <h1>
      <?php 
      echo $text;
      ?>

      <?php 
      echo $timelive;
      ?><br>

      <?php
      echo $month;
      ?>
      <h1>
    </div>



  <style>
    *{
      margin: 0;
      padding: 0;
    }

    h1{
      font-family: 'Kaushan Script', cursive;
      text-align: center;
      position: absolute;
      top: 27vh;
      left: 35vw;
      color: white;
      font-size: 5rem;
    }

    .center{
      background: url("images/<?php echo $img;?>");
      width: 100vw;
      height: 100vh;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
   
  </style>
  </body>
</html>