<?php

$DNI=$_POST['DNI'];
$Nombre=$_POST['Nombre'];
$Apellido1=$_POST['1r_Apellido'];
$Apellido2=$_POST['2o_Apellido'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];
$Clase=$_POST['Classe'];

require_once 'conexion.php';

$sql="UPDATE `tbl_alumne` SET (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('$DNI', '$Nombre', '$Apellido1', '$Apellido2', '$Telefono', '$Correo', '$Clase')";
echo $sql;
die;
mysqli_query($conexion,$sql);

header("Location:../view/datos.php");
echo $sql;

// else {
//     header("Location:../services/actualizarAl.php");
// }