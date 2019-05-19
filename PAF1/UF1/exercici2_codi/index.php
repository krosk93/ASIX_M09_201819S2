<?php
if(!isset($_POST['enviar']) || !isset($_POST['pagament']))
  header('Location: index.html');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagament</title>
  </head>
  <body>
    <p>Opció de pagament escollida: <?=$_POST['pagament'];?></p>
  </body>
</html>
