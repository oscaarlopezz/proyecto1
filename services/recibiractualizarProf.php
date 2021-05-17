<?php
$id=$_POST['id'];
$Nombre=$_POST['nom_pr'];
$Apellido1=$_POST['cognom1_pr'];
$Apellido2=$_POST['cognom2_pr'];
$Telefono=$_POST['telf_pr'];
$Correo=$_POST['email_pr'];
$Dept=$_POST['dept'];


require_once 'conexion.php';

echo $sql="UPDATE tbl_professor SET 
nom_prof= '$Nombre', cognom1_prof= '$Apellido1', cognom2_prof='$Apellido2', telf='$Telefono', email_prof= '$Correo', dept= $Dept 
WHERE  id_professor=$id;";
mysqli_query($conexion,$sql);



header("Location:../view/datosPr.php");
echo $sql;

// else {
//     header("Location:../services/actualizarAl.php");
// }