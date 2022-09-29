<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Trabajo Práctico N°5</h1>
  <br>
  <h2>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro</h2>

  <?php
$pares= ["2", "4", "6", "8", "10", "12", "14", "16", "18", "20"
];
print "<pre>\n";
print_r ($pares);
print "<pre>\n";
   ?>
   <br>
   <h2>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r()</h2>

   <?php
$varios= ["Pedro", "Ana", "34", "1"
];
print "<pre>\n";
print_r ($varios);
print "<pre>\n";
    ?>
  <br>
  <h2>3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455</h2>

<?php
$datos= [
  'nombre' => "Pedro",
  'apellido' => "Torres",
  'dirección' => "Av. Mayor 3703",
  'telefono' => "1122334455",
];
 ?>
 <br>

 <h2>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h2>

<?php
$ciudades=["Madrid",
             "Barcelona",
             "Londres",
             "New York",
             "Los Ángeles",
             "Chicago"
           ];
foreach ($ciudades as $key => $value) {
print "<p> La ciudad con el índice $key tiene el nombre $value </p>\n";
}
 ?>
 <br>
 <h2>5.Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD.</h2>
  </body>
  <?php
  $citys = ['MD'=>"Madrid",
            'BCL'=>"Barcelona",
            'LD'=>"Londres",
            'NY'=>"New York",
            'LA'=>"Los Ángeles",
            'CCG'=>"Chicago"
          ];
foreach ($citys as $key => $value) {
print "<p> El índice de $value es $key </p>\n";}
 ?>
</html>
