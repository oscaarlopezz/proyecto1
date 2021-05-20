<?php 
session_start();
if (isset($_SESSION['nom_admin'])){


$CodigoDept=$_POST['codi_dept'];
$NomDept=$_POST['nom_dept'];

require_once 'conexion.php';

$sql="INSERT INTO `tbl_dept` (`codi_dept`, `nom_dept`) VALUES ('$CodigoDept', '$NomDept')";
mysqli_query($conexion,$sql);

header("Location:../view/datosDe.php");
echo $sql;
}else {
    header("location: ../view/sinacceso.php");
}