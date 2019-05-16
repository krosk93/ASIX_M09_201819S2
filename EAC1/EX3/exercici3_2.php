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
$filterEmpty = function(string $value): bool {
  return empty(trim($value));
};
$error = true;
$filteredArray = array_filter($_POST, $filterEmpty);
if(count($filteredArray) == 0) {
  $_SESSION['marca'] = $_POST['marca'];
  $_SESSION['model'] = $_POST['model'];
  $_SESSION['any'] = $_POST['any'];
  $_SESSION['km'] = $_POST['km'];
  $_SESSION['matricula'] = $_POST['matricula'];
  $_SESSION['dni'] = $_POST['dni'];
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['telefon'] = $_POST['telefon'];
  $error = false;
}

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Exercici 2</title>
  </head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <?php if($error) { ?>
          <h1>Dades no emmagatzemades. Algun camp era buit.</h1>
        <?php } else { ?>
          <h1>Dades emmagatzemades correctament.</h1>
        <?php } ?>
        <a href="exercici3_1.html" class="btn btn-primary">Tornar</a>
        <a href="exercici3_3.php" class="btn btn-outline-success">Anar a comprovació</a>
      </div>
    </div>
  </div>
</body>
</html>
