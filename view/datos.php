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
    <link rel="stylesheet" href="../css/stylesdatos.css">
</head>
<body>
    <div class="two-columns">
    <input type="submit" value="Crear" name='crearuser' class="button" href="../services/crearuser.php">
<?php
     // Check connection
     if (!$conexion) {
         die("Connection failed: ".mysqli_connect_error());
     }
     $sql="select * from tbl_alumne";
     $result=mysqli_query($conexion,$sql);
 ?>
 <table class="table table-bordered">
         <tr class="active">
             <th>Id Alumno</th>
             <th>DNI</th>
             <th>Nombre</th>
             <th>1r Apellido</th>
             <th>2o Apellido</th>
             <th>Teléfono</th>
             <th>Correo</th>
             <th>Clase</th>
         </tr>
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
                 <td><?php echo "{$registro['classe']}"?></td>
             </tr>
         <?php } ?>
 </table>
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
</body>
</html>