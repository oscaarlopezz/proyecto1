<?php

$Nombre=$_POST['nom_pr'];
$Apellido1=$_POST['1r_Apellido'];
$Apellido2=$_POST['2o_Apellido'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];
$Clase=$_POST['Classe'];

require_once 'conexion.php';

$sql="INSERT INTO `tbl_alumne` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telf_alu`, `email_alu`, `classe`) VALUES ('$DNI', '$Nombre', '$Apellido1', '$Apellido2', '$Telefono', '$Correo', '$Clase')";
echo $sql;
mysqli_query($conexion,$sql);

header("Location:../view/datos.php");