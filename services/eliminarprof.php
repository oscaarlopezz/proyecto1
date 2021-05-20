<?php

include 'conexion.php';

$id=$_GET['id_professor'];
echo "Tu id es $id";

//$conexion = mysqli_connect("localhost","root","","bd_escuela");

$update="UPDATE tbl_classe SET tutor=NULL WHERE tutor=$id";
$updprofe= mysqli_query($conexion,$update);

$delete = mysqli_query($conexion,"DELETE FROM tbl_professor Where id_professor=$id");
header("Location:../view/datosPr.php");
