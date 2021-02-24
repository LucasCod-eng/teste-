<?php

$numero = $_POST['numero'];   
$divisores = array();
$soma = 0;

for ($i=1; $i < $numero; $i++) {
  if($numero % $i == 0){
    $soma += $i;
    array_push($divisores, $i);
  }

}

echo "Numero: $numero, Soma dos divisores: $soma <br>";

if($soma == $numero)
  echo "O número é divisivel";
else
  echo "O número não é divisivel.\nDivisores: " . implode(", ", $divisores);
  ?>
