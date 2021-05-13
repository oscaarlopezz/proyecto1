<?php

$CodiClase=$_POST['codigo_clase'];
$NomClase=$_POST['nom_clase'];
$Tutor=$_POST['tutor'];

require_once 'conexion.php';

$sql="INSERT INTO `tbl_classe` (`codi_classe`, `nom_classe`, `tutor`) VALUES ('$CodiClase', '$NomClase', '$Tutor')";
mysqli_query($conexion,$sql);

header("Location:../view/datosCl.php");
echo $sql;