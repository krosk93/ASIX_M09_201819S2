<?php
/*
Avís
El codi fa ús de certes funcionalitats del llenguatge PHP introduides en la seva versió 7.0,
donat que la branca 5.x mencionada als materials va arribar, segons es pot consultar a la pàgina
http://php.net/eol.php, al fi de la seva vida el 31 de desembre de 2018, i ja en una versió
posterior (5.6) a la esmentada en el material (la 5.0), que va arribar al fi de la seva vida
el 5 de setembre de 2005.
Estem a l'any 2019. Fa un parell de mesos, PHP 7.0 va arribar al final de la seva vida útil,
i els apunts no han estat actualitzats ni tan sols a aquesta versió.
La versió 7.1 també ha arribat al final del seu cicle d'actualitzacions, rebent només
actualitzacions de seguretat.
Les versions que compten amb suport actualment són la 7.2 i la 7.3. Per tant, els meus exercicis
seran comprovats que funcionen amb aquestes versions.
*/

if(!isset($_POST['comprova']))
{
  header('Location: exercici2_cons.html');
  exit();
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Exercici 2 Consulta</title>
  </head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <h1>Comprovació de dades introduides</h1>
        <?php if($_POST['usuari'] == '' || !isset($_COOKIE[$_POST['usuari']])) { ?>
        <div class="alert alert-danger" role="alert">
          Error, usuari inexistent.
        </div>
        <?php } ?>
        <div class="form-group">
          <label for="usuari">Nom d'usuari:</label>
          <input type="text" id="usuari" class="form-control" name="usuari" value="<?=$_POST['usuari'];?>" disabled />
        </div>
        <?php if(isset($_COOKIE[$_POST['usuari']])) { ?>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="text" id="password" class="form-control" name="password" value="<?=$_COOKIE[$_POST['usuari']];?>" disabled />
        </div>
        <?php } ?>
        <a href="exercici2_cons.html" class="btn btn-primary">Tornar</a>
        <a href="exercici2.html" class="btn btn-outline-success">Anar a inici de sessió</a>
      </div>
    </div>
  </div>
</body>
</html>
