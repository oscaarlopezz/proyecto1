<?php

$CodigoDept=$_POST['Codigo_clase'];
$NomDept=$_POST['Nom_clase'];

require_once 'conexion.php';

$sql="INSERT INTO `tbl_dept` (`codi_classe`,`nom_classe`, `tutor`) VALUES ('$CodigoDept','$NomDept')";
mysqli_query($conexion,$sql);

header("Location:../view/datos.php");
echo $sql;