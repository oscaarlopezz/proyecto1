<?php
$id=$_POST['id'];
$DNI=$_POST['DNI'];
$Nombre=$_POST['Nombre'];
$Apellido1=$_POST['1r_Apellido'];
$Apellido2=$_POST['2o_Apellido'];
$Telefono=$_POST['Telefono'];
$Correo=$_POST['Correo'];
$Clase=$_POST['Classe'];


require_once 'conexion.php';

$sql="UPDATE tbl_alumne SET dni_alu = '$DNI', nom_alu= '$Nombre', cognom1_alu= '$Apellido1', cognom2_alu='$Apellido2', telf_alu='$Telefono', email_alu= '$Correo', classe= $Clase 
WHERE  id_alumne=$id;";
mysqli_query($conexion,$sql);

header("Location:../view/datos.php");
echo $sql;

// else {
//     header("Location:../services/actualizarAl.php");
// }