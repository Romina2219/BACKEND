<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>Trabajo Práctico N°2</h1>
<br>
<br>
<h3>1- Crear una variable n y validar que sea un número positivo</h3>
<br>

<?php

$numero = 8;

if ($numero +1/-1){
  echo "$numero es un número positivo";
}

 ?>
<br><br>
<h3>2- Crear una variable n y validar que sea un número mayor a 1 y menor a 10</h3>
<br>

<?php

$numero2 = 7;

if (($numero2 > 1) && ($numero2 < 10)){
echo "$numero2 es mayor a 1 y menor a 10";
}

 ?>
 <br><br>
 <h3>3- Crear una variable n y validar que sea un número mayor a 10 o menor a 2</h3>

 <?php
$numero3 = 11;

if (($numero3 > 10) || ($numero3 < 2)) {
  echo "$numero3 es mayor a 10 o menor a 2";
}
  ?>
<br><br>
<h3>4- Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”</h3>

<?php
$numero_1 = 14;
$numero_2 = 5;

if ($numero_1 > $numero_2) {
echo "suma:".($numero_1 + $numero_2), "resta:".($numero_1 - $numero_2);
} elseif ($numero_1 < $numero_2) {
echo "multiplicación:".($numero_1 * $numero_2), "división:".($numero_1 / $numero_2), "resto:".($numero_1 % $numero_2);
} else {
  echo "Los números ingresados son iguales";
}
 ?>
<br>


  </body>
</html>
