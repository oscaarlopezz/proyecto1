<?php

$DNI=$_POST['DNI'];
$Nombre=$_POST['Nombre'];
$Apellido1=$_POST['1r_Apellido'];
$Apellidio2=$_POST['2o_Apellido'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];
$Clase=$_POST['Clase'];

require_once 'conexion.php';

$sql="INSERT INTO `tbl_alumno` (`dni_alu`, `nom_alu`, `cognom1_alu`, `cognom2_alu`, `telef_alu`, `email_alu`, `clase`) VALUES ('$DNI','$Nombre','$Apellidio1','$Apellido2','$Telefono','$Correo', '$Clase')";
mysqli_query($conexion,$sql);

header("Location:../view/datos.php");
echo $sql;