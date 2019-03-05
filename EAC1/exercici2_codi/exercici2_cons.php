<?php
$message = '';
if(isset($_POST['username']) && isset($_COOKIE[$_POST['username']])) {
  $message = 'Usuari '.$_POST['username'].'. Contrasenya: '.$_COOKIE[$_POST['username']];
} else {
  $message = 'Error: Usuari no trobat.';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercici 2 Consulta</title>
  </head>
  <body>
    <p><?=$message;?></p>
    <a href="exercici2_cons.html">Tornar</a>
  </body>
</html>
