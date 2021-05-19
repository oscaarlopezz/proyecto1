<?php

include_once '../services/conexion.php';
session_start();
if (isset($_SESSION['nom_admin'])){

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestion Escuela</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ********* -->
    <!-- Fuente -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
    <!-- ****** -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../css/stylesD.css">
    <script src="../js/menu.js"></script>
</head>
<body>
<nav>
  <ul class="menu">
    <li class="item button secondary"><a href="../services/crear.php">Crear</a></li>
    <li class="item"><a href="datosPr.php">Profesores</a></li>
    <li class="item"><a href="datosCl.php">Clases</a></li>
    <li class="item"><a href="datos.php">Alumnos</a></li>
    <li class="item button"><a href="../services/logout.php">Log Out</a></li>
    <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav>
<h1>Departamentos</h1>

<!--Filtro-->
<div class="filtro">
<b><u>Buscador</u></b>
    <form action="datosDe.php" method="POST">
        <input class="input1_t" type="text" value="" placeholder="Inserta datos para filtrar" name="fil">
        <input class="buscar" type="submit" value="Filtrar" name="filtro">
    </form>
</div>
<?php
error_reporting(0);
$fil = $_POST['fil'];
if (!($fil == '')) {
    $result = mysqli_query($conexion,"SELECT * from tbl_dept where id_dept like '%$fil%' or codi_dept like '%$fil%' or nom_dept like '%$fil%'");
}else {
        $result = mysqli_query($conexion,"SELECT * from tbl_dept");}

     // Check connection
    //  if (!$conexion) {
    //      die("Connection failed: ".mysqli_connect_error());
    //  }
    //  $sql="SELECT * FROM tbl_classe INNER JOIN tbl_professor on tbl_classe.tutor=tbl_professor.id_professor";
    //  $result=mysqli_query($conexion,$sql);
?>

<!-- 
     // Check connection
     if (!$conexion) {
         die("Connection failed: ".mysqli_connect_error());
     }
     $sql="select * from tbl_dept";
     $result=mysqli_query($conexion,$sql);
 -->
<div class="table">
<table class="table table-striped">
        <thead class="table-dark">
             <th>Id Departamento</th>
             <th>Codigo</th>
             <th>Nombre</th>
             <th>⠀</th>
             <th>⠀</th>
        </thead>
         <?php
             foreach ($result as $registro){
         ?>
             <tr>
                 <td><?php echo "{$registro['id_dept']}";?></td>
                 <td><?php echo "{$registro['codi_dept']}";?></td>
                 <td><?php echo "{$registro['nom_dept']}";?></td>
                 <td><?php echo "<a href='../services/actualizarDept.php?id_dept=".$registro['id_dept']."' class='btn btn-warning' role='button' aria-pressed='true'>Actualizar</a>"?></td>
                 <td><?php echo "<a href='../services/eliminardept.php?id_dept=".$registro['id_dept']."' class='btn btn-danger' role='button' aria-pressed='true'>Eliminar</a>"?></td>
             </tr>
         <?php } ?>
 </table>
</div>

<div class="csv">
    <a href="../services/CSV/csvDe.php" class="btn btn-primary" role="button" aria-pressed="true">Descargar CSV</a>
</div>


<?php mysqli_close($conexion);
}else {
    header("location: ../index.php");
}

?>
</div>
</body>
</html>