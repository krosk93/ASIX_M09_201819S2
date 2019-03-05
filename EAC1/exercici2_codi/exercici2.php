<?php
setcookie($_POST['username'], $_POST['password'], time() + 2*3600, '/');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercici 2</title>
  </head>
  <body>
    <h1>Dades guardades correctament.</h1>
    <a href="exercici2.html">Tornar</a>
  </body>
</html>
