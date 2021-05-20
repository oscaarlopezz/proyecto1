<?php

include 'conexion.php';

$id=$_GET['id_classe'];
echo "Tu id es $id";

//$conexion = mysqli_connect("localhost","root","","bd_escuela");

$update="UPDATE tbl_classe SET tutor=NULL WHERE tutor=$id";
$updprofe= mysqli_query($conexion,$update);

$delete = mysqli_query($conexion,"DELETE FROM tbl_classe Where id_classe=$id");
header("Location:../view/datosCl.php");
