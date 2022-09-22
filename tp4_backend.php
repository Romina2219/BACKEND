<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Trabajo Práctico N°4</h1>
    <br>
    <h2>1. Mostrar los números del 1 al 100</h2>
    <br>
<?php
$i=1;
do {
print "<p> $i </p>\n";
$i++;
} while ($i <101);
 ?>
<br>
<h2>2. Mostrar los números del 100 al 1</h2>
<br>
<?php
$i=100;
do {
print "<p> $i </p>\n";
$i--;
} while ($i >0)
 ?>
 <br>
 <h2>3. Mostrar los números pares del 1 al 100</h2>
 <br>
 <?php
for ($i=2; $i <=101; $i+=2) {
print "<p> $i </p>\n";
}
  ?>
  <br>
  <h2>4. Mostrar los números impares del 1 al 100</h2>
  <?php
  for ($i=1; $i <101; $i+=2) {
  print "<p> $i </p>\n";
}
   ?>
<br>
<h2>5. Mostrar la suma de los números de 1 a 20</h2>
<br>
<?php
$suma=0;
for ($i=0; $i <=20 ; $i++) {
$suma= $suma+ $i;
}
print "<p>$suma<p\>";
 ?>
 <br>
 <h2>6. Mostrar la suma de números pares de 1 a 20</h2>

<?php
$suma=0;
for ($i=2; $i <=20 ; $i+=2) {
$suma= $suma+ $i;
}
print "<p>$suma<p\>";
 ?>


</body>
</html>
