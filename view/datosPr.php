<?php
//if (isset($_GET['login'])){
//    session_start();
include_once '../services/conexion.php';
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
    <li class="item"><a href="datos.php">Alumnos</a></li>
    <li class="item"><a href="datosCl.php">Clases</a></li>
    <li class="item"><a href="datosDe.php">Departamentos</a></li>
    <li class="item button"><a href="../services/logout.php">Log Out</a></li>
    <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav>
<h1>Profesores</h1>

<!--Filtro-->
<div class="filtro">
<b><u>Buscador</u></b>
    <form action="datosPr.php" method="POST">
        <input class="input1_t" type="text" value="" placeholder="Inserta datos para filtrar" name="fil">
        <input class="buscar" type="submit" value="Filtrar" name="filtro">
    </form>
</div>
<?php
error_reporting(0);
$fil = $_POST['fil'];
if (!($fil == '')) {
    $result = mysqli_query($conexion,"SELECT * from tbl_professor INNER JOIN tbl_dept on tbl_professor.dept=tbl_dept.id_dept where tbl_professor.id_professor like '%$fil%' or tbl_professor.nom_prof like '%$fil%' or tbl_professor.cognom1_prof like '%$fil%' or tbl_professor.cognom2_prof like '%$fil%' or tbl_professor.email_prof like '%$fil%' or tbl_professor.telf like '%$fil%' or tbl_dept.nom_dept like '%$fil%'");
}else {
        $result = mysqli_query($conexion,"SELECT * from tbl_professor INNER JOIN tbl_dept on tbl_professor.dept=tbl_dept.id_dept");}

     // Check connection
    //  if (!$conexion) {
    //      die("Connection failed: ".mysqli_connect_error());
    //  }
    //  $sql="SELECT * FROM tbl_professor INNER JOIN tbl_dept on tbl_professor.dept=tbl_dept.id_dept";
    //  $result=mysqli_query($conexion,$sql);
 ?>
<div class="table">
<table class="table table-striped">
        <thead class="table-dark">
             <th>Id Profesor</th>
             <th>Nombre</th>
             <th>1r Apellido</th>
             <th>2o Apellido</th>
             <th>Correo</th>
             <th>Teléfono</th>
             <th>Departamento</th>
             <th>⠀</th>
             <th>⠀</th>
        </thead>
         <?php
             foreach ($result as $registro){
         ?>
             <tr>
                 <td><?php echo "{$registro['id_professor']}";?></td>
                 <td><?php echo "{$registro['nom_prof']}";?></td>
                 <td><?php echo "{$registro['cognom1_prof']}";?></td>
                 <td><?php echo "{$registro['cognom2_prof']}";?></td>
                 <td><?php echo "{$registro['email_prof']}";?></td>
                 <td><?php echo "{$registro['telf']}"?></td>
                 <td><?php echo "{$registro['nom_dept']}"?></td>
                 <td><?php echo "<a href='../services/actualizarprof.php?id_professor=".$registro['id_professor']."' class='btn btn-warning' role='button' aria-pressed='true'>Actualizar</a>"?></td>
                 <td><?php echo "<a href='../services/eliminarprof.php?id_professor=".$registro['id_professor']."' class='btn btn-danger' role='button' aria-pressed='true'>Eliminar</a>"?></td>
             </tr>
         <?php } ?>
 </table>
</div>
<div class="boton">
    <a href="../services/crear.php" class="btn btn-success" role="button" aria-pressed="true">Crear</a>
</div>
<div class="csv">
    <a href="../services/CSV/csvPr.php" class="btn btn-primary" role="button" aria-pressed="true">Descargar CSV</a>
</div>

 <?mysqli_close($conexion);?>
 <?
/*    
    else{
        header("Location:../index.php");
    }   
}else {
    header("location:../index.php");
}
*/
?>
</div>
</body>
</html>