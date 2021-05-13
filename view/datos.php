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
</head>
<body>
<div class="back">

<div class="nav">
    <a href="datosPr.php" class="btn btn-info" role="button" aria-pressed="true">Profesors</a>
</div>
<div class="nav">
    <a href="datosCl.php" class="btn btn-info" role="button" aria-pressed="true">Clases</a>
</div>
<div class="nav">
    <a href="datosDe.php" class="btn btn-info" role="button" aria-pressed="true">Departamentos</a>
</div>

<?php
     // Check connection
     if (!$conexion) {
         die("Connection failed: ".mysqli_connect_error());
     }
    $sql="SELECT tbl_alumne.id_alumne,tbl_alumne.dni_alu,tbl_alumne.nom_alu,tbl_alumne.cognom1_alu,tbl_alumne.cognom2_alu,tbl_alumne.telf_alu,tbl_alumne.email_alu,tbl_classe.nom_classe FROM tbl_alumne INNER JOIN tbl_classe on tbl_alumne.classe=tbl_classe.id_classe";
    $result=mysqli_query($conexion,$sql);
 ?>
<div class="table">
<table class="table table-striped">
        <thead class="table-dark">
             <th>Id Alumno</th>
             <th>DNI</th>
             <th>Nombre</th>
             <th>1r Apellido</th>
             <th>2o Apellido</th>
             <th>Teléfono</th>
             <th>Correo</th>
             <th>Clase</th>
             <th>⠀</th>
             <th>⠀</th>
        </thead>
         <?php
             foreach ($result as $registro){
         ?>
             <tr>
                 <td><?php echo "{$registro['id_alumne']}";?></td>
                 <td><?php echo "{$registro['dni_alu']}";?></td>
                 <td><?php echo "{$registro['nom_alu']}";?></td>
                 <td><?php echo "{$registro['cognom1_alu']}";?></td>
                 <td><?php echo "{$registro['cognom2_alu']}";?></td>
                 <td><?php echo "{$registro['telf_alu']}"?></td>
                 <td><?php echo "{$registro['email_alu']}"?></td>
                 <td><?php echo "{$registro['nom_classe']}"?></td>
                 <td><?php echo "<a href='../services/actualizarAl.php?id_alumne=".$registro['id_alumne']."' class='btn btn-warning' role='button' aria-pressed='true'>Actualizar</a>"?></td>
                 <td><?php echo "<a href='../services/eliminaralu.php?id_alumne=".$registro['id_alumne']."' class='btn btn-danger' role='button' aria-pressed='true'>Eliminar</a>"?></td>
             </tr>
         <?php } ?>
 </table>
</div>
<div class="boton">
    <a href="../services/crear.php" class="btn btn-success" role="button" aria-pressed="true">Crear</a>
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



