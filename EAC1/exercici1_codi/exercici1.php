<?php
if(preg_match('/^[0-9]{8}$/', $_POST['DNI'])) {
  $chars = array('T', 'R', 'W', 'A', 'G',
                 'M', 'Y', 'F', 'P', 'D',
                 'X', 'B', 'N', 'J', 'Z',
                 'S', 'Q', 'V', 'H', 'L',
                 'C', 'K', 'E');
  $index = intVal($_POST['DNI']) % 23;
  echo 'El DNI amb lletra és '.$_POST['DNI'].$chars[$index];
}
else
{
  echo 'El DNI introduit no és correcte';
}
?>
