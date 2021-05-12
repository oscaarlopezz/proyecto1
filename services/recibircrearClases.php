<?php

$CodiClase=$_POST['Codigo_Clase'];
$NomClase=$_POST['Nom_clase'];
$Tutor=$_POST['Tutor'];

require_once 'conexion.php';

$sql="INSERT INTO `tbl_classe` (`codi_classe`,`nom_classe`, `tutor`) VALUES ('$CodiClase','$NomClase','$Tutor')";
mysqli_query($conexion,$sql);

header("Location:../view/datos.php");
echo $sql;