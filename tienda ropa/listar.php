<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <header>
      <h1>TIENDA DE ROPA</h1>
      <button type="submit"><a href="index.html">Inicio</a></button>
      <button type="submit"><a href="listar.php">Lista de Ropa</a></button>
      <button type="submit"><a href="agregar.html">Agregar Ropa</a></button>
      <button type="submit"><a href="buzo.php">Buzo</a></button>
      <button type="submit"><a href="nike.php">Nike</a></button>
      <button type="submit"><a href="mayor500.php">Mayor a 500</a></button>
        </header>
  <h2>Lista de ropa</h2>
  <table border="1">
  <tr>
      <th>ID</th>
      <th>TIPO DE PRENDA</th>
      <th>MARCA</th>
      <th>TALLE</th>
      <th>PRECIO</th>
      <th>IMAGEN</th>
      <th>EDITAR</th>
      <th>BORRAR</th>
  </tr>

  <?php
//Conexion
$conexion=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda_de_ropa");

//preparar la orden
$consulta= "SELECT*FROM ropa";

//ejecutar la orden y obtener los registros
$datos= mysqli_query ($conexion, $consulta);
//mostrar los datos del registro

while ($fila =mysqli_fetch_array($datos) ) { ?>
  <tr>
  <td><?php echo $fila['id']; ?></td>
  <td><?php echo $fila['tipo_de_prenda']; ?></td>
  <td><?php echo $fila['marca']; ?></td>
  <td><?php echo $fila['talle']; ?></td>
  <td><?php echo $fila['precio']; ?></td>
  <td><img src="data:image/png;base64, <?php echo base64_encode($fila['imagen'])?>" alt="" width="100px" height="100px"></td>
  <td><a href="modificar.php?id=<?php echo $fila['id'];?>">Editar</a></td>
  <td><a href="borrar.php?id=<?php echo $fila['id'];?>">Borrar</a></td>
  </tr>
<?php } ?>
</table>


</body>
</html>
