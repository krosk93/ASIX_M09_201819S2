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

if (!isset($_POST['calcular'])) {
  header('Location: exercici1.html');
  exit();
}

function calcularFisica(string $numero): string
{
  $chars = 'TRWAGMYFPDXBNJZSQVHLCKE';
  $numero = str_replace('Z', '2', str_replace('Y', '1', str_replace('X', '0', $numero)));
  return substr($chars, ((int)$numero % 23), 1);
}

function calcularJuridica(string $numero): string
{
  $suma = 0;
  for($i = 2; $i < strlen($numero); $i+=2)
    $suma += (int)substr($numero, $i, 1);
  for($i = 1; $i < strlen($numero); $i+=2)
  {
    $tmpString = (string)((int)substr($numero, $i, 1)*2);
    for($j = 0; $j < strlen($tmpString); $j++)
      $suma += (int)substr($tmpString, $j, 1);
  }
  while(($suma / 10) > 10)
    $suma = $suma / 10;
  $suma = $suma % 10;
  if(!preg_match('/^[PQRSW]/i', $numero) && substr($numero, 1, 2) != '00') return (10-$suma) % 10;
  return substr('JIHGFEDCBA', $suma, 1);
}

$control = '';
if(preg_match('/^[A-HJNP-SU-W][0-9]{7}$/i', $_POST['NIF'])) $control = calcularJuridica($_POST['NIF']);
elseif(preg_match('/^[0-9X-Z][0-9]{7}$/', $_POST['NIF'])) $control = calcularFisica($_POST['NIF']);
else $error = 'NIF introduit no vàlid.';
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Exercici 1</title>
  </head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <h1>CÀLCUL DE LA LLETRA D'UN NIF</h1>
        <h2>Introdueix el número NIF a consultar sense lletra, i prem calcular...</h2>
        <form action="exercici1.php" method="post">
          <div class="form-group">
            <label for="NIF">NIF sense digit de control</label>
            <input type="text" id="NIF" class="form-control <?=isset($error)?'is-invalid':''?>" name="NIF" value="<?=$_POST['NIF'];?>" />
            <?php if(isset($error)) { ?>
              <div class="invalid-feedback">
                <?=$error;?>
              </div>
            <?php } ?>
          </div>
          <button class="btn btn-primary" type="submit" name="calcular">Calcular</button>
          <?php if(!isset($error)) { ?>
            <h3>NIF calculat: <?=$_POST['NIF'].$control?></h3>
          <?php } ?>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
