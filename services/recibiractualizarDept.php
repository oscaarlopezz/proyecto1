<?php 
session_start();
if (isset($_SESSION['nom_admin'])){

$id=$_POST['id'];
$Nombre=$_POST['nom_dept'];
$CodiDept=$_POST['codi_dept'];


require_once 'conexion.php';

echo $sql="UPDATE tbl_dept SET 
nom_dept= '$Nombre', codi_dept= '$CodiDept' 
WHERE id_dept=$id;";
mysqli_query($conexion,$sql);


header("Location:../view/datosDept.php");
echo $sql;

// else {
//     header("Location:../services/actualizarAl.php");
// }
}else {
    header("location: ../view/sinacceso.php");
}