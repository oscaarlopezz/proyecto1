<?php

$NomProf=$_POST['Nom_Prof'];
$Cognom1prof=$_POST['cognom1_prof'];
$Cognom2prof=$_POST['cognom2_prof'];
$Emailprof=$_POST['Email_prof'];
$Telf=$_POST['Telefono_prof'];
$Dept=$_POST['Dept'];

require_once 'conexion.php';

$sql="INSERT INTO `tbl_professor` (`nom_prof`,`cognom1_prof`, `cognom2_prof`, `email_prof`, `telefono_prof`, `dept`) VALUES ('$NomProf','$Cognom1prof','$Cognom2prof','$Emailprof','$Telf','$Dept')";
mysqli_query($conexion,$sql);

header("Location:../view/datos.php");
echo $sql;