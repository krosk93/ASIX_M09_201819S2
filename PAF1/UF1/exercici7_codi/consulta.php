<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar sessió</title>
  </head>
  <body>
    <p>Dades emmagatzemades:</p>
    <p>Usuari: <?=isset($_SESSION['username']) ? $_SESSION['username']: '';?></p>
    <p>Contrasenya: <?=isset($_SESSION['password'])?$_SESSION['password']:'';?></p>
    <a href="index.html">Anar a inici</a>
  </body>
</html>
