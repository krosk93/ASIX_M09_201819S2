<?php
if(!isset($_POST['enviar']) || !isset($_POST['username']) || !isset($_POST['password']))
  header('Location: index.html');

session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iniciar sessió</title>
  </head>
  <body>
    <p>Dades emmagatzemades correctament.</p>
    <a href="consulta.php">Anar a consultar-les</a>
  </body>
</html>
