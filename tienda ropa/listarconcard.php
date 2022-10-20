<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
  <section>

  </section>
<div class="container">
  <div class="row">

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
    <div class="card col-sm-12 col-md-6 col-lg-3">
      <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($fila['imagen']); ?>" alt="" width="100px" height="100px">
      <a href="ver.php?id= <?php echo $fila ['id']; ?>" class="card-body">
      <h3 class="card-title" style= "width: 100%; font-size: 25px;"><?php echo ucwords($fila ['marca']) ?></h3>
      <span> $ <?php echo $fila['precio'] ; ?></span>
      </a>

      </div>
        <?php } ?>
    </div>
      </div>





  </div>

</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
