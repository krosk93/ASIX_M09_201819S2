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

session_start();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Exercici 3</title>
  </head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <h1>Dades guardades</h1>
        <div class="form-group">
          <label for="marca">Marca:</label>
          <input type="text" id="marca" class="form-control" name="marca" value="<?=$_SESSION['marca'] ?? ''?>" disabled />
        </div>
        <div class="form-group">
          <label for="model">Model:</label>
          <input type="text" id="model" class="form-control" name="model" value="<?=$_SESSION['model'] ?? ''?>" disabled />
        </div>
        <div class="form-group">
          <label for="any">Any:</label>
          <input type="number" id="any" class="form-control" name="any" value="<?=$_SESSION['any'] ?? ''?>" min="1900" max="2020" disabled />
        </div>
        <div class="form-group">
          <label for="km">KM:</label>
          <input type="number" id="km" class="form-control" name="km" value="<?=$_SESSION['km'] ?? ''?>" min="0" max="99999999" disabled />
        </div>
        <div class="form-group">
          <label for="matricula">Matricula:</label>
          <input type="text" id="matricula" class="form-control" name="matricula" value="<?=$_SESSION['matricula'] ?? ''?>" disabled />
        </div>
        <div class="form-group">
          <label for="dni">DNI:</label>
          <input type="text" id="dni" class="form-control" name="dni" value="<?=$_SESSION['dni'] ?? ''?>" disabled />
        </div>
        <div class="form-group">
          <label for="nom">Nom:</label>
          <input type="text" id="nom" class="form-control" name="nom" value="<?=$_SESSION['nom'] ?? ''?>" disabled />
        </div>
        <div class="form-group">
          <label for="email">Correu Electrònic:</label>
          <input type="email" id="email" class="form-control" name="email" value="<?=$_SESSION['email'] ?? ''?>" disabled />
        </div>
        <div class="form-group">
          <label for="telefon">Telèfon:</label>
          <input type="tel" id="telefon" class="form-control" name="telefon" value="<?=$_SESSION['telefon'] ?? ''?>" disabled />
        </div>
        <a href="exercici3_1.html" class="btn btn-outline-success">Anar a introducció de dades</a>
        <a href="pagina3_3.php" class="btn btn-outline-danger">Eliminar dades</a>
      </div>
    </div>
  </div>
</body>
</html>
