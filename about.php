<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>О нас</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style/bootstrap.min.css"/>
    <link rel="stylesheet" href="style/navigation.css">
  </head>
  <body>
    <?php 
    include_once 'mainHeader.php';
    drawHeader("aboutH");
    ?>
    <script>changePage("aboutH");</script>
    <div>
      <?php
      include_once "DBManager.php";
      foreach(read("resources/mainPage.txt") as $parargraph) echo "<h5 style='margin:20px;'>$parargraph</h5>";
      ?>
    </div>
  </body>
</html>
