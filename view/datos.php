<?php
//if (isset($_GET['login'])){
//    session_start();
<<<<<<< HEAD
include_once '../services/conexion.php';
=======
>>>>>>> 9724de87e02ca00d1dcbcdce077b363b2f936545
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestion Escuela</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../css/stylesdatos.css">

</head>
<body>
    <div class="two-columns">
    <input type="submit" value="Crear" name='crearuser' class="button" href="../services/crearuser.php">
<?php
<<<<<<< HEAD
     // Check connection
     if (!$conexion) {
         die("Connection failed: ".mysqli_connect_error());
     }
     $sql="select * from emp";
     $result=mysqli_query($conexion,$sql);
=======
     // Create connection
     $conn = mysqli_connect(127.0.0.1, sergi, 00zn754n, empresa);
     // Check connection
     if (!$conn) {
         die("Connection failed: " . mysqli_connect_error());
     }
     $sql="select * from emp";
     $result=mysqli_query($conn,$sql);
>>>>>>> 9724de87e02ca00d1dcbcdce077b363b2f936545
 ?>
 <table class="table table-bordered">
         <tr class="active">
             <th>EMPNO</th>
             <th>ENAME</th>
             <th>JOB</th>
             <th>MGR</th>
             <th>HIREDATE</th>
             <th>SAL</th>
             <th>COMM</th>
             <th>DEPTNO</th>
         </tr>
         <?php
             foreach ($result as $registro){
         ?>
             <tr>
                 <td><?php echo "{$registro['empno']}";?></td>
                 <td><?php echo "{$registro['ename']}";?></td>
                 <td><?php echo "{$registro['job']}";?></td>
                 <td><?php echo "{$registro['mgr']}";?></td>
                 <td><?php echo "{$registro['hiredate']}";?></td>
                 <td><?php echo "{$registro['sal']}"?></td>
                 <td><?php echo "{$registro['comm']}"?></td>
                 <td><?php echo "{$registro['deptno']}"?></td>
             </tr>
         <?php } ?>
 </table>
<<<<<<< HEAD
 <?mysqli_close($conexion);?>
=======
 <?mysqli_close($conn);?>
>>>>>>> 9724de87e02ca00d1dcbcdce077b363b2f936545
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