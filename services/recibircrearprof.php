<?php


$NomProf=$_POST['nom_Prof'];
$Cognom1prof=$_POST['cognom1_prof'];
$Cognom2prof=$_POST['cognom2_prof'];
$Emailprof=$_POST['email_prof'];
$Telf=$_POST['telefono_prof'];
$Dept=$_POST['dept'];

require_once 'conexion.php';

/*INSERT INTO `tbl_professor` (`nom_prof`, `cognom1_prof`,`cognom2_prof`,`email_prof`,`telf`,`dept`) VALUES ('Danni','Larrea','Nomelose','danny.orobitg@fje.edu','6734','1');*/

$sql="INSERT INTO `tbl_professor` (`nom_prof`,`cognom1_prof`, `cognom2_prof`, `email_prof`, `telf`, `dept`) VALUES ('$NomProf','$Cognom1prof','$Cognom2prof','$Emailprof','$Telf',$Dept)";
mysqli_query($conexion,$sql);

header("Location:../view/datos.php");
echo $sql;
?>