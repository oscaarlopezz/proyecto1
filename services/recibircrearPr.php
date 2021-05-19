<?php 
session_start();
if (isset($_SESSION['nom_admin'])){


$nombre=$_POST['nom_pr'];
$apellido1=$_POST['cognom1_pr'];
$apellido2=$_POST['cognom2_pr'];
$telefono=$_POST['telf_pr'];
$email=$_POST['email_pr'];
$dept=$_POST['dept'];

require_once 'conexion.php';

$sql="INSERT INTO `tbl_professor` (`nom_prof`, `cognom1_prof`,`cognom2_prof`,`email_prof`,`telf`,`dept`) VALUES ('$nombre', '$apellido1', '$apellido2', '$email', '$telefono', '$dept')";
echo $sql;
mysqli_query($conexion,$sql);

header("Location:../view/datosPr.php");
}else {
    header("location: ../view/sinacceso.php");
}